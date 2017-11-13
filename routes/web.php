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

Route::get('/', 'WebsiteController@home');
Route::get('/news_detail/{slug}', 'WebsiteController@news_detail');
Route::get('/tentang_ti/{slug}', 'WebsiteController@detail');

Route::get('/mahasiswa_dan_lulusan/prestasi', 'WebsiteController@achievement');
Route::get('/mahasiswa_dan_lulusan/layanan', 'WebsiteController@service');
Route::get('/mahasiswa_dan_lulusan/{slug}', 'WebsiteController@detail');

Route::get('/pembelajaran/kurikulum', 'WebsiteController@curriculum');
Route::get('/sdm/dosen/{id}', 'WebsiteController@lecturer');
Route::get('/sdm/dosen/', 'WebsiteController@lecturer_list');

Route::get('/sarana_prasarana/{slug}', 'WebsiteController@detail');

Route::get('/penelitian', 'WebsiteController@research');
Route::get('/pengabdian', 'WebsiteController@devotion');
Route::get('/kerjasama', 'WebsiteController@cooperation');

Route::get('/search', 'WebsiteController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    
    Route::resource('news', 'NewsController');
    Route::resource('page', 'PageController');
    Route::resource('coop', 'CooperationController');
    Route::resource('research', 'ResearchController');
    Route::resource('devotion', 'DevotionController');
    Route::resource('curriculum', 'CurriculumController');
    Route::resource('achievement', 'AchievementController');
    Route::resource('service', 'ServiceController');
    Route::resource('lecturer', 'LecturerController');

    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/');
    });
});
//Route::get('news/fetch_category', 'NewsController@fetch_category');
