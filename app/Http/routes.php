<?php

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

Route::model('usuario', 'Catalogos\User');

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
//Route::get('home', ['as' => 'home', 'uses' => 'Catalogos\CatalogosController@index']);
Route::resource('home', 'Catalogo\CatalogoController');


Route::resource('catalogos', 'Catalogo\CatalogoController');
Route::resource('menus', 'Menu\MenuController');
Route::resource('submenus', 'Submenu\SubMenuController');
Route::resource('articulos', 'Articulo\ArticuloController');

//Route::resource('loadimages', 'Api\ImageController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'api'],
    function () {

        Route::get('/enviarcatalogo', 'Api\EnviarCatalogoController@catalogo');

    });

