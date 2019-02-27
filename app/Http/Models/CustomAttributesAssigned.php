<?php

namespace App\Http\Models;

use App\Http\Database\Model;
use App\Http\Helpers\Helpers;

/**
 * Class CustomAttributesAssigned
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 *
 * @category PHP
 * @package  Custom_OOP_MVC
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * Date: 2019.02.24.
 * Time: 12:29
 */
class CustomAttributesAssigned extends Model
{
    use Helpers;
    
    /**
     * Set Table
     *
     * @var string
     */
    protected $table = "custom_attributes_assigned";
}
