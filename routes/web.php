<?php

//use Illuminate\Support\Facades\Route;
//use GuzzleHttp\Psr7\Uri;
//use Illuminate\Support\Facades\App;
//use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers;

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
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::resource('portfolio', App\Http\Controllers\ProjectController::class)->names('projects')->parameters(['portfolio' => 'project']);

Route::get('categories/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');


/*
Route::get('/portfolio', 'ProjectController@index')->name('projects.index');

Route::get('/portfolio/create', 'ProjectController@create')->name('projects.create');

Route::get('/portfolio/{project}/edit', 'ProjectController@edit')->name('projects.edit');

Route::patch('/portfolio/update/{project}', 'ProjectController@update')->name('projects.update');

Route::post('/portfolio', 'ProjectController@store')->name('projects.store');

Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');

Route::delete('/portfolio/{project}', 'ProjectController@destroy')->name('projects.destroy');
*/


Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', [App\Http\Controllers\MessageController::class, 'storage'])->name('contact.storage');

//Route::get('/css/app.css', 'MessageController@style')->name('html.style');

Route::view('/resume', 'resume')->name('resume');

Route::view('/services', 'services')->name('services');


//Route::get('/pay', [App\Http\Controllers\PayController::class, 'index'])->name('pay');

//Route::post('/pay/paymentStripe', [App\Http\Controllers\PayController::class,'payStripe'])->name('pay.payStripe');

//Route::post('/pay/paymentML', [App\Http\Controllers\PayController::class, 'payML'])->name('pay.payML');

Auth::routes(['register' => false]);


//Route::view('/', 'home')->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
