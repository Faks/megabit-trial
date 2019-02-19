<?php

namespace App\Http\Controllers;

use App\Http\Models\User;

/**
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks *
 * PHP version 7.3
 *
 * @category PHP
 * @package  Megabit_Trial
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * Date: 2019.02.19.
 * Time: 10:22
 */

class HomeController
{
    public function index()
    {
    
    }
    
    public function create()
    {
        User::save();
        
    }
}