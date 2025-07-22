<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscribeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('movies.index');
})->middleware(['auth', 'check.device.limit'])->name('home');

Route::post('/logout', function (Request $request) {
    return app(\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class)->destroy($request);
})->name('logout')->middleware(['auth', 'logout.device']);

Route::get('/subscribe/plans', [SubscribeController::class, 'showPlans'])->name('subscription.plans');
Route::get('/subscribe/plans/{plan}', [SubscribeController::class, 'checkoutPlans'])->name('subscription.checkout');
Route::post('/subscribe/checkout', [SubscribeController::class, 'checkout'])->name('subscription.process');
Route::get('/subscribe/sucess', [SubscribeController::class, 'showSucess'])->name('subscription.sucess');