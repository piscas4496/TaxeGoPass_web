<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\RegisterController;
use App\Http\Controllers\API\AuthController; 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
$router->get('/',function (){
    return response()->json('hello guy');
});

// Route::group([
//     'middleware' => 'api',
//     'namespace' => 'App\Http\Controllers',
//     'prefix'  => 'auth'
// ], function ($router){ 
//     Route::post('login','App\Http\Controllers\API\AuthController@login'); 
// });


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::post('signin', [LoginController::class, 'signin'])->name('signin');
  

//Route::get('signin',[LoginController::class,'loginuser'])->name('signin');

