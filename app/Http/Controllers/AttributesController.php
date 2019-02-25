<?php

namespace App\Http\Controllers;

use function compact;

/**
 * Class AttributesController
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
 * Time: 19:29
 */
class AttributesController extends BaseController
{
    public function index()
    {
        $attributes = $this->customAttributesModel()->get('*');
        
        return $this->render('pages.dashboard_attributes', compact('attributes'));
    }
    
    public function create()
    {
        return $this->render('pages.edit.attribute');
    }
    
    public function store()
    {
        //
    }
    
    
    public function show($id)
    {
        //
    }
    
    
    public function edit($id)
    {
        $get_attribute = $this->customAttributesModel()->first(
            '*', 'id', '=', (integer)$id
        );
        
        return $this->render(
            'pages.edit.attribute',
            compact(
                'id',
                'get_attribute'
            )
        );
    }
    
    
    public function update($id)
    {
        //
    }
    
    
    public function destroy($id)
    {
        //
    }
}