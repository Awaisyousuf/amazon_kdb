<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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
    return view('website.index');
})->name('index');
Route::get('/about-us', function () {
    return view('website.about-us');
})->name('about-us');
Route::get('/contact-us', function () {
    return view('website.contact-us');
})->name('contact-us');
Route::get('/our-portfolio', function () {
    return view('website.our-portfolio');
})->name('our-portfolio');
Route::get('/our-services', function () {
    return view('website.our-services');
})->name('our-services');
Route::get('/clients-testimonials', function () {
    return view('website.testimonials');
})->name('clients-testimonials');
Route::get('/terms-and-conditions', function () {
    return view('website.terms-and-conditions');
})->name('terms-and-conditions');

// billing
Route::get('/billing/{category?}/{package_name?}/{price?}', [
    WebsiteController::class,
    'billing',
])->name('billing');
Route::post('/billing_process', [
    WebsiteController::class,
    'billing_process',
])->name('billing_process');

// services section

Route::get('/amazon-publishing-service', function () {
    return view('website.amazon-publishing-service');
})->name('amazon-publishing-service');
Route::get('/audio-book-service', function () {
    return view('website.audio-book-service');
})->name('audio-book-service');
Route::get('/author-website-development', function () {
    return view('website.author-website-development');
})->name('author-website-development');

Route::get('/book-cover-designing', function () {
    return view('website.book-cover-designing');
})->name('book-cover-designing');

Route::get('/book-editing-proofreading-service', function () {
    return view('website.book-editing-proofreading-service');
})->name('book-editing-proofreading-service');

Route::get('/book-printing-service', function () {
    return view('website.book-printing-service');
})->name('book-printing-service');

Route::get('/book-publishing-service', function () {
    return view('website.book-publishing-service');
})->name('book-publishing-service');

Route::get('/book-writing-publishing-service', function () {
    return view('website.book-writing-service');
})->name('book-writing-service');

Route::get('/ghost-writing-service', function () {
    return view('website.ghost-writing-service');
})->name('ghost-writing-service');

Route::get('/book-illustrations-designing', function () {
    return view('website.book-illustrations-designing');
})->name('book-illustrations-designing');

Route::get('/book-marketing-service', function () {
    return view('website.book-marketing-service');
})->name('book-marketing-service');

// mail
Route::post('/send-mail', [WebsiteController::class, 'sendEmail'])->name(
    'contact-mail'
);
