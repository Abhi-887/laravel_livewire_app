<?php

use App\Http\Controllers\PageController;
use App\Livewire\ContactUs;
use App\Livewire\ShowHome;
use App\Livewire\ShowServices;
use Illuminate\Support\Facades\Route;

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

Route::get('/page', [PageController::class, '__invoke']);


Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServices::class)->name('servicePage');
Route::get('/contact-us', ContactUs::class)->name('contactus');



