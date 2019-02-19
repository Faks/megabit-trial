<?php

namespace App\Http\Models;

use App\Http\Database\Connection;
use App\Http\Request\Request;
use const MAIL_FROM;
use const MAIL_TO;

/**
 * Class User
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
 * Time: 10:23
 */
class User extends Connection
{
    /**
     * Set Table
     *
     * @var string
     */
    protected $table = "users";
    
    /**
     * Model Save
     *
     * @return mixed
     */
    public function save()
    {
        $this->mysqli->query("SELECT * $this->table WHERE name = ");
        //Send Mail To Administrator
        $this->notify();
        return $this;
    }
    
    /**
     * After Registration
     * Send an email to Member
     *
     * @return mixed
     */
    public function notify()
    {
        $mail = mail(MAIL_FROM, MAIL_TO, '');
        return $mail;
    }
}