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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@dashboard');
Route::get('/dashboardv1','HomeController@dashboard')->name('home');

//Routes that need CORS disabled go here->middleware('disablecors')
Route::get('/logincheck', 'UserSessionController@loginCheck')->middleware('disablecors');

Route::post('/pstats', 'ExtensionController@postTabStats')->middleware('disablecors');

//CORS disabled until here
Route::get('/cardstats','StatsController@getCardStats');
Route::get('/urlmap','DbOperationsController@calculatePforTransac');
Route::get('/chartsdata','GoogleChartDataController@getBarChartData');
Route::get('/getpname','TableDataController@getAllUrlsGroupedByParentForTheDay');
Route::get('/getanalytics','UrlAnalyticsController@getIBM');
Route::post('/sessions','DNDSessionsController@setSessions');
Route::get('/getsessions','DNDSessionsController@getSessionsForTheDay');
// Route::get('/checkme', 'UserSessionController@loginCheck')->middleware('disablecors');

