<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\comment;
use App\Models\review;
use App\Models\user;
use App\Models\siteSetting;
use App\Models\testimonial;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class componentController extends Controller
{
    public function SiteSettings(){
        $SiteSettings = siteSetting::first();
        return view('backend.pages.site_settings', compact('SiteSettings'));
    }

    public function UpdateSiteSettings(request $request){
        $id = $request->id;
        $siteSetting = siteSetting::find($id);

        $siteSetting->update([
            'phone' => $request->phone,
            'email' => $request->email,
            'email2' => $request->email2,
            'available' => $request->available,
            'office_address' => $request->office_address,
            'office_address2' => $request->office_address2,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'skype' => $request->skype,
            'linkedin' => $request->linkedin,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back();
    }

    public function AddTestimonial(){
        return view('backend.pages.add_testimonial');
    }

    public function StoreTestimonial(request $request){

        $id = Auth::user()->id;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/testimonials'),$filename);
        }
        testimonial::create([
            'admin_id' => $id,
            'name' => $request->name,
            'position' => $request->position,
            'message' => $request->message,
            'photo' => $filename,
        ]);

        return redirect()->route('all.testimonials');

    }

    public function AllTestimonials(){
        $testimonial = testimonial::all();
        return view('backend.pages.all_testimonial',compact('testimonial'));
    }

    public function EditTestimonial($id){
        $testimonial = testimonial::find($id);

        if (!$testimonial) {
            return redirect()->back()->with('error', 'Testimonial not found');
        }

        return view('backend.pages.edit_testimonial', compact('testimonial'));
    }

    public function UpdateTestimonial(request $request){
        $id = $request->id;
        $testimonial = testimonial::find($id);
        $filename = null;
        if ($request->file('photo')) {
            $file = $request->file('photo');
             @unlink(public_path('upload/testimonials/'.$testimonial->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/testimonials'),$filename);
        }

        $testimonial->update([
            'name' => $request->name,
            'position' => $request->position,
            'message' => $request->message,
            'photo' => $filename ?: $testimonial->photo,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('all.testimonials');
    }

    public function StoreComment(request $request){

        $user_id = Auth::user()->id;
        $blog_id = $request->blog_id;
        $comment = Comment::where('user_id', $user_id)->where('blog_id', $blog_id)->first();

        if ($comment) {
            $comment->delete();
            comment::create([
                'user_id' => $user_id,
                'blog_id' => $blog_id,
                'comment_text' => $request->comment_text,
            ]);
        } else {
            comment::create([
                'user_id' => $user_id,
                'blog_id' => $blog_id,
                'comment_text' => $request->comment_text,
            ]);
        }

        return redirect()->back();

    }

    public function StoreReview(request $request){

        $user_id = Auth::user()->id;
        $product_id = $request->product_id;
        $review = review::where('user_id', $user_id)->where('product_id', $product_id)->first();

        if ($review) {
            $review->delete();
            review::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'rating' => $request->rating,
                'review' => $request->review,
            ]);
        } else {
            review::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'rating' => $request->rating,
                'review' => $request->review,
            ]);
        }

        return redirect()->back();

    }

    public function StoreCart(Request $request){
        $validatedData = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $user_id = Auth::user()->id;
        $product_id = $request->product_id;
        $cart = Cart::where('user_id', $user_id)->where('product_id', $product_id)->first();

        if ($cart) {
            $cart->delete();
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $validatedData['quantity'],
            ]);
        } else {
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $validatedData['quantity'],
            ]);
        }
        return redirect()->back();
    }



    public function updateCart(Request $request){
        $quantities = $request->input('quantities', []);
        $remove = $request->input('remove', []);

        foreach ($quantities as $cartId => $quantity) {
            if (isset($remove[$cartId])) {
                Cart::destroy($cartId);
            } else {
                $cart = Cart::find($cartId);
                if ($cart) {
                    $cart->quantity = $quantity;
                    $cart->save();
                }
            }
        }
        return redirect()->back()->with('success', 'Cart updated successfully!');
    }

    public function updateTotals(Request $request){
        $validatedData = $request->validate([
            'state' => 'required|string',
            'country' => 'required|string',
        ]);

        $country = $validatedData['country'];
        $state = $validatedData['state'];

        $shippingCosts = [
            'Nigeria' => 5,
            'United Kingdom (UK)' => 21,
            'United State (USA)' => 8,
            'France' => 17,
            'Ghana' => 7,
        ];

        $shippingCost = $shippingCosts[$country] ?? 5;

        $user_id = Auth::id();
        $user = user::find($user_id);
        $user->shipping_cost = $shippingCost;
        $user->country = $country;
        $user->state = $state;
        $user->save();

        return redirect()->back()->with('success', 'Cart updated successfully!');
    }

}