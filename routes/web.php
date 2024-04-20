<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contact;
use App\Models\Enquery;
use App\Http\Controllers\EnqueryController;

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
    return view('visitors.index');
})->name('home');

Route::view('/home-modern', 'visitors.index-2')->name('home-modern');
Route::view('/about', 'visitors.about')->name('about');
Route::view('/our-ngo', 'visitors.our-ngo')->name('our-ngo');
Route::view('/acknowledgements', 'visitors.acknowledgements')->name('acknowledgements');
Route::view('/gallery', 'visitors.gallery')->name('gallery');
Route::view('/volunteer', 'visitors.team')->name('volunteer');
Route::view('/404', 'visitors.404')->name('404');
Route::view('/home', 'visitors.index')->name('home');
Route::view('/contact', 'visitors.contact')->name('contact');
Route::view('/blog-grid', 'visitors.blog-grid')->name('blog-grid');
Route::view('/blog-left-sidebar', 'visitors.blog-left-sidebar')->name('blog-left-sidebar');
Route::view('/blog-right-sidebar', 'visitors.blog-right-sidebar')->name('blog-right-sidebar');
Route::view('/blog-single', 'visitors.blog-single')->name('blog-single');
Route::get('contact',[EnqueryController::class, 'index']);
Route::post('contact', [EnqueryController::class, 'store'])->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
