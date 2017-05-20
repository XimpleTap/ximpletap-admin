<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessReloadDenom extends Model
{
    protected $table = 'business_reload_denoms';

    public function business_reload_denom_bonus(){
        return $this->hasOne('App\BusinessReloadDenomBonus');
    }

    public function fetch_business_reload_denom_data($id){
        //return BusinessReloadDenom::find($id);
        return BusinessReloadDenom::with('business_reload_denom_bonus')->where('id','=',$id)->get();
    }

    public function remove_business_reload_denom_data($id){
        return BusinessReloadDenom::destroy($id);
    }

    public function create_business_reload_denom_data($data){
        $business_reload_denom = new BusinessReloadDenom();
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'description':
                    $business_reload_denom->description = $data['description'];
                    break;
                case 'price':
                    $business_reload_denom->price = $data['price'];
                    break;
                case 'business_id':
                    $business_reload_denom->business_id = $data['business_id'];
                    break;
                case 'is_available':
                    $business_reload_denom->is_available = $data['is_available'];
                    break;
                case 'has_bonus':
                    $business_reload_denom->has_bonus = $data['has_bonus'];
                    break;
                case 'created_at':
                    $business_reload_denom->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $business_reload_denom->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $business_reload_denom->save();
        return $status;
    }

    public function update_business_reload_denom($data,$id){
        $business_reload_denom = BusinessReloadDenom::find($id);
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'description':
                    $business_reload_denom->description = $data['description'];
                    break;
                case 'price':
                    $business_reload_denom->price = $data['price'];
                    break;
                case 'business_id':
                    $business_reload_denom->business_id = $data['business_id'];
                    break;
                case 'is_available':
                    $business_reload_denom->is_available = $data['is_available'];
                    break;
                case 'has_bonus':
                    $business_reload_denom->has_bonus = $data['has_bonus'];
                    break;
                case 'created_at':
                    $business_reload_denom->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $business_reload_denom->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $business_reload_denom->save();
        return $status;
    }

}
