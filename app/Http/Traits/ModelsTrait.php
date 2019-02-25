<?php

namespace App\Http\Traits;

use App\Http\Models\CustomAttributes;
use App\Http\Models\CustomAttributesAssigned;
use App\Http\Models\User;

/**
 * Class ModelsTrait
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
 * Time: 12:26
 */
trait ModelsTrait
{
    /**
     * User Model instance
     *
     * @return User
     */
    public function userModel()
    {
        return User::init();
    }
    
    /**
     * CustomAttributes Model instance
     *
     * @return CustomAttributes
     */
    public function customAttributesModel()
    {
        return CustomAttributes::init();
    }
    
    /**
     * CustomAttributesAssigned Model instance
     *
     * @return CustomAttributesAssigned
     */
    public function customAttributesAssignedModel()
    {
        return CustomAttributesAssigned::init();
    }
}