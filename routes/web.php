<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\RentalController;
use App\Http\Controllers\Frontend\CarController as FrontendCarController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\RentalController as FrontendRentalController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\verifyotpMiddleware;
use Illuminate\Support\Facades\Route;


// Auth

Route::post('/createAccount', [UserController::class, 'createAccount']);
Route::post('/userLogin', [UserController::class, 'userLogin']);

// logout
Route::get('/userLogout', [UserController::class, 'userLogout'])->middleware([verifyotpMiddleware::class]);


// Car information
Route::post('/addcar', [CarController::class, 'AddNewCar']);
Route::post('/editcar', [CarController::class, 'EditCar']);
Route::post('/deletecar', [CarController::class, 'DeleteCar']);
Route::get('/detailscar', [CarController::class, 'DetailsCar']);
Route::post('/detailscarbyid', [CarController::class, 'DetailsCarbyid']);


// User

Route::post('/addcustomer', [CustomerController::class, 'AddCustomer'])->middleware([verifyotpMiddleware::class]);
Route::post('/editcustomer', [CustomerController::class, 'EditCustomer'])->middleware([verifyotpMiddleware::class]);
Route::post('/deletecustomer', [CustomerController::class, 'DeleteCustomer'])->middleware([verifyotpMiddleware::class]);
Route::get('/detailscustomer', [CustomerController::class, 'DetailsCustomer'])->middleware([verifyotpMiddleware::class]);
Route::post('/detailscustomerbyid', [CustomerController::class, 'DetailsCustomerbyid'])->middleware([verifyotpMiddleware::class]);
// non user book reject
Route::get('/rejectbook', [UserController::class, 'RejectBook'])->middleware([verifyotpMiddleware::class]);

//rental

Route::post('/addrental', [RentalController::class, 'AddRental'])->middleware([verifyotpMiddleware::class]);
Route::post('/editrental', [RentalController::class, 'EditRental'])->middleware([verifyotpMiddleware::class]);
Route::post('/deleterental', [RentalController::class, 'DeleteRental'])->middleware([verifyotpMiddleware::class]);
Route::get('/detailsrental', [RentalController::class, 'DetailsRental'])->middleware([verifyotpMiddleware::class]);
Route::post('/detailsrentalbyid', [RentalController::class, 'DetailsRentalbyid'])->middleware([verifyotpMiddleware::class]);


//Admin profile

Route::get('/profile',[UserController::class,'UserProfile'])->middleware([verifyotpMiddleware::class]);
Route::post('/updateprofile',[UserController::class,'UpdateProfile'])->middleware([verifyotpMiddleware::class]);

//User profile

// Route::get('/cusprofile',[UserController::class,'CusProfile'])->middleware([verifyotpMiddleware::class]);
// Route::post('/cusupdateprofile',[UserController::class,'CusProfile'])->middleware([verifyotpMiddleware::class]);




// Customer Post

//Filter-car
Route::post('/filtercar', [FrontendCarController::class, 'filterCarType'])->middleware([verifyotpMiddleware::class]);

//Bookdata Create
Route::post('/createbookdata', [FrontendRentalController::class, 'createBookData'])->middleware([verifyotpMiddleware::class]);

Route::get('/rentalhistroydata', [FrontendRentalController::class, 'RentalHistroyData'])->middleware([verifyotpMiddleware::class]);
// Route::post('/rental-histroy-updated',[FrontendRentalController::class,'RentalhistroyUpdated'])->middleware([verifyotpMiddleware::class]);
Route::post('/detailsbycaruser', [FrontendRentalController::class, 'RentalDetailsbyCarUser'])->middleware([verifyotpMiddleware::class]);
Route::post('/rentalmsg', [FrontendRentalController::class, 'RentalDetailsForMsg'])->middleware([verifyotpMiddleware::class]);

Route::post('canclebook', [FrontendRentalController::class, 'cancleBook'])->middleware([verifyotpMiddleware::class]);

Route::post('/sendmail', [FrontendRentalController::class, 'sendMail'])->middleware([verifyotpMiddleware::class]);




// Report

Route::get('/report', [ReportController::class, 'reportAll']);


//dashboard for admin or customer



//pages

Route::get('/', [PageController::class, 'homePage'])->name('home');
Route::get('/about', [PageController::class, 'aboutPage'])->name('about');
Route::get('/contact', [PageController::class, 'contactPage'])->name('contact');
Route::get('/rentalhistroy', [PageController::class, 'rentalHistroy'])->name('rentalhistroy')->middleware([verifyotpMiddleware::class]);
Route::get('/login', [PageController::class, 'LogIn'])->name('login');

Route::get('/signup', [PageController::class, 'SignUp'])->name('signup');

Route::get('/Dashboard', [UserController::class, 'Dashboard'])->name('admindashboard')->middleware([verifyotpMiddleware::class]);

Route::get('/cusprofile',[PageController::class,'CustomerProfile'])->name('cusprofile')->middleware([verifyotpMiddleware::class]);





//admin pages

Route::get('/customer', [PageController::class, 'CustomerPage'])->name('customer')->middleware([verifyotpMiddleware::class]);
Route::get('/cars', [PageController::class, 'Cars'])->name('cars')->middleware([verifyotpMiddleware::class]);
Route::get('/rental', [PageController::class, 'Rental'])->name('rental')->middleware([verifyotpMiddleware::class]);
Route::get('/adminprofile',[PageController::class,'AdminProfile'])->name('adminprofile')->middleware([verifyotpMiddleware::class]);
