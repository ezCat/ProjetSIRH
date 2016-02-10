<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'AccueilController@index']);

//Route::resource('dop', 'DopController');

Route::resource('contact', 'ContactController');

Route::get('dop/ouvrier_agence', ['as' => 'dop_ouvrier' , 'uses' => function(){
    return view('form.dop.ouvrier');
}]);

Route::get('dop/etam_agence', ['as' => 'dop_etam_agence' , 'uses' => function(){
    return view('form.dop.etam_agence');
}]);

Route::get('dop/etam_siege', ['as' => 'dop_etam_siege' , 'uses' => function(){
    return view('form.dop.etam_siege');
}]);

Route::get('dop/cadre_agence', ['as' => 'dop_cadre_agence' , 'uses' => function(){
    return view('form.dop.cadre_agence');
}]);

Route::get('dop/cadre_siege', ['as' => 'dop_cadre_siege' , 'uses' => function(){
    return view('form.dop.cadre_siege');
}]);

Route::get('dop/cadre_cdm', ['as' => 'dop_cadre_cdm' , 'uses' => function(){
    return view('form.dop.cadre_cdm');
}]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
