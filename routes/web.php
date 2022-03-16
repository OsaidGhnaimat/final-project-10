<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

use App\Models\Category;
use App\Models\Consultation;
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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', function () {
    return view('dashboard/themeTools/index');
});

// Theme
Route::get('/dash/form', function() {
    return view('dashboard/themeTools/forms');
});
Route::get('/dash/table', function() {
    return view('dashboard/themeTools/tables');
});
Route::get('/dash/button', function() {
    return view('dashboard/themeTools/buttons');
});
Route::get('/dash/icon', function() {
    return view('dashboard/themeTools/icons');
});

Route::resource('/admin/user', UserController::class);
Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/expert', ExpertController::class);
Route::resource('/admin/consultation', ConsultationController::class);
Route::resource('/admin/comment', CommentController::class);
Route::resource('/admin/subscription', SubscriptionController::class);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Public site 

Route::get('/public/home', function(){

    return view('public/index');
})->name('home');
Route::get('/public/about', function(){
    return view('public/about');
})->name('about');
Route::get('/public/contact', function(){
    return view('public/contact');
})->name('contact');
Route::get('/public/review', function(){
    return view('public/review');
})->name('review');

Route::get('/public/service', function(){
    $categories = Category::all();
    return view('public/service',['categories'=>$categories]);
})->name('service');

Route::get('/public/sub-service/{id}',[CategoryController::class,'service'])->name('public.sub-service');
Route::get('/public/single-consultation/{id}', [CategoryController::class,'singleConsultation'])->name('public.single-consultation');
// store comment
Route::post('/public/storeComment', [CommentController::class,'storeComment'])->name('public.storeComment');
// to show user profile
Route::get('/public/userProfile', [UserController::class,'showProfile'])->name('public.userProfile');
// for update user info from user profile
Route::put('/public/userProfile/{id}', [UserController::class,'updateProfile'])->name('userProfileUpdate');

// ******************** 


// Route::group(['middleware' => ['auth']], function() {
//     /**
//     * Logout Route
//     */
//     Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
//  });

// Route::get('/public/sub-service', function(){
//     return view('public/sub-service');
// })->name('sub-service');

