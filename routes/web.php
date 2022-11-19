<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\ProjectsController;

Route::resource('index', SiteController::class);
Route::resource('faq', FAQController::class);
Route::resource('cv', CVController::class);
Route::resource('projects', ProjectsController::class);

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
    return view('./site/index');
});
