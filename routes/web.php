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
Auth::routes();

/*
|--------------------------------------------------------------------------
| Sem conta
|--------------------------------------------------------------------------
| Jogadores que não possuem conta ainda.
|
*/

//Página inicial
Route::get('/', function () {
    return view('welcome');
});

//Pagina principal de cada jogador
Route::get('/jogador/{username}', 'PlayerController@personal');

//Facebook login
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

Route::get('/creditos', function () {
    return view('credits');
});

/*
|--------------------------------------------------------------------------
| Jogadores autenticados SEM tutorial
|--------------------------------------------------------------------------
| Já criaram a conta, porém não fizeram o tutorial
|
*/
Route::group(['middleware' => ['auth']], function () {
    
	Route::get('escolher', 'CreateCharacterController@class');
    Route::post('escolher/classe', 'CreateCharacterController@choose');
    
	Route::get('tutorial', 'TutorialController@index');
	Route::post('tutorial/complete', 'TutorialController@finish');

});

/*
|--------------------------------------------------------------------------
| Jogadores autenticados COM tutorial
|--------------------------------------------------------------------------
| Pessoas que já estão logadas e já fizeram o tutorial tem acesso aqui
|
*/
Route::group(['middleware' => ['auth_player']], function () {
    Route::get('dashboard', function () {
        echo 'pagina n existe e.e';
    });
    Route::get('/home', 'HomeController@index');
    Route::get('/action', 'ActionController@index');
    Route::get('/banco', 'AccountController@index');
});
    Route::resource('/cantina', 'CantinaController');

/*
|--------------------------------------------------------------------------
| Rotas de ajax
|--------------------------------------------------------------------------
*/
Route::post('/action/ajax', 'ActionController@action');

/*
|--------------------------------------------------------------------------
| Rotas de teste
|--------------------------------------------------------------------------
|
*/
Route::get('teste', function () {
    // dd(\App\User::find(2)->stats);
    return view('teste');
});