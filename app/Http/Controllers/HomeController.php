<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use function compact;
use function dump;
use function request;

/**
 * Class HomeController
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
 * Time: 10:22
 */
class HomeController extends BaseController
{
    /**
     * View Index
     *
     * @return mixed
     */
    public function index()
    {
        $test = 'tests';
        
        /**
         * Render View
         */
        $this->render('pages.home', compact('test'));
    }
    
    /**
     * Processing Request
     *
     * @return string
     */
    public function store()
    {
        if (request()->has('name')) {
            dd(request()->has('name'));
        }
        
        /**
         * Call Save On Model
         */
        dump(request()->all());
        
        $user = User::init()->get("*", 'email', '=', request()->get("email"));
        
        dump($user);

//        return redirect('/');
    }
}
