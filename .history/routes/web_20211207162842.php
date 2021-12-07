<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\RSVPController;
use App\Http\Controllers\Admin\CitiesController;
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

//SEARCH CARS
Route::get('/searchcars', [HomeController::class, 'searchCars'])->name('search-cars');

Route::get('/post-searchcars', [HomeController::class, 'searchCarsPost'])->name('search-cars-post');

//SELL CAR
Route::get('/sellcar', [CarController::class, 'create'])->middleware(['auth'])->name('sell-car');

Route::post('/store-sellcar', [CarController::class, 'store'])->middleware(['auth'])->name('sell-car-store');

// CAR INSURANCE
Route::post('/store-sellinsurance', [CarInsuranceController::class, 'store'])->name('sell-insurance-store');

Route::get('/carinsurance', [UserController::class, 'carInsurance'])->name('car-insurance');

//ABOUT US
Route::get('/aboutus', [UserController::class, 'aboutUs'])->name('about-us');

//CONTACT US
Route::get('/contactus', [UserController::class, 'contactUs'])->name('contact-us');

Route::post('/store-contactus', [UserController::class, 'contactUsStore'])->name('contact-us-store');

// VEHICLE TRANSFER (user)
Route::get('/vehicle-transfer', [VehicleTransferController::class, 'create'])->middleware('auth')->name('vehicle-transfer-create');

Route::post('/store-vehicle-transfer', [VehicleTransferController::class, 'store'])->middleware('auth')->name('vehicle-transfer-store');

Route::get('/edit-vehicle-transfer', [VehicleTransferController::class, 'edit'])->middleware('auth')->name('vehicle-transfer-edit');

Route::post('/update-vehicle-transfer', [VehicleTransferController::class, 'update'])->middleware('auth')->name('vehicle-transfer-update');

// Logbook Car Search (user)
Route::get('/create-logbook-car-search', [LogbookCarSearchController::class, 'create'])->name('logbook-car-search-create'); 

Route::post('/store-logbook-car-search', [LogbookCarSearchController::class, 'store'])->name('logbook-car-search-store');

// Mileage Verification (user)
Route::get('/create-mileage-verification', [MileageVerificationController::class, 'create'])->middleware('auth')->name('mileage-verification-create');

