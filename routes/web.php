<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\HomeController;
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
Route::group(['middleware' => ['guest']], function() {
    /**
     * Register Routes
     */
    Route::get('/register',[RegistrationController::class,'create'] );
    Route::post('/register', [RegistrationController::class,'store'] );

    /**
     * Login Routes
     */
    Route::get('/login', [SessionsController::class,'create'] );
    Route::post('/login', [SessionsController::class,'store'] );

    Route::get('forget-password', [ForgotPasswordController::class,'getEmail']);
    Route::post('forget-password', [ForgotPasswordController::class,'postEmail']);

});

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Routes
     */
    Route::get('/logout', [SessionsController::class,'destroy'] );
    Route::post('/city/{city_id}/reviews',[ReviewsController::class,'store'])->where(['city_id'=>'[0-9+]']);


    Route::group(['middleware' => ['user:admin']], function() {
        Route::get('/city/create', [CityController::class,'create']);
        Route::post('/city', [CityController::class,'store']);
        Route::post('/city/{city_id}', [CityController::class,'update'])->where(['city_id'=>'[0-9+]']);
    });
});
Route::get('/',[HomeController::class,'index']);
Route::get('/city/{city_id}', [CityController::class,'show'])->where(['city_id'=>'[0-9+]']);




