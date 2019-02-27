<?php

namespace App\Http\Controllers;

use function redirect;
use function request;

/**
 * Class ForgotController
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 *
 * @category PHP
 * @package  Custom_OOP_MVC
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * Date: 2019.02.21.
 * Time: 20:50
 */
class ForgotController extends BaseController
{
    /**
     * Render Index
     *
     * @return mixed
     */
    public function index()
    {
        return $this->render('pages.forgot');
    }
    
    /**
     * Processing Request
     *
     * @return string
     */
    public function store()
    {
        $user_exist_check = $this->userModel()
            ->first('*', 'email', '=', (string)request()->get('email'));
        
        if ($user_exist_check) {
            if ((string)request()->get('password') == (string)request()->get('password_confirm')) {
                //Create New User
                $this->userModel()->update(
                    "password='" . password_hash(request()->get('password'), 2) . "' "
                );
                
                //purge success messages
                session()->forget('errors');
                //set success message
                session()->put('success', false, 'User password been changed.');
            } else {
                //purge success messages
                session()->forget('success');
                //set error message
                session()->put(
                    'errors',
                    false,
                    "Password and password confirm are not matching"
                );
            }
        } else {
            //purge success messages
            session()->forget('success');
            //set error message
            session()->put(
                'errors',
                false,
                "Failed to find matching member."
            );
        }
        
        return redirect('/forgot');
    }
}
