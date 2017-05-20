<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductServiceDiscount extends Model
{
    protected $table = 'products_services_discounts';


    public function fetch_product_service_discount_data($id){
        return ProductServiceDiscount::find($id);
    }

    public function remove_product_service_discount_data($id){
        return ProductServiceDiscount::destroy($id);
    }

    public function create_product_service_discount_data($data){
        $product_service_discount= new ProductServiceDiscount();
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'products_services_id':
                    $product_service_discount->products_services_id = $data['products_services_id'];
                    break;
                case 'is_discount_fixed':
                    $product_service_discount->is_discount_fixed = $data['is_discount_fixed'];
                    break;
                case 'discount':
                    $product_service_discount->discount = $data['discount'];
                    break;
                case 'expires_on':
                    $product_service_discount->expires_on = $data['expires_on'];
                    break;
           }
        }
        $status = $product_service_discount->save();
        return $status;
    }

    public function update_product_service_data($data,$id){
        $product_service_discount = ProductServiceDiscount::find($id);
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'products_services_id':
                    $product_service_discount->products_services_id = $data['products_services_id'];
                    break;
                case 'is_discount_fixed':
                    $product_service_discount->is_discount_fixed = $data['is_discount_fixed'];
                    break;
                case 'discount':
                    $product_service_discount->discount = $data['discount'];
                    break;
                case 'expires_on':
                    $product_service_discount->expires_on = $data['expires_on'];
                    break;
            }
        }
        $status = $product_service_discount->save();
        return $status;
    }
}
