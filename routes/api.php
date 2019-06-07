<?php

// use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::group(['prefix' => 'auth'], function () {

	    Route::post('login', 'API\UserController@login');
	    Route::post('signup', 'API\UserController@signup');
        Route::put('mnidata/{id}', 'API\MniDataController@update');
        Route::get('mnidata', 'API\MniDataController@index');
        Route::get('mnidata/{id}', 'API\MniDataController@show');
        Route::post('mindata/{id}', 'API\MniDataController@countCall');
        Route::get('mindata/count/{id}', 'API\MniDataController@countAllCalls');
        Route::get('user', 'API\UserController@user');

  //   API TOKEN THAT LOGIN
      Route::group(['middleware' => 'auth:api'], function() {
 
    // FRONT END ROUTE
    // NrMniDataController
      Route::post('startcall','API\NrMniDataController@startCall');
      Route::post('duplicate/', 'API\NrMniDataController@updateDuplicate');

    // ADDMIN ROUTE
        Route::post('importdata', 'API\ImportExcelController@importCsv');
        Route::get('alluser', 'API\UserController@getAllUser');

        // NrMniDataController
        Route::get('nrdata', 'API\NrMniDataController@index');
        Route::post('nrdata/', 'API\NrMniDataController@callCountsNr');
        Route::get('nrdata/uploaded', 'API\NrMniDataController@uploaded');
        Route::put('nrdata/{id}', 'API\NrMniDataController@update');
        Route::get('nrdata/{id}', 'API\NrMniDataController@show');
        Route::get('nrcountcall/{id}','API\NrMniDataController@callCountNrcondions');
        Route::get('userinfo','API\NrMniDataController@userInformation');
        Route::put('statusupdate/{id}','API\NrMniDataController@updateStatus');
        Route::post('qeflag/{id}','API\NrMniDataController@qeflag');
        Route::put('delivered/','API\NrMniDataController@deliverStatus');
        Route::get('datadelivered/','API\NrMniDataController@getDelivered');
        Route::put('restoredelivered/','API\NrMniDataController@restoreDelivered');
        Route::get('historycalls/','API\NrMniDataController@getHistoryData');
        Route::put('callset/','API\NrMniDataController@setCalls');
        Route::get('getsets/','API\NrMniDataController@getsets');
        Route::get('uploadnames/','API\NrMniDataController@collectUploadedName');
        Route::get('duplicatestatus/','API\NrMniDataController@nrmnidataDuplicateStatus');
   });

});