Route::post('store-mileage-verification', [MileageVerificationController::class, 'store'])->middleware('auth')->name('mileage-verification-store');

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


    //SETTINGS
    Route::get('/settings', [AdminController::class, 'settings'])->middleware('auth')->name('settings');

    //Products
    Route::get('/products', [ProductController::class, 'index'])->middleware('auth')->name('products-list');

    Route::get('/create-products', [ProductController::class, 'create'])->middleware('auth')->name('products-create');

    Route::post('/store-products', [ProductController::class, 'store'])->middleware('auth')->name('products-store');

    //Categories
    Route::get('/categories', [CarModelController::class, 'index'])->middleware('auth')->name('car-models-list');

    Route::get('/create-car-models', [CarModelController::class, 'create'])->middleware('auth')->name('car-models-create');

    Route::post('/store-car-models', [CarModelController::class, 'store'])->middleware('auth')->name('car-models-store');

    //Car Conditions
    Route::get('/car-conditions', [CarConditionController::class, 'index'])->middleware('auth')->name('car-conditions-list');

    Route::get('/create-car-conditions', [CarConditionController::class, 'create'])->middleware('auth')->name('car-conditions-create');

    Route::post('/store-car-conditions', [CarConditionController::class, 'store'])->middleware('auth')->name('car-conditions-store');

    //Car Body Types
    Route::get('/car-body', [CarBodyController::class, 'index'])->middleware('auth')->name('car-body-list');

    Route::get('/create-car-body', [CarBodyController::class, 'create'])->middleware('auth')->name('car-body-create');

    Route::post('/store-car-body', [CarBodyController::class, 'store'])->middleware('auth')->name('car-body-store');

    //Car Price Types
    Route::get('/car-price', [CarPriceController::class, 'index'])->middleware('auth')->name('car-price-list');

    Route::get('/create-car-price', [CarPriceController::class, 'create'])->middleware('auth')->name('car-price-create');

    Route::get('/edit-car-price', [CarPriceController::class, 'edit'])->middleware('auth')->name('car-price-edit');

    Route::post('/store-car-price', [CarPriceController::class, 'store'])->middleware('auth')->name('car-price-store');

    Route::post('/update-car-price', [CarPriceController::class, 'update'])->middleware('auth')->name('car-price-update');
    
    //Car Engine Types
    Route::get('/car-engine-types', [EngineTypeController::class, 'index'])->middleware('auth')->name('car-engine-types-list');

    Route::get('/create-car-engine-types', [EngineTypeController::class, 'create'])->middleware('auth')->name('car-engine-types-create');

    Route::post('/store-car-engine-types', [EngineTypeController::class, 'store'])->middleware('auth')->name('car-engine-types-store');

    Route::get('/edit-car-engine-types', [EngineTypeController::class, 'edit'])->middleware('auth')->name('car-engine-types-edit');

    Route::post('/update-car-engine-types', [EngineTypeController::class, 'update'])->middleware('auth')->name('car-engine-types-update');

    //Car Engine Sizes
    Route::get('/car-engine-sizes', [EngineSizeController::class, 'index'])->middleware('auth')->name('car-engine-sizes-list');

    Route::get('/create-car-engine-sizes', [EngineSizeController::class, 'create'])->middleware('auth')->name('car-engine-sizes-create');

    Route::post('/store-car-engine-sizes', [EngineSizeController::class, 'store'])->middleware('auth')->name('car-engine-sizes-store');

    //Car Transmission Types
    Route::get('/car-transmission-types', [CarTransmissionController::class, 'index'])->middleware('auth')->name('car-transmission-types-list');

    Route::get('/create-car-transmission-types', [CarTransmissionController::class, 'create'])->middleware('auth')->name('car-transmission-types-create');

    Route::post('/store-car-transmission-types', [CarTransmissionController::class, 'store'])->middleware('auth')->name('car-transmission-types-store');

    //Car Colors
    Route::get('/car-colors', [CarColorController::class, 'index'])->middleware('auth')->name('car-colors-list');

    Route::get('/create-car-colors', [CarColorController::class, 'create'])->middleware('auth')->name('car-colors-create');

    Route::post('/store-car-colors', [CarColorController::class, 'store'])->middleware('auth')->name('car-colors-store');

    //Cities
    Route::get('/cities', [CitiesController::class, 'index'])->middleware('auth')->name('cities-list');

    Route::get('/create-cities', [CitiesController::class, 'create'])->middleware('auth')->name('cities-create');

    Route::post('/store-cities', [CitiesController::class, 'store'])->middleware('auth')->name('cities-store');

    //Cover Types 
    Route::get('/cover-types', [CoverTypesController::class, 'index'])->middleware('auth')->name('cover-types-list');

    Route::get('/create-cover-types', [CoverTypesController::class, 'create'])->middleware('auth')->name('cover-types-create');

    Route::post('/store-cover-types', [CoverTypesController::class, 'store'])->middleware('auth')->name('cover-types-store');

    //Car Insurance Requests
    Route::get('/insurance-requests', [CarInsuranceController::class, 'index'])->middleware('auth')->name('insurance-requests-list'); 

    Route::get('/create-insurance-requests', [CarInsuranceController::class, 'create'])->middleware('auth')->name('insurance-requests-create');

    Route::post('/store-insurance-requests', [CarInsuranceController::class, 'store'])->middleware('auth')->name('insurance-requests-store');

    //Vehicle Transfer Requests
    Route::get('/vehicle-transfers', [VehicleTransferController::class, 'index'])->middleware('auth')->name('vehicle-transfers-list');

    //Logbook Car Search
    Route::get('/logbook-car-search', [LogbookCarSearchController::class, 'index'])->middleware('auth')->name('logbook-car-search-list');

    //Mileage Verification
    Route::get('/mileage-verification', [MileageVerificationController::class, 'index'])->middleware('auth')->name('mileage-verification-list');

    //Blog
    Route::get('/blog', [BlogController::class, 'index'])->middleware('auth')->name('blog-list');

    Route::get('/create-blog', [BlogController::class, 'create'])->middleware('auth')->name('blog-create');

    Route::post('/store-blog', [BlogController::class, 'store'])->middleware('auth')->name('blog-store');

    Route::get('/edit-blog', [BlogController::class, 'edit'])->middleware('auth')->name('blog-edit');

    Route::get('/show-blog', [BlogController::class, 'show'])->middleware('auth')->name('blog-show');


    Route::get('/vehicle-transfer-requests', [AdminController::class, 'vehicleTransferRequests'])->middleware('auth')->name('vehicle-transfer-requests');

    Route::get('/mileage-verification-requests', [AdminController::class, 'mileageVerificationRequests'])->middleware('auth')->name('mileage-verification-requests');

    Route::get('/logbook-car-search-requests', [AdminController::class, 'logbookCarSearchRequests'])->middleware('auth')->name('logbook-car-search-requests');
});

require __DIR__.'/auth.php';
