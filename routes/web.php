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
    return view('mp.index');
});

Route::get('/search', function () {
    return view('mp.drivingSchoolSearch')->with('count', random_int(1, 30));
});
Route::post('/clue', ['as' => 'create.clue', 'uses' => 'ClueController@create']);

\Illuminate\Support\Facades\Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web', 'auth']], function (\Illuminate\Routing\Router $router) {
    $router->get('clues', 'DrivingCluesController@index')->name('clues.index');
    $router->get('channels', 'ChannelsController@index')->name('channels.index');
    $router->post('channel', 'ChannelsController@store')->name('channels.store');
    $router->put('channel/{id}', 'ChannelsController@update')->name('channels.update');
});
