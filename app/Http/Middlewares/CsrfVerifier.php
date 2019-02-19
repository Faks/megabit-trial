<?php

namespace App\Http\Middlewares;

use Pecee\Http\Middleware\BaseCsrfVerifier;

/**
 * Class CsrfVerifier
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 *******************************************
 * Company Name: Solum DeSignum
 * Company Website: http://solum-designum.com
 * Company GitHub: https://github.com/SolumDeSignum
 ********************************************************
 * Date: 2019.02.19.
 * Time: 14:40
 */
class CsrfVerifier extends BaseCsrfVerifier
{
    /**
     * CSRF validation will be ignored on the following urls.
     */
    protected $except = ['/api/*'];
}