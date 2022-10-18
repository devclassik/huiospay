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
// });

Route::get('/', [App\Http\Controllers\Controller::class, 'homePage']);
Route::get('/about', [App\Http\Controllers\Controller::class, 'homeAbout']);
Route::get('/contact', [App\Http\Controllers\Controller::class, 'homeContact']);
Route::get('/cookies', [App\Http\Controllers\Controller::class, 'homeCookies']);
Route::get('/privacy', [App\Http\Controllers\Controller::class, 'homePrivacy']);
Route::get('/terms', [App\Http\Controllers\Controller::class, 'homeTerms']);
Route::get('/agreement', [App\Http\Controllers\Controller::class, 'homeAgreement']);
Route::get('/faqs', [App\Http\Controllers\Controller::class, 'homeFaq']);
Route::get('/list', [App\Http\Controllers\Controller::class, 'homeList']);
Route::get('/setupAccount', [App\Http\Controllers\Controller::class, 'homeSetup']);
Route::post('/saveSetup', [App\Http\Controllers\Controller::class, 'saveSetup'])->name('saveSetup');
Route::get('/yesAccount/{id}', [App\Http\Controllers\Controller::class, 'yesAgent']);
Route::post('/yesAccounts/{id}', [App\Http\Controllers\Controller::class, 'yesAgentSetup'])->name('saveOldAgent');

Route::get('/noAccount/{id}', [App\Http\Controllers\Controller::class, 'noAgent']);
Route::post('/noAccounts/{id}', [App\Http\Controllers\Controller::class, 'noAgentSetup'])->name('saveNewAgent');





//Route::group(['middleware' => 'web'], function () {
//   Route::get('home', 'HomeController@index')->name('home');
    // Route::get('/', 'HomeController@index')->name('frontend');
    // Route::post('/', 'HomeController@spark')->name('frontend');
//   Route::get('{page}', 'HomeController@index')->name('pages');
//   Route::post('{page}', 'HomeController@spark')->name('pages');
//   Route::post('/register', 'HomeController@spark')->name('register');
//   Route::get('/{action}/{item}', 'HomeController@index')->name('action.item');
//   Route::post('/{action}/{item}', 'HomeController@store')->name('action.item');
//   Route::get('/{action}/create', 'HomeController@index')->name('action.create');
//   Route::post('/{action}/create', 'HomeController@store')->name('action.create');
//   Route::get('/{action}/{item}/{command}', 'HomeController@index')->name('action.item.command');
//   Route::post('/{action}/{item}/{command}', 'HomeController@store')->name('action.item.command');

//});
