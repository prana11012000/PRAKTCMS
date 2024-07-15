<?php
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/Contact Us', function () {
    return view('Contact Us');
});

Route::get('/das_home', function () {
    return view('das_home');
});

Route::get('/das_Link_Footer', function () {
    return view('das_Link_Footer');
});

Route::get('/das_user', function () {
    return view('das_user');
});

Route::get('/das_tables', function () {
    return view('das_tables');
});

Route::get('/das_profile', function () {
    return view('das_profile');
});

Route::get('/404', function () {
    return view('404');
});

use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');