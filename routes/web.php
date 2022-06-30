<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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

// authentication
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


// Frontend
Route::get('/', 'FrontendController@index');
Route::get('single_news/{id}', 'FrontendController@single_news');
Route::get('research', 'FrontendController@research');
Route::get('single_research/{id}', 'FrontendController@single_research');

Route::get('activities', 'FrontendController@activities');
Route::get('single_activity/{id}', 'FrontendController@single_activity');

Route::get('publication', 'FrontendController@publication');
Route::get('single_publication/{id}', 'FrontendController@single_publication');

Route::get('members', 'FrontendController@members');
Route::get('researcher', 'FrontendController@researcher');
Route::get('student', 'FrontendController@student');
Route::get('single_member/{id}', 'FrontendController@single_members');

Route::get('about_us', 'FrontendController@about_us');


// Backend
Route::resource('a_activity', ActivityController::class);
Route::resource('a_research', ResearchController::class);
Route::resource('a_news', NewsController::class);
Route::resource('a_members', MembersController::class);
Route::resource('a_publications', PublicationsController::class);