<?php

use App\Http\Middleware\checkAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crystaloController;
use App\Http\Controllers\componentController;
use App\Http\Controllers\pagesController;

 Route::controller(pagesController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/product/{id}', 'product')->name('product');
    Route::get('/about', 'about')->name('about');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blog/{id}', 'blog')->name('blog');
    Route::get('/services', 'services')->name('services');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/project/{id}', 'project')->name('project');
    Route::get('/auth/{client}','redirect')->name('auth');
    Route::get('/auth/{client}/callback','handleCallback');
    Route::get('/authenticate', 'authenticate')->name('authenticate');
});
Route::middleware('auth')->group(function () {
    Route::middleware(checkAdmin::class)->group(function () {
        Route::controller(crystaloController::class)->group(function(){
            Route::get('/admin/dashboard', 'AdminDashboard')->name('admin.dashboard');
            Route::get('/admin/profile', 'AdminProfile')->name('admin.profile');
            Route::post('/store/profile', 'StoreProfile')->name('store.profile');
            Route::get('/add/project', 'AddProject')->name('add.project');
            Route::get('/edit/project/{id}', 'EditProject')->name('edit.project');
            Route::post('/update/project', 'UpdateProject')->name('update.project');
            Route::get('/all/project', 'AllProject')->name('all.project');
            Route::post('/store/project', 'StoreProject')->name('store.project');
            Route::get('/add/product', 'AddProduct')->name('add.product');
            Route::get('/edit/product/{id}', 'EditProduct')->name('edit.product');
            Route::post('/update/product', 'UpdateProduct')->name('update.product');
            Route::get('/all/product', 'AllProduct')->name('all.product');
            Route::post('/store/product', 'StoreProduct')->name('store.product');
            Route::get('/add/blog', 'AddBlog')->name('add.blog');
            Route::post('/store/blog', 'StoreBlog')->name('store.blog');
            Route::get('/all/blog', 'AllBlog')->name('all.blog');
            Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog');
            Route::post('/update/blog', 'UpdateBlog')->name('update.blog');
        });
        Route::controller(componentController::class)->group(function(){
            Route::get('/site/settings', 'SiteSettings')->name('site.settings');
            Route::post('/update/site/settings', 'UpdateSiteSettings')->name('update.site.settings');
            Route::get('/add/testimonial', 'AddTestimonial')->name('add.testimonial');
            Route::post('/store/testimonial', 'StoreTestimonial')->name('store.testimonial');
            Route::get('/all/testimonial', 'AllTestimonials')->name('all.testimonials');
            Route::get('/edit/testimonial/{id}', 'EditTestimonial')->name('edit.testimonial');
            Route::post('/update/testimonial', 'UpdateTestimonial')->name('update.testimonial');
        });
    });
    Route::controller(componentController::class)->group(function(){
        Route::post('/store/comment', 'StoreComment')->name('store.comment');
        Route::post('/store/review', 'StoreReview')->name('store.review');
        Route::post('/store/cart', 'StoreCart')->name('store.cart');
        Route::post('/cart/update', 'updateCart')->name('update.cart');
        Route::post('/totals/update', 'updateTotals')->name('update.totals');
    });
    Route::controller(pagesController::class)->group(function(){
        Route::get('/cart', 'cart')->name('cart');
    });
});



require __DIR__.'/auth.php';
