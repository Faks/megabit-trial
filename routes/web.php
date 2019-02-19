<?php

use app\Http\Handlers\RouteExceptionHandlers;
use App\Http\Middlewares\CsrfVerifier;
use Pecee\SimpleRouter\SimpleRouter as Route;

/**
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 *******************************************
 * Company Name: Solum DeSignum
 * Company Website: http://solum-designum.com
 * Company GitHub: https://github.com/SolumDeSignum
 ********************************************************
 * Date: 2019.02.19.
 * Time: 12:35
 */

Route::csrfVerifier(new CsrfVerifier());
Route::group(['namespace' => 'App\Http\Controllers',
    'exceptionHandler' => RouteExceptionHandlers::class], function () {
    Route::get('/', 'HomeController@index')->setName('home');
    Route::post('/store', 'HomeController@store')->setName('create');
});
