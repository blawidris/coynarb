<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesContoller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

// Route::get('/wallet', function () {
//     return view('index');
// });

Auth::routes([
    'verify' => true]
);

Route::get('/', [PagesContoller::class, 'index']);

Route::get('/markets',[PagesContoller::class,'markets']);

Route::get('/market-crypto',[PagesContoller::class,'crypto_market']);

Route::get('/about-us',[PagesContoller::class,'about']);

Route::get('/terms-condition',[PagesContoller::class,'terms']);

Route::get('/minning-wall',[PagesContoller::class,'minning_wall'])->middleware(['auth']);

Route::get('/profile',[PagesContoller::class,'profile'])->middleware(['auth']);;

Route::get('/wallet',[HomeController::class,'wallets'])->name('wallet')->middleware(['auth', 'verified']);

Route::get('/settings',[PagesContoller::class,'settings'])->middleware(['auth']);;

// Route::get('/email/verify', function () {
//     return view('auth.verify');
// })->middleware('auth')->name('verification.notice');

 
// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
 
//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
 
//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');


//  Components
