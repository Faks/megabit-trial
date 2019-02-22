<?php

use app\Http\Handlers\RouteExceptionHandlers;
use Pecee\SimpleRouter\SimpleRouter as Route;

/**
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 *
 * @category PHP
 * @package  Custom_OOP_MVC
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * Date: 2019.02.19.
 * Time: 12:35
 */

//Route::csrfVerifier(new CsrfVerifier());
Route::group(['namespace' => 'App\Http\Controllers',
    'exceptionHandler' => RouteExceptionHandlers::class], function () {
        Route::get('/', 'HomeController@index')->setName('home');
        Route::post('/store', 'HomeController@store')->setName('create');
    
        Route::get('/forgot', 'ForgotController@index')->setName('forgot');
        Route::post('/forgot/store', 'ForgotController@store')->setName('forgot-store');
    });
