<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAdmin;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/getCompaniesFromSearch', 'searchCompanyController@getCompany');

Route::get('/companyInfo/{id}', 'CompanyController@show')->name('companyInfo');

Route::get('/follow', 'CompanyController@follow')->name('company.follow');

Route::post('/registerEmployer', 'RegisterEmployer@register')->name('registerEmployer');

Route::post('/createPost', 'PostController@create')->name('createPost');

Route::middleware([CheckAdmin::class])->group(function () {
    Route::get('/dashboard/pendingPosts', 'HomeController@adminHome')->name('pendingPosts');

    Route::get('/aprrovePost', 'PostController@aprrovePost')->name('aprrovePost');

    Route::get('/userManagement', 'UserController@show')->name('userManagement');

    Route::get('/changeUserStatus', 'UserController@changeUserStatus')->name('changeUserStatus');

    Route::get('/resetPassword', 'UserController@resetPassword')->name('resetPassword');
});
