<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\RSVPController;
use App\Http\Controllers\Admin\CitiesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Web routes for your Azimio La Umoja. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

// HOME/ LANDING PAGE
Route::get('/', [HomeController::class, 'index'])->name('/');

// USER PROFILE
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile'); 

Route::post('/profile/update', [UserController::class, 'update'])->name('profileUpdate');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// EMAIL VERIFICATION
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//ABOUT US
Route::get('/aboutus', [UserController::class, 'aboutUs'])->name('about-us');

//CONTACT US
Route::get('/contactus', [UserController::class, 'contactUs'])->name('contact-us');

Route::post('/store-contactus', [UserController::class, 'contactUsStore'])->name('contact-us-store');


// Send SMS (inactive user)
Route::get('/send-sms', [UserController::class, 'sendSMS'])->middleware('auth')->name('send-sms');

// Verify SMS
Route::post('/verify-sms', [UserController::class, 'verifySMS'])->middleware('auth')->name('verify-sms');

// KEYWORD SEARCH
Route::post('/keyword-search', [HomeController::class, 'keywordSearch'])->name('keyword-search');


//ADMIN ROUTES.
Route::prefix('admin')->group(function()
{
    //Dashboard 
    Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth')->name('dashboard'); 

    //USERS
    Route::get('/users', [AdminController::class, 'index'])->middleware('auth')->name('all-users');

    Route::get('/create-user', [AdminController::class, 'create'])->middleware('auth')->name('create-user');

    Route::post('/create-user', [AdminController::class, 'store'])->middleware('auth')->name('store-user');

    Route::get('/edit-user', [AdminController::class, 'edit'])->middleware('auth')->name('edit-user');

    Route::get('/delete-user', [AdminController::class, 'delete'])->middleware('auth')->name('delete-user');

    Route::post('/activate-user', [AdminController::class, 'activate'])->middleware('auth')->name('activate-user');

    Route::post('/deactivate-user', [AdminController::class, 'deactivate'])->middleware('auth')->name('deactivate-user');

    Route::post('/ban-user', [AdminController::class, 'ban'])->middleware('auth')->name('ban-user');

    //Products
    Route::get('/products', [ProductController::class, 'index'])->middleware('auth')->name('products-list');

    Route::get('/create-products', [ProductController::class, 'create'])->middleware('auth')->name('products-create');

    Route::post('/store-products', [ProductController::class, 'store'])->middleware('auth')->name('products-store');

    //Categories
    Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth')->name('categories-list');

    Route::get('/create-categories', [CategoryController::class, 'create'])->middleware('auth')->name('categories-create');

    Route::post('/store-categories', [CategoryController::class, 'store'])->middleware('auth')->name('categories-store');

    //Cities
    Route::get('/cities', [CitiesController::class, 'index'])->middleware('auth')->name('cities-list');

    Route::get('/create-cities', [CitiesController::class, 'create'])->middleware('auth')->name('cities-create');

    Route::post('/store-cities', [CitiesController::class, 'store'])->middleware('auth')->name('cities-store');

    //Blog
    Route::get('/blog', [BlogController::class, 'index'])->middleware('auth')->name('blog-list');

    Route::get('/create-blog', [BlogController::class, 'create'])->middleware('auth')->name('blog-create');

    Route::post('/store-blog', [BlogController::class, 'store'])->middleware('auth')->name('blog-store');

    Route::get('/edit-blog', [BlogController::class, 'edit'])->middleware('auth')->name('blog-edit');

    Route::get('/show-blog', [BlogController::class, 'show'])->middleware('auth')->name('blog-show');

});

require __DIR__.'/auth.php';
