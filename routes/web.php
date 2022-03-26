<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Expert;
use App\Http\Middleware\Authenticate;

use App\Models\Category;
use App\Models\Expert;

use App\Models\User;

use App\Models\Consultation;
use App\Models\Expert as ModelsExpert;
use App\Models\Subscription;
use GuzzleHttp\Middleware;
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
Route::get('/dash/form', function () {
    return view('dashboard/themeTools/forms');
});
Route::get('/dash/table', function () {
    return view('dashboard/themeTools/tables');
});
Route::get('/dash/button', function () {
    return view('dashboard/themeTools/buttons');
});
Route::get('/dash/icon', function () {
    return view('dashboard/themeTools/icons');
});
Route::get('/dash/home', [UserController::class, 'index'])->name('dashHome');


Route::resource('/admin/user', UserController::class);
Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/expertd', ExpertController::class);
Route::resource('/admin/consultation', ConsultationController::class);
Route::resource('/admin/comment', CommentController::class);
Route::resource('/admin/contact', ContactController::class);
Route::resource('/admin/subscription', SubscriptionController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Public site 
Auth::routes();

Route::get('/public/home', function () {
    $countUser = User::Where('role_id', 1)->get()->count();
    $countExpert = Expert::get()->count();
    $countConsultation = Consultation::get()->count();
    $countSubscription = Subscription::get()->count();
    return view('public/index', ['countUser' => $countUser,
                                'countExpert' => $countExpert,
                                'countConsultation' => $countConsultation,
                                'countSubscription' => $countSubscription]);
})->name('home');
Route::get('/public/about', function () {
    $countUser = User::Where('role_id', 1)->get()->count();
    $countExpert = Expert::get()->count();
    $countConsultation = Consultation::get()->count();
    $countSubscription = Subscription::get()->count();
    return view('public/about', ['countUser' => $countUser,
                                'countExpert' => $countExpert,
                                'countConsultation' => $countConsultation,
                                'countSubscription' => $countSubscription]);
})->name('about');
Route::get('/public/contact', function () {
    return view('public/contact');
})->name('contact');
Route::get('/public/review', function () {
    return view('public/review');
})->name('review');

Route::get('/public/service', function () {
    $categories = Category::all();
    return view('public/service', ['categories' => $categories]);
})->name('service');

Route::get('/public/sub-service/{id}', [CategoryController::class, 'service'])->name('public.sub-service');
Route::get('/public/single-consultation/{id}', [CategoryController::class, 'singleConsultation'])->name('public.single-consultation');
// store comment
Route::post('/public/storeComment', [CommentController::class, 'storeComment'])->name('public.storeComment');
// to show user profile
Route::get('/public/userProfile', [UserController::class, 'showProfile'])->name('public.userProfile');
// to show user Expert
Route::get('/public/expertProfile', [ExpertController::class, 'showProfile'])->name('public.expertProfile');
// for update user info from user profile
Route::put('/public/userProfile/{id}', [UserController::class, 'updateProfile'])->name('userProfileUpdate');
Route::put('/public/expertProfile/{id}', [ExpertController::class, 'updateProfile'])->name('expertProfileUpdate');
Route::get('/public/expertEditConsultation/{id}', [ExpertController::class, 'expertEditConsultation'])->name('expertEditConsultation');
Route::get('/public/expertDestroyConsultation/{id}', [ExpertController::class, 'expertDestroyConsultation'])->name('expertDestroyConsultation');
Route::get('/public/expertCreateConsultation/{id}', [ExpertController::class, 'expertCreateConsultation'])->name('expertCreateConsultation');
Route::get('/public/expertStoreConsultation/{id}', [ExpertController::class, 'expertStoreConsultation'])->name('expertStoreConsultation');
Route::get('/public/specificConsultation/{id}', [ExpertController::class, 'specificConsultation'])->name('specificConsultation');








// *********** Search ********* 
Route::get('/public/search/', [ConsultationController::class, 'search'])->name('searchPublic');

//*********** checkOut ********** */

// Route::get('/public/checkOut', function () {
//     return view('/public/checkOut');
// });

Route::get('/public/tocheckoute/{id}', [SubscriptionController::class, 'toCheckOute'])->name('public.toCheckOut');
Route::post('/public/subscriptionBooking', [SubscriptionController::class, 'subscriptionBooking'])->name('public.subscriptionBooking');
////////// expert //////////
Route::post('/public/storeRegisterExpert/', [ExpertController::class, 'storeRegister'])->name('storeRegisterExpert');
Route::get('/public/expertRegister/', [ExpertController::class, 'indexRegisterExpert'])->name('indexRegisterExpert');









// Route::get('/public/expertLogin',[ExpertController::class,'showProfile'])->name('public/expertLogin')->middleware('auth:wepexpert');
// Route::get('/public/expertLogout',[ExpertController::class,'logout'])->name('public/expertLogout');
// Route::get('/public/expertLogin',[ExpertController::class,'handlLogin'])->name('public/handlLogin');

// Route::prefix('expert')->name('expert.')->group(function () {

//     Route::middleware(['guest:expert'])->group(function () {
//         Route::view('/login', 'public.expert.login')->name('login');
//         Route::view('/register', 'public.expert.register')->name('register');
//         Route::post('/create', [ExpertController::class, 'storeRegister'])->name('storeRegister');
//     });

//         Route::view('/home', 'public.expertProfile')->name('home')->middleware('auth::expert');
// });




// Route::group(['middleware' => ['auth']], function() {
//     /**
//     * Logout Route
//     */
//     Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
//  });

// Route::get('/public/sub-service', function(){
//     return view('public/sub-service');
// })->name('sub-service');
