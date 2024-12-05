<?php

use App\Http\Controllers\CitizenAuditProjectsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MdaProjectsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

//Route::middleware(['auth:sanctum'])->group(function () {
//    Route::apiResources([
//        'categories' => CategoryController::class,
//        'menus' => MenuController::class,
//        'orders' => OrdersController::class,
//        'payments' => PaymentController::class,
//    ]);
//
//    Route::get('/getOrderDetails/{id}', [OrdersController::class, 'getOrderDetails']);
//});


//get all projects
Route::get('/mda-projects', [MdaProjectsController::class, 'index']);
Route::get('/citizen-audited-projects', [CitizenAuditProjectsController::class, 'index']);

//get project by county id
Route::get('/citizen-audited-projects/{county_name}', [CitizenAuditProjectsController::class, 'getAllFromSpecificCounty']);
//get project by statedepartment
Route::get('/mda-projects/{statedepartment}', [MdaProjectsController::class, 'getProjectsByStateDepartment']);

//home page details
Route::get('/home', [HomeController::class, 'home']);

//emails
Route::get('/email/verify', function () {
    if (Auth::user()->hasVerifiedEmail()) {
        return response()->json(['message' => 'Email already verified.']);
    } else {
        Auth::user()->sendEmailVerificationNotification();
        return response()->json(['message' => 'Verification link sent on your email']);
    }
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return response()->json(['message' => 'Email verified']);
})->middleware(['auth', 'signed'])->name('verification.verify');

//resend email verification
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

