<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::post('users', [UserController::class, 'getData']);
Route::view("users", "users");  
Route::view("home", "home");  
Route::view("noaccess", "noaccess");  

// Route::group(['middleware'=>['protectedPage']],function(){
//     Route::view('user','users');
// });