<?php

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

// Route::get('/', function () {
//     return view('welcome');
//     // return 'hello laravel';
// });

Route::get('dashboard','BackendController@dashboard')->name('dashboard');
// Route::get('/', function () {
//     return view('dashboard');
//     // return 'hello laravel';
// });
Route::resource('items','ItemController');
//7 (get-4,post-1,put-1,delete-1);
Route::resource('brands','BrandController');
Route::resource('categories','CategoryController');
Route::resource('subcategories','SubcategoryController');
// frontend
Route::get('/','FrontendController@home')->name('homepage');

Route::get('filteritem','FrontendController@item')->name('itempage');
Route::get('detail/{id}','FrontendController@detail')->name('detailpage');
Route::get('login','FrontendController@login')->name('loginpage');
Route::get('register','FrontendController@register')->name('registerpage');
Route::get('checkout','FrontendController@checkout')->name('checkoutpage');
Route::get('profile','FrontendController@profile')->name('profilepage');


