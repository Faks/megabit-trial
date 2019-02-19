<?php

namespace App\Http\Database;

use App\Http\Helpers\Helpers;
use mysqli;
use mysqli_sql_exception;
use const DB_HOST;
use const DB_NAME;
use const DB_PASSWORD;
use const DB_USERNAME;

/**
 * Class Connection
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
 * Time: 10:21
 */
class Connection
{
    use Helpers;
    
    /**
     * Init MySQLI Connection
     *
     * @var mysqli
     */
    public $mysqli;
    
    /**
     * Connection constructor.
     */
    public function __construct()
    {
        try {
            $this->mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        } catch (mysqli_sql_exception $e) {
            die($e->getMessage());
        }
    }
}