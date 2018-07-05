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

Route::group(['middleware' => ['admin']], function () {
    Route::resource('/procedimentos', 'ProcedureController');
    Route::get('/pacientes', 'UserController@todosUsuarios')->name('pacientes');
    Route::get('/createAdm', 'UserController@createADM')->name('createAdm');
    Route::get('/createOp', 'UserController@createOP')->name('createOp');
    Route::post('/storeOp', 'UserController@storeOP')->name('storeOp');
    Route::post('/storeAdm', 'UserController@storeADM')->name('storeAdm');
    Route::get('/relatorio', 'TestController@relatorio')->name('relatorio');
});

Route::group(['middleware' => ['paciente'], 'middleware' => ['admin'] ], function () {
    
    Route::resource('/exames', 'TestController');
});

Route::group(['middleware' => ['operador']], function () {
    Route::get('/listaprocedimentos', 'ProcedureController@indexOp')->name('listaOp');
    Route::get('/listaprocedimentos/{id}/edit', 'ProcedureController@editOp')->name('editOp');
    Route::post('/listaprocedimentos/update', 'ProcedureController@updateOp')->name('updateOp');
});
Auth::routes();






Route::get('/home', 'HomeController@index')->name('home');
Route::get('/procedures', 'ProcedureController@todos')->name('procedures');


