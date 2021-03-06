<?php

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

Route::get('/', 'PagesController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/settings', 'PagesController@settings'); // Uploads settings page with default users values
Route::get('/about', 'PagesController@about');
Route::get('/expenses', 'PagesController@expenses');
Route::get('/budget', 'PagesController@budget');
Route::get('/currency_converter', 'PagesController@currency_converter');
Route::get('/report', 'PagesController@report');
Route::get('/graphs', 'PagesController@graphs');
Route::get('/graphByMonth', 'PagesController@graphByMonth');
Route::get('/showReport', 'PagesController@showReport');


Route::post('updateCurrency', 'UpdateController@updateCurrency'); // For updating currency in user settings
Route::post('updateDay', 'UpdateController@updateIncomeDay'); // For updating income day in user settings

Route::post('addExpense', 'AddController@addExpense'); // Add new expense
Route::post('addIncome', 'AddController@addIncome'); // Add income
Route::post('addBudget', 'AddController@addBudget'); // Add budget categories amounts

