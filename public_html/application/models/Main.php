<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function getProducts()
    {
        
        $result = $this->db->row('SELECT *  FROM products');
        return $result;
    }


    public function deleteCheckedProducts($idArray)
    {
        
        $idList= implode("," , $idArray['id']);

        $this->db->query('DELETE FROM `products` WHERE id IN ('.$idList.')');

    }
}