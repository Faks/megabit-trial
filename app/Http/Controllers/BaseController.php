<?php

namespace App\Http\Controllers;

use Jenssegers\Blade\Blade;

/**
 * Class HomeController
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 *
 * @category PHP
 * @package  Custom_OOP_MVC
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * Date: 2019.02.19.
 * Time: 12:49
 */
class BaseController
{
    /**
     * Set Blade
     * @var Blade
     */
    public $blade;
    
    /**
     * BaseController constructor.
     */
    public function __construct()
    {
        /**
         * Set BladeController Views
         * Set BladeController Cache
         */
        $this->blade = new Blade(
            ['../resources/views'],
            '../storage/cache'
        );
    }
    
    /**
     * Blade Render
     * @param $view
     * @param array $data
     * @param array $mergeData
     * @return mixed
     */
    public function render($view, $data = [], $mergeData = [])
    {
        echo $this->blade->render($view, $data, $mergeData);
    }
    
    public function notFound()
    {
        $this->render('errors.404');
    }
}
