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

Route::get('/', function () {
    return view('index');
});
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/webrole', 'HomeController@webRole')->name('webRole');
Route::get('/gender-birthday', 'HomeController@genderBirthday')->name('gender-birthday');
Route::get('/address-selector', 'HomeController@addressSelector')->name('address-selector');
Route::get('/babysitter-about', 'HomeController@babysitterAbout')->name('babysitter-about');
Route::get('/native-language', 'HomeController@nativeLanguage')->name('native-language');
Route::get('/other-language', 'HomeController@otherLanguage')->name('other-language');
Route::get('/babysitter-traits', 'HomeController@babysitterTraits')->name('babysitter-traits');
Route::get('/babysitter-smoke', 'HomeController@babysitterSmoke')->name('babysitter-smoke');
Route::get('/babysitter-occupation', 'HomeController@babysitterOccupation')->name('babysitter-occupation');
Route::get('/babysitter-driver-license', 'HomeController@babysitterDriverLicense')->name('babysitter-driver-license');
