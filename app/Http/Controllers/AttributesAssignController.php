<?php

namespace App\Http\Controllers;

use function compact;
use function request;

/**
 * Class AttributesAssignController
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
class AttributesAssignController extends BaseController
{
    /**
     * Render Index
     *
     * @return mixed
     */
    public function index()
    {
        $attributes_assigned = $this->customAttributesAssignedModel()->get(
            '*, custom_attributes_assigned.id as custom_attributes_assigned_id', false, false, false, false,
            "
                LEFT JOIN custom_attributes
                ON custom_attributes_assigned.custom_attributes_id = custom_attributes.id
                
                LEFT JOIN users
                ON users.id = custom_attributes_assigned.custom_attributes_users_id"
        );
        
        return $this->render(
            'pages.dashboard_attributes_assigned',
            compact('attributes_assigned')
        );
    }
    
    /**
     * Render Crate Record View
     *
     * @return mixed
     */
    public function create()
    {
        $action = "/dashboard/attribute/assign/store";
        
        $get_users = $this->userModel()->get('*');
        $get_custom_fields = $this->customAttributesModel()->get('*');
        
        return $this->render('pages.edit.attributes_assigned', compact
            (
                'action', 'get_users', 'get_custom_fields'
            )
        );
    }
    
    /**
     * Processing Request
     *
     * @return string
     */
    public function store()
    {
        $attributes_assigned = $this->customAttributesAssignedModel()->save(
            [
                'custom_attributes_id',
                'custom_attributes_users_id',
                'created_user_id',
                'text',
                'created_at',
                'updated_at'
            ],
            [
                request()->get('custom_attributes'),
                request()->get('custom_attributes_users'),
                session()->get('user')['id'],
                null,
                now(),
                now()
            ]
        );
        
        if ($attributes_assigned) {
            session()->forget('errors');
            session()->put('success', 'Attribute assigned to user');
            $this->redirect_path = '/dashboard/attributes/assign';
            
        } else {
            session()->put('errors', 'Attribute assign failed to user');
            $this->redirect_path = request()->back();
        }
        
        //Redirect
        return redirect($this->redirect_path);
    }
    
    /**
     * Delete
     *
     * @param integer $id Id
     *
     * @return string
     */
    public function destroy($id)
    {
        $attribute_assigned__destroy = $this->customAttributesAssignedModel()
            ->destroy('id', '=', (integer)$id);
        
        if ($attribute_assigned__destroy) {
            session()->forget('errors');
            session()->put('success', 'Attribute Assigned has been deleted');
            
            $this->redirect_path = '/dashboard/attributes/assign';
            
        } else {
            session()->put('errors', 'Attribute Assigned failed to delete');
            $this->redirect_path = request()->back();
        }
        
        //Redirect
        return redirect($this->redirect_path);
    }
}