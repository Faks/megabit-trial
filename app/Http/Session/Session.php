<?php

namespace App\Http\Session;

use App\Http\Helpers\Helpers;
use function session_destroy;

/**
 * Class Session
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
 * Time: 11:32
 */
class Session
{
    use Helpers;
    
    /**
     * Init Session
     *
     * @var
     */
    public $session;
    
    /**
     * Session constructor.
     */
    public function __construct()
    {
        $this->session = $_SESSION;
    }
    
    /**
     * Session Set Value
     * @param $name
     *
     * @return mixed
     */
    public function put($name)
    {
        return $this->session[$name];
    }
    
    /**
     * Destroy All Session
     *
     * @return mixed
     */
    public function flush()
    {
        return session_destroy();
    }
    
    /**
     * Destroy Specified Session Value
     * @param $name
     */
    public function forget($name)
    {
        unset($name);
    }
}
