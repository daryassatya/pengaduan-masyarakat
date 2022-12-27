<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\NewDashboardController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// First Default Routes
// Route::get('/', function () {
//     return view('welcome');
// });

//Home
Route::get('/', function () {
    return view('front-pages.index', [
        'title' => "Home",
    ]);
})->name('/');

// START FRON PAGE

Route::get('/posts', [PostController::class, 'index'])->name('post');
Route::get('/posts/{post:slug}', [PostController::class, 'detail'])->name('post.detail');

// END FRON PAGE

//POST & POST(Category, Authors) Route (OLD VER)
// Route::get('/posts', [PostController::class, 'index'])->name('post');
// Route::get('/posts/{post:slug}', [PostController::class, 'detail'])->name('post.detail');

Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'name' => "Dimas Aryasatya",
        'email' => "daryassatya@gmail.com",
        'image' => "DimasAryaSatya.png",
    ]);
})->name('about');

// Route::get('/categories/{category::slug}', [CategoryController::class, ''])
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Category',
        'categories' => Category::all(),
    ]);
})->name('category');

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts,
    ]);
})->name('category.spesific');

Route::get('/post/author/{author:username}', function (User $author) {
    // dd($user->posts);
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts,
        // 'category' => $category->name,
    ]);
})->name('post.author');

Route::middleware(['guest'])->group(function () {
    // Register & Login Route
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login')->withoutMiddleware('guest');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->withoutMiddleware('guest');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'storeRegister'])->name('store-register')->withoutMiddleware('guest');

});

Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/main-menu', [DashboardController::class, 'mainMenu'])->name('mainmenu');

    //Api
    Route::get('/dashboard/posts/create-slug', [DashboardPostController::class, 'checkSlug'])->name('check-slug');

    Route::resource('/dashboard/posts', DashboardPostController::class)->names([
        'index' => 'dashboard.posts.index',
        'create' => 'dashboard.posts.create',
        'store' => 'dashboard.posts.store',
        'show' => 'dashboard.posts.show',
        'edit' => 'dashboard.posts.edit',
        'update' => 'dashboard.posts.update',
        'destroy' => 'dashboard.posts.destroy',
    ]);

    // Middleware Pengecekan ADMIN
    Route::middleware(['is-admin'])->group(function () {

        Route::prefix('dashboard.categories')->name('dashboard.categories.')->group(function () {
            Route::get('/', function () {
                $data['title'] = 'Categories';
                return view('dashboard.categories.index', $data);
            })->name('index');

            Route::resource('post-categories', DashboardPostCategoryController::class)->names([
                'index' => 'post-categories.index',
                'create' => 'post-categories.create',
                'store' => 'post-categories.store',
                'edit' => 'post-categories.edit',
                'update' => 'post-categories.update',
                'destroy' => 'post-categories.destroy',
            ]);
        });
    });
});

// Tempat Menyimpan Codingan Route Lama

// Post
// Route::get('/posts', function () {

//     return view('posts', [
//         'title' => 'Posts',
//         'posts' => Post::all(),
//     ]);
// });

// Post Detail
// Route::get('/posts/{slug}', function ($slug) {

//     return view('post', [
//         'title' => 'Post Detail',
//         'posts' => Post::find($slug),
//     ]);
// })->name('post');
