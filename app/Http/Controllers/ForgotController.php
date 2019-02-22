<?php

namespace App\Http\Controllers;

use function dd;

/**
 * Class ForgotController
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 *
 * @category PHP
 * @package  Custom_OOP_MVC
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * Date: 2019.02.21.
 * Time: 20:50
 */
class ForgotController extends BaseController
{
    public function index()
    {
        dd('test');
    }
    
    public function store()
    {
        dd($request->request);
    }
}
