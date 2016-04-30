<?php
use App\Http\Requests;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('login');
});
Route::resource('doctors', 'DoctorController');
Route::resource('doctorschedules', 'DoctorScheduleController');
Route::auth();
Route::get('/home', 'HomeController@index');










Route::group(['prefix' => 'auth'], function() {
    Route::get('/login', array(
            'as'   => 'auth.login',
            'uses' => 'LoginController@login')
    );
    Route::post('/authenticate', array(
            'as'   => 'auth.authenticate',
            'uses' => 'LoginController@authenticate')
    );
    Route::get('/logout', array(
            'as'   => 'auth.logout',
            'uses' => 'LoginController@logout')
    );
});

///**
// * used for ajax call to retrieve the songs based on album id
// *
// *
// */
//

//Route::get('/login', function(){
//
//
// //  $_token =Input::get('_token');
//  // $company_id =Input::get('company_id');
//    return Response::json('Success');
//
//});
