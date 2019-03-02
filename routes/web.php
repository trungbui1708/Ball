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
use App\Category; 
use App\News;
use App\Image;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('test',function(){
// 	return view('admin.Category.List');
// });
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'category'],function(){
		Route::get('list','CategoryController@getList');
		Route::get('add','CategoryController@getAdd');
		Route::post('add','CategoryController@postAdd');
		Route::get('edit/{id}','CategoryController@getEdit');
		Route::post('edit/{id}','CategoryController@postEdit');
		Route::get('delete/{id}','CategoryController@getDelete');

	});
});

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'news'],function(){
		Route::get('list','NewsController@getList');
		Route::get('add','NewsController@getAdd');
		Route::post('add','NewsController@postAdd');
		Route::get('edit/{id}','NewsController@getEdit');
		Route::post('edit/{id}','NewsController@postEdit');
		Route::get('delete/{id}','NewsController@getDelete');

	});
});

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'image'],function(){
		Route::get('list','ImageController@getList');
		Route::get('add','ImageController@getAdd');
		Route::post('add','ImageController@postAdd');
		Route::get('delete/{id}','ImageController@getDelete');
	});
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'tournament'],function(){
		Route::get('list','TournamentController@getList');
		Route::get('add','TournamentController@getAdd');
		Route::post('add','TournamentController@postAdd');
		Route::get('delete/{id}','TournamentController@getDelete');
	});
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'round'],function(){
		Route::get('list','RoundController@getList');
		Route::get('add','RoundController@getAdd');
		Route::post('add','RoundController@postAdd');
		Route::get('delete/{id}','RoundController@getDelete');
	});
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'rank'],function(){
		Route::get('list','RankController@getList');
		Route::get('edit/{id}','RankController@getEdit');
		Route::post('edit/{id}','RankController@postEdit');
		Route::get('add','RankController@getAdd');
		Route::post('add','RankController@postAdd');
		Route::get('delete/{id}','RankController@getDelete');
	});
});

 Route::get('trangchu', 'PagesController@index');
Route::get('news/{id}', 'PagesController@news');
Route::get('list-news', 'PagesController@list_news');


