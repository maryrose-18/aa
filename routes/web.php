<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyManagementController;
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

/*
|--------------------------------------------------------------------------
| NOTES
|--------------------------------------------------------------------------
|
| IF NAKA WEB - USE TOKEN
| IF NAKA API - EITHER APP-KEY OR SARILING TOKEN
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function () {
    return view('managements.user_management'); 
})->name('users');

Route::get('home', function () {
    return view('home'); 
})->name('home');

Route::get('tokyo', function () {
    return view('places.tokyo'); 
})->name('tokyo');


// Route::post('company-management',[CompanyManagementController::class, 'store']);

// Route::post('company-management',[CompanyManagementController::class, 'store'])->name('company.management');
