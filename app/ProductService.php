<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductService extends Model
{
    protected $table = 'products_services';

    public function product_service_discount(){
        return $this->hasOne('App\ProductServiceDiscount');
    }

    public function fetch_product_service_data($id){
        return ProductService::find($id);
        //return ProductService::with('product_service_discount')->where('id','=',$id)->get();
    }

    public function remove_product_service_data($id){
        return ProductService::destroy($id);
    }

    public function create_product_service_data($data){
        $product_service = new ProductService();
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'description':
                    $product_service->description = $data['description'];
                    break;
                case 'price':
                    $product_service->price = $data['price'];
                    break;
                case 'business_id':
                    $product_service->business_id = $data['business_id'];
                    break;
                case 'is_available':
                    $product_service->is_available = $data['is_available'];
                    break;
                case 'type':
                    $product_service->type = $data['type'];
                    break;
            }
        }
        $status = $product_service->save();
        return $status;
    }

    public function update_product_service_data($data,$id){
        $product_service = ProductService::find($id);
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'description':
                    $product_service->description = $data['description'];
                    break;
                case 'price':
                    $product_service->price = $data['price'];
                    break;
                case 'business_id':
                    $product_service->business_id = $data['business_id'];
                    break;
                case 'is_available':
                    $product_service->is_available = $data['is_available'];
                    break;
                case 'type':
                    $product_service->type = $data['type'];
                    break;
            }
        }
        $status = $product_service->save();
        return $status;
    }

}
