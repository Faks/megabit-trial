<?php

namespace App\Http\Request;

use App\Http\Helpers\Helpers;

/**
 * Class Request
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
 * Time: 11:29
 */
class Request
{
    use Helpers;
    
    /**
     * Building Custom Request Drive
     *
     * @var
     */
    public $request;
    
    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->request = ($_POST ?? $_GET ?? $_REQUEST);
    }
}