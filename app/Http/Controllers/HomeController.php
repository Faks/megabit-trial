<?php

namespace App\Http\Controllers;

use App\Http\Request\Request;
use function compact;
use function dd;

/**
 * Class HomeController
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 *
 * @category PHP
 * @package  Megabit_Trial
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
     */
    public function index()
    {
        $test = 'tests';
        
        /**
         * Render View
         */
        $this->render('pages.home', compact('test'));
    }
    
    public function store()
    {
        dd(Request::init()->request);
        /**
         * Call Save On Model
         */
//        User::init()->save();
    }
}