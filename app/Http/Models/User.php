<?php

namespace App\Http\Models;

use App\Http\Database\Connection;
use App\Http\Helpers\Helpers;
use const MAIL_FROM;
use const MAIL_TO;

/**
 * Class User
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks *
 *
 * @category PHP
 * @package  Megabit_Trial
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * Date: 2019.02.19.
 * Time: 10:23
 */
class User
{
    use Helpers;
    
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
        Connection::init()->mysqli->query("SELECT * $this->table WHERE name = ");
        
        //Send Mail To Administrator
//        $this->notify();
        return $this;
    }
    
    /**
     * Model Destroy Record
     *
     * @return boolean
     */
    public function destroy()
    {
        Connection::init()->mysqli->query("SELECT * $this->table WHERE name = ");
        
        return 1;
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