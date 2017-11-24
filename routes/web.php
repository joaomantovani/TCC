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

/*
|--------------------------------------------------------------------------
| Rotas de autenticação
|--------------------------------------------------------------------------
| Jogadores que não possuem conta ainda.
|
*/
Route::group(['middleware' => ['web']], function () {
    Auth::routes();
});

/*
|--------------------------------------------------------------------------
| Sem conta
|--------------------------------------------------------------------------
| Jogadores que não possuem conta ainda.
|
*/

//Página inicial
Route::get('/', 'SiteController@index');
Route::get('/credits', 'SiteController@credits');

//Pagina principal de cada jogador
Route::get('/jogador/{username}', 'PlayerController@personal');

//Facebook login
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

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

    Route::get('/player/info', 'PlayerController@info');
    Route::post('/player/create/info', 'PlayerController@create');

    Route::get('/historia', 'HistoryController@index');
    Route::get('/scene0', 'HistoryController@scene0');
    Route::get('/scene1', 'HistoryController@scene1');
    Route::get('/scene2', 'HistoryController@scene2');
});

/*
|--------------------------------------------------------------------------
| Jogadores autenticados COM tutorial
|--------------------------------------------------------------------------
| Pessoas que já estão logadas e já fizeram o tutorial tem acesso aqui
|
*/
Route::group(['middleware' => ['auth_player']], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/acao', 'ActionController@index');
    Route::get('/banco', 'AccountController@index');

    Route::post('/banco/depositar', 'AccountController@deposit');
    Route::post('/banco/sacar', 'AccountController@withdraw');
    // Route::get('/vilao', 'VillainController@index');

    Route::get('/highscores', 'HighscoreController@index');
});

Route::group(['middleware' => ['food_store']], function () {
    Route::get('/loja/{slug}', 'StoreController@show');
    Route::post('/loja/comprar', 'StoreController@store');
});

/*
|--------------------------------------------------------------------------
| Rotas de error
|--------------------------------------------------------------------------
*/
Route::get('/403', 'ErrorController@error403');

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

Route::get('displayjs', function () {
    // dd(\App\User::find(2)->stats);
    return view('displayjs');
});
