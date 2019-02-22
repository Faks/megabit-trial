<?php

namespace App\Http\Database;

/**
 * Class Model
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
 * Time: 21:50
 */
class Model extends Connection
{
    /**
     * @var
     */
    protected $table;
    
    /**
     * @param $query
     * @return bool|\mysqli_result
     */
    public function query($query)
    {
        return $this->connection->query($query);
    }
    
    /**
     * @param string $select_fields
     * @param bool $where_field
     * @param bool $where_operator
     * @param bool $where_value
     * @return array
     */
    public function get($select_fields = "*", $where_field = false, $where_operator = false, $where_value = false)
    {
        $build_where_query = null;
        
        if ($where_field) {
            $build_where_query = 'WHERE ' . $where_field . ' ' . $where_operator . " '$where_value' ";
        }
        
        return $this->connection->query(
            "SELECT " . $select_fields . " FROM " . $this->table . " $build_where_query"
        )->fetch_assoc();
    }
    
    /**
     * Get First Record From Database
     *
     * @param string $select_fields
     * @param bool $where_field
     * @param bool $where_operator
     * @param bool $where_value
     */
    public function first($select_fields = "*", $where_field = false, $where_operator = false, $where_value = false)
    {
        $build_where_query = null;
        
        if ($where_field) {
            $build_where_query = 'WHERE ' . $where_field . ' ' . $where_operator . " '$where_value' ";
        }
        
        return $this->connection->query(
            "SELECT " . $select_fields . " FROM " . $this->table . " $build_where_query LIMIT 1"
        )->fetch_assoc();
    }
    
    /**
     * Model Update
     *
     * @return mixed
     */
    public function update()
    {
    }
    
    /**
     * Model Save
     *
     * @return mixed
     */
    public function save()
    {
        
        return $this;
    }
    
    /**
     * Model Destroy Record
     *
     * @return boolean
     */
    public function destroy()
    {
    }
}
