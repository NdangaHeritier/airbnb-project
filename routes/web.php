<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersAuthController;
use App\Http\Controllers\BecomeHost;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', PlaceController::class);
Route::resource('/view', PlaceController::class);

Route::resource('/login', UsersAuthController::class);
Route::post('/login', [UsersAuthController::class, 'UserLogin'])->name("UserLogin");
Route::post('/login/create', [UsersAuthController::class, 'store'])->name("signup");
Route::get('/dashboard', [UsersAuthController::class, 'dashboard'])->middleware("isLoggedIn");
Route::get('/logout', [UsersAuthController::class, 'logout']);

//routes of hosting on airbnb

// 1.get prepared
Route::get('/become-a-host', [BecomeHost::class, 'home']);
Route::get('/become-a-host/setup', [BecomeHost::class, 'setup']) -> name('setup');
// 2.step1
Route::get('/become-a-host/structure', [BecomeHost::class, 'structure']) -> name('structure');
Route::post('/become-a-host/structure', [BecomeHost::class, 'storeStructure']) -> name('post.structure');
Route::get('/become-a-host/privacy-type', [BecomeHost::class, 'privacyType']) -> name('privacy-type');
Route::post('/become-a-host/privacy-type', [BecomeHost::class, 'storePrivacyType']) -> name('post.privacyType');
Route::get('/become-a-host/house-plan', [BecomeHost::class, 'housePlan']) -> name('house-plan');
Route::post('/become-a-host/house-plan', [BecomeHost::class, 'storeHousePlan']) -> name('post.HousePlan');
// 3.step2
Route::get('/become-a-host/step2', [BecomeHost::class, 'step2']) -> name('step2');
Route::post('/become-a-host/step2', [BecomeHost::class, 'storeStep2']) -> name('post.step2');
// 4.step3 //final step
Route::get('/become-a-host/finish', [BecomeHost::class, 'step3']) -> name('step3');
Route::post('/become-a-host/finish', [BecomeHost::class, 'storeStep3']) -> name('post.finish');

//reservation proccesses..

Route::post('/view', [ReservationController::class,'store'])->name('reserve');

//hosting adimin pannel
Route::resource('/host', ReservationController::class);
Route::resource('/host/listings', ReservationController::class);
Route::resource('/host/reservations', ReservationController::class);
Route::get('/host/listings', [ReservationController::class, 'index']) -> name('listings');