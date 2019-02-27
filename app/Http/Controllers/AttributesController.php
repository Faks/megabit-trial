<?php

namespace App\Http\Controllers;

use function compact;
use function request;
use function session;

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
    /**
     * Render Index
     *
     * @return mixed
     */
    public function index()
    {
        $attributes = $this->customAttributesModel()->get('*');
        
        return $this->render('pages.dashboard_attributes', compact('attributes'));
    }
    
    /**
     * Render Crate Record View
     *
     * @return mixed
     */
    public function create()
    {
        $action = "/dashboard/attribute/store";
        
        return $this->render('pages.edit.attribute', compact('action'));
    }
    
    /**
     * Processing Request
     *
     * @return mixed
     */
    public function store()
    {
        $attributes_store = $this->customAttributesModel()->save(
            [
                'name',
                'type',
                'required',
                'created_user_id',
                'created_at',
                'updated_at'
            ],
            [
                request()->get('name'),
                request()->get('type'),
                request()->get('required'),
                session()->get('user')['id'],
                now(),
                now()
            ]
        );
        
        if ($attributes_store) {
            $this->redirect_path = '/dashboard/attributes';
        } else {
            $this->redirect_path = request()->back();
        }
        
        //Redirect
        return redirect($this->redirect_path);
    }
    
    /**
     * Edit Record
     *
     * @param integer $id Id
     *
     * @return mixed
     */
    public function edit($id)
    {
        $get_attribute = $this->customAttributesModel()->first(
            '*', 'id', '=', (integer)$id, true
        );
        
        $action = "/dashboard/attribute/update/" . $id;
        
        return $this->render(
            'pages.edit.attribute',
            compact(
                'id',
                'get_attribute',
                'action'
            )
        );
    }
    
    /**
     * Update Record
     *
     * @param integer $id Id
     *
     * @return mixed
     */
    public function update($id)
    {
        $attributes_update = $this->customAttributesModel()->update(
            "name='" . request()->get('name') . "',
             type='" . request()->get('type') . "',
             required='" . request()->get('required') . "' ",
            'id', '=', $id
        );
        
        if ($attributes_update) {
            session()->forget('errors');
            session()->put('success', 'Attribute has been updated');
            $this->redirect_path = '/dashboard/attributes';
            
        } else {
            session()->put('errors', 'Attribute failed to update');
            $this->redirect_path = request()->back();
        }
        
        //Redirect
        return redirect($this->redirect_path);
    }
    
    /**
     * Delete Record
     *
     * @param integer $id Id
     *
     * @return string
     */
    public function destroy($id)
    {
        $attribute_destroy = $this->customAttributesModel()
            ->destroy('id', '=', (integer)$id);
        
        if ($attribute_destroy) {
            session()->forget('errors');
            session()->put('success', 'Attribute has been deleted');
            
            $this->redirect_path = '/dashboard/attributes';
            
        } else {
            session()->put('errors', 'Attribute failed to delete');
            $this->redirect_path = request()->back();
        }
        
        //Redirect
        return redirect($this->redirect_path);
    }
}