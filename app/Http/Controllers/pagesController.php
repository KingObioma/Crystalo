<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\blog;
use App\Models\cart;
use App\Models\review;
use App\Models\project;
use App\Models\product;
use App\Models\comment;
use App\Models\siteSetting;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
        return view('frontend.pages.index');
    }

    public function about(){
        $team_mates = user::where('role', 'Admin')->limit(4)->get();
        return view('frontend.pages.about', compact('team_mates'));
    }

    public function services(){
        $SiteSettings = siteSetting::find(1);
        return view('frontend.pages.services', compact('SiteSettings'));
    }

    public function projects(){
        $projects = project::limit(9)->get();
        return view('frontend.pages.projects', compact('projects'));
    }

    public function project($id){
        $project = project::find($id);
        // $category = $project->category;
        // $projects = project::where('id', '!=', $id)->where('category', $category)->limit(4)->get();
        $projects = project::where('id', '!=', $id)->limit(4)->get();
        return view('frontend.pages.single_project', compact('project', 'projects'));
    }

    public function blogs(){
        $blogs = blog::limit(9)->get();
        return view('frontend.pages.blogs', compact('blogs'));
    }

    public function blog($id){
        $blog = blog::find($id);
        $tags = explode(',', $blog->tags);
        $SiteSettings = siteSetting::find(1);
        $admin = user::where('id', $blog->admin_id)->first();
        $blogs = blog::where('id', '!=', $id)->limit(3)->get();
        $date = Carbon::parse($blog->created_at)->format('M d, Y');
        $comments = comment::where('user_id', '!=', $blog->admin_id)->where('blog_id', $id)->limit(3)->get();
        $author_comment = comment::where('user_id', $blog->admin_id)->where('blog_id', $id)->first();
        $author = user::where('id', $blog->admin_id)->first();
        return view('frontend.pages.single_blog', compact('blogs', 'blog', 'tags', 'SiteSettings', 'admin', 'date', 'comments', 'author_comment', 'author'));
    }

    public function shop(){
        $products = Product::limit(9)->orderBy('created_at', 'DESC')->get();
        $popular_products = $products->sortBy('price_value')->take(3);
        return view('frontend.pages.shop', compact('products', 'popular_products'));
    }

    public function product($id){
        $product = product::find($id);
        $products = product::where('id', '!=', $id)->limit(4)->orderBy('created_at', 'DESC')->get();
        $reviews = review::where('product_id', $id)->limit(4)->orderBy('created_at', 'DESC')->get();
        $averageRating = $reviews->avg('rating');
        return view('frontend.pages.single_product', compact('product', 'products', 'reviews', 'averageRating'));
    }

    public function authenticate(){
        return view('frontend.pages.authenticate');
    }

    public function cart(){
        $user = user::where('id', Auth::id())->first();
        $carts = cart::where('user_id',  $user->id)->get();
        return view('frontend.pages.cart', compact('carts', 'user'));
    }

    public function redirect($client){
        try {
            $validClients = ['google', 'facebook', 'twitter'];
            if (!in_array($client, $validClients)) {
                return response()->json(['error' => 'Invalid client specified.'], 400);
            }

            return Socialite::driver($client)->redirect();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to redirect for authentication.', 'details' => $e->getMessage()], 500);
        }
    }

    public function handleCallback($client){
        try {
            $validClients = ['google', 'facebook', 'twitter'];
            if (!in_array($client, $validClients)) {
                return response()->json(['error' => 'Invalid client specified.'], 400);
            }

            $clientUser = Socialite::driver($client)->user();
            $clientId = "{$client}_id";
            $user = User::where($clientId, $clientUser->getId())->first();
            if (!$user) {
                $user = User::where('email', $clientUser->getEmail())->first();
                if ($user) {
                    $user->update([$clientId => $clientUser->getId()]);
                    if (empty($user->name)) {
                        $user->name = $clientUser->getName();
                        $user->save();
                    }
                } else {
                     $user = User::create([
                        'name' => $clientUser->getName(),
                        'email' => $clientUser->getEmail(),
                        'password' => 'kkkkkkkk',
                        'email_verified_at' => now(),
                        $clientId => $clientUser->getId()
                    ]);
                }
            }
            Auth::login($user);
            if(Auth::user()->role == 'admin'){
                return redirect(route('admin.dashboard'));
            }
            return redirect(route('home'));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to handle authentication callback.', 'details' => $e->getMessage()], 500);
        }
    }

}
