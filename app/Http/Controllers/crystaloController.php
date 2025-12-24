<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\project;
use App\Models\product;
use App\Models\blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class crystaloController extends Controller
{
    public function AdminDashboard(){
        return view('backend.pages.home');
    }

    public function AddProject(){
        return view('backend.pages.add_project');
    }

    public function AdminProfile(){
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('backend.pages.profile',compact('userData'));
    }

    public function StoreProfile(request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->position = $request->position;
        $data->email = $request->email;


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        return redirect()->back();

    }

    public function StoreProject(request $request){

        $id = Auth::user()->id;

        if ($request->file('project_thumbnail')) {
            $file = $request->file('project_thumbnail');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/project_images'),$filename);
        }
        if ($request->file('image_1')) {
            $file = $request->file('image_1');
            $filename1 = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/project_images'),$filename1);
        }
        if ($request->file('image_2')) {
            $file = $request->file('image_2');
            $filename2 = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/project_images'),$filename2);
        }
        project::create([
            'admin_id' => $id,
            'project_name' => $request->project_name,
            'project_head' => $request->project_head,
            'price_value' => $request->price_value,
            'project_year' => $request->project_year,
            'project_thumbnail' => $filename,
            'image_1' => $filename1,
            'image_2' => $filename2,
            'location' => $request->location,
            'project_video' => $request->project_video,
            'square_meters' => $request->square_meters,
            'description' => $request->description,
            'category' => $request->category,
        ]);

        return redirect()->back();
    }

    public function AllProject(){
        $project = project::all();
        return view('backend.pages.all_project',compact('project'));
    }

    public function EditProject($id){
        $project = Project::find($id);

        if (!$project) {
            return redirect()->back()->with('error', 'Project not found');
        }

        return view('backend.pages.edit_project', compact('project'));
    }

    public function UpdateProject(request $request){
        $id = $request->id;
        $project = project::find($id);
        $filename = null;
        if ($request->file('project_thumbnail')) {
            $file = $request->file('project_thumbnail');
             @unlink(public_path('upload/project_images/'.$project->project_thumbnail));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/project_images'),$filename);
        }
        $filename1 = null;
        if ($request->file('image_1')) {
            $file = $request->file('image_1');
             @unlink(public_path('upload/project_images/'.$project->image_1));
            $filename1 = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/project_images'),$filename1);
        }
        $filename2 = null;
        if ($request->file('image_2')) {
            $file = $request->file('image_2');
             @unlink(public_path('upload/project_images/'.$project->image_2));
            $filename2 = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/project_images'),$filename2);
        }
        $project->update([
            'project_name' => $request->project_name,
            'project_head' => $request->project_head,
            'project_year' => $request->project_year,
            'project_video' => $request->project_video,
            'project_thumbnail' => $filename ?: $project->project_thumbnail,
            'image_1' => $filename1 ?: $project->image_1,
            'image_2' => $filename2 ?: $project->image_2,
            'price_value' => $request->price_value,
            'location' => $request->location,
            'category' => $request->category,
            'description' => $request->description,
            'square_meters' => $request->square_meters,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('all.project');
    }

    public function AddBlog(){
        return view('backend.pages.add_blog');
    }

    public function StoreBlog(request $request){

        $id = Auth::user()->id;

        if ($request->file('blog_thumbnail')) {
            $file = $request->file('blog_thumbnail');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'),$filename);
        }
        if ($request->file('image_1')) {
            $file = $request->file('image_1');
            $filename1 = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'),$filename1);
        }
        if ($request->file('image_2')) {
            $file = $request->file('image_2');
            $filename2 = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'),$filename2);
        }
        blog::create([
            'admin_id' => $id,
            'title' => $request->title,
            'blog_thumbnail' => $filename,
            'image_1' => $filename1,
            'image_2' => $filename2,
            'category' => $request->category,
            'tags' => $request->tags,
            'quote' => $request->quote,
            'paragraph_1' => $request->paragraph_1,
            'paragraph_2' => $request->paragraph_2,
            'paragraph_3' => $request->paragraph_3,
        ]);

        return redirect()->back();
    }

    public function AllBlog(){
        $blogs = blog::all();
        return view('backend.pages.all_blog',compact('blogs'));
    }

    public function EditBlog($id){
        $blog = blog::find($id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found');
        }

        return view('backend.pages.edit_blog', compact('blog'));
    }

    public function UpdateBlog(request $request){
        $id = $request->id;
        $blog = blog::find($id);
        $admin_id = Auth::user()->id;
        $filename = null;
        if ($request->file('blog_thumbnail')) {
            $file = $request->file('blog_thumbnail');
             @unlink(public_path('upload/blog_images/'.$blog->blog_thumbnail));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'),$filename);
        }
        $filename1 = null;
        if ($request->file('image_1')) {
            $file = $request->file('image_1');
             @unlink(public_path('upload/blog_images/'.$blog->image_1));
            $filename1 = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'),$filename1);
        }
        $filename2 = null;
        if ($request->file('image_2')) {
            $file = $request->file('image_2');
             @unlink(public_path('upload/blog_images/'.$blog->image_2));
            $filename2 = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'),$filename2);
        }
        $blog->update([
            'admin_id' => $admin_id,
            'title' => $request->title,
            'blog_thumbnail' => $filename ?: $blog->blog_thumbnail,
            'image_1' => $filename1 ?: $blog->image_1,
            'image_2' => $filename2 ?: $blog->image_2,
            'category' => $request->category,
            'tags' => $request->tags,
            'quote' => $request->quote,
            'paragraph_1' => $request->paragraph_1,
            'paragraph_2' => $request->paragraph_2,
            'paragraph_3' => $request->paragraph_3,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('all.blog');
    }

    public function AllProduct(){
        $product = product::orderBy('created_at', 'desc')->get();
        return view('backend.pages.all_product',compact('product'));
    }

    public function AddProduct(){
        return view('backend.pages.add_product');
    }

    public function StoreProduct(request $request){
        $id = Auth::user()->id;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/product_images'),$filename);
        }
        product::create([
            'admin_id' => $id,
            'name' => $request->name,
            'photo' => $filename,
            'price_value' => $request->price_value,
            'expected_delivery' => $request->expected_delivery,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
        ]);

        return redirect()->route('all.product');
    }

    public function EditProduct($id){
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        return view('backend.pages.edit_product', compact('product'));
    }

    public function UpdateProduct(request $request){
        $id = $request->id;
        $product = product::find($id);
        $filename = null;
        if ($request->file('photo')) {
            $file = $request->file('photo');
             @unlink(public_path('upload/product_images/'.$product->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/product_images'),$filename);
        }
        $product->update([
            'name' => $request->name,
            'photo' => $filename ?: $product->photo,
            'price_value' => $request->price_value,
            'expected_delivery' => $request->expected_delivery,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('all.product');
    }
}