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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/getCompaniesFromSearch', 'searchCompanyController@getCompany');

Route::get('/companyInfo/{id}', 'CompanyController@show')->name('companyInfo');

Route::get('/follow', 'CompanyController@follow')->name('company.follow');

Route::post('/registerEmployer', 'RegisterEmployer@register')->name('registerEmployer');

Route::post('/createPost', 'PostController@create')->name('createPost');

Route::get('/dashboard/pendingPosts', 'HomeController@adminHome')->name('pendingPosts')->middleware('check_admin');

Route::get('/aprrovePost', 'PostController@aprrovePost')->name('aprrovePost')->middleware('check_admin');
