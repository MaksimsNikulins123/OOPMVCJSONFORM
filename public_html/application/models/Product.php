<?php

namespace application\models;

use application\core\Model;

class Product extends Model
{
    

    public function addProduct($inputs)
    {
        
        if(isset($inputs['sku'])){
            $sku = $inputs['sku'];
        }else{
            $sku = 0;
        }

        if(isset($inputs['name'])){
            $name = $inputs['name'];
        }else{
            $name = 0;
        }
        
        if(isset($inputs['price'])){
            $price = $inputs['price'];
        }else{
            $price = 0;
        }

        if(isset($inputs['productType'])){
            $type = $inputs['productType'];
        }else{
            $type = 0;
        }

        if(isset($inputs['size'])){
            $size = $inputs['size'];
        }else{
            $size = 0;
        } 
        
        if(isset($inputs['weight'])){
            $weight = $inputs['weight'];
        }else{
            $weight = 0;
        }

        if(isset($inputs['height'])){
            $height = $inputs['height'];
        }else{
            $height = 0;
        }

        if(isset($inputs['width'])){
            $width = $inputs['width'];
        }else{
            $width = 0;
        }

        if(isset($inputs['length'])){
            $length = $inputs['length'];
        }else{
            $length = 0;
        }

        // else if(isset($inputs['name'])){
        //     $name = $inputs['name'];
        // }else if(isset($inputs['price'])){
        //     $price = $inputs['price'];
        // }else if(isset($inputs['type'])){
        //     $type = $inputs['productType'];
        // }else if($inputs['sku'] != null){
        //     $size = $inputs['size'];
        // }else if($inputs['sku'] != null){
        //     $weight = $inputs['weight'];
        // }else if($inputs['sku'] != null){
        //     $height = $inputs['height'];
        // }else if($inputs['sku'] != null){
        //     $width = $inputs['width'];
        // }else if($inputs['sku'] != null){
        //     $length = $inputs['length'];
        // }
        
        // $name = $inputs['name'];
        // $price = $inputs['price'];
        // $type = $inputs['productType'];
        // $size = $inputs['size'];
        // $weight = $inputs['weight'];
        // $height = $inputs['height'];
        // $width = $inputs['width']; 
        // $length = $inputs['length']; 

        $this->db->query("INSERT INTO `products`(`id`, `sku`, `name`, `price`, `type`, `size`, `weight`, `height`, `width`, `length`) VALUES (null,'$sku','$name','$price','$type','$size','$weight','$height','$width','$length')");
    }

    
}