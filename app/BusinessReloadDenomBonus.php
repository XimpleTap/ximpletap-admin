<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessReloadDenomBonus extends Model
{
    protected $table = 'business_reload_denoms_bonus';

    public function fetch_business_reload_denom_bonus_data($id){
        return BusinessReloadDenomBonus::find($id);
    }

    public function remove_business_reload_denom_bonus_data($id){
        return BusinessReloadDenomBonus::destroy($id);
    }

    public function create_business_reload_denom_data($data){
        $bussiness_reload_denom_bonus_data = new BusinessReloadDenomBonus();
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'business_reload_denom_id':
                    $bussiness_reload_denom_bonus_data->business_reload_denom_id = $data['business_reload_denom_id'];
                    break;
                case 'bonus_amount':
                    $bussiness_reload_denom_bonus_data->bonus_amount = $data['bonus_amount'];
                    break;
                case 'expires_on':
                    $bussiness_reload_denom_bonus_data->expires_on = $data['expires_on'];
                    break;
                case 'created_at':
                    $bussiness_reload_denom_bonus_data->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $bussiness_reload_denom_bonus_data->updated_at = $data['updated_at'];
                    break;
            }
        }
        return $bussiness_reload_denom_bonus_data->save();

    }

    public function update_business_reload_denom_data($data,$id){
        $bussiness_reload_denom_bonus_data = BusinessReloadDenomBonus::find($id);
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'business_reload_denom_id':
                    $bussiness_reload_denom_bonus_data->business_reload_denom_id = $data['business_reload_denom_id'];
                    break;
                case 'bonus_amount':
                    $bussiness_reload_denom_bonus_data->bonus_amount = $data['bonus_amount'];
                    break;
                case 'expires_on':
                    $bussiness_reload_denom_bonus_data->expires_on = $data['expires_on'];
                    break;
                case 'created_at':
                    $bussiness_reload_denom_bonus_data->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $bussiness_reload_denom_bonus_data->updated_at = $data['updated_at'];
                    break;
            }
        }
        return $bussiness_reload_denom_bonus_data->save();

    }
}
