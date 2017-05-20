<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessPolicy extends Model
{
    protected $table = 'business_policies';
    protected $primaryKey = 'business_id';

    public function fetch_business_policy_data($id){
        return BusinessPolicy::find($id);
    }

    public function remove_business_policy_data($id){
        return BusinessPolicy::destroy($id);
    }

    public function create_business_policy_data($data){
        $business_policy = new BusinessPolicy();
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'business_id':
                    $business_policy->business_id = $data['business_id'];
                    break;
                case 'card_validity':
                    $business_policy->card_validity = $data['card_validity'];
                    break;
                case 'points_invalidity_month':
                    $business_policy->points_invalidity_month = $data['points_invalidity_month'];
                    break;
                case 'points_invalidity_day':
                    $business_policy->points_invalidity_day = $data['points_invalidity_day'];
                    break;
                case 'is_card_roaming':
                    $business_policy->is_card_roaming = $data['is_card_roaming'];
                    break;
                case 'is_retaining_point':
                    $business_policy->is_retaining_point = $data['is_retaining_point'];
                    break;
                case 'is_reward_transaction_based':
                    $business_policy->is_reward_transaction_based = $data['is_reward_transaction_based'];
                    break;
                case 'per_transaction_points':
                    $business_policy->per_transaction_points = $data['per_transaction_points'];
                    break;
                case 'is_reward_denom_based':
                    $business_policy->is_reward_denom_based = $data['is_reward_denom_based'];
                    break;
                case 'per_denom_points':
                    $business_policy->per_denom_points = $data['per_denom_points'];
                    break;
                case 'denom_for_points':
                    $business_policy->denom_for_points = $data['denom_for_points'];
                    break;
                case 'is_point_convertible':
                    $business_policy->is_point_convertible = $data['is_point_convertible'];
                    break;
                case 'point_for_load':
                    $business_policy->point_for_load = $data['point_for_load'];
                    break;
                case 'amount_for_load':
                    $business_policy->amount_for_load = $data['amount_for_load'];
                    break;
                case 'is_reload_has_points';
                    $business_policy->is_reload_has_points = $data['is_reload_has_points'];
                    break;
                case 'load_for_points':
                    $business_policy->load_for_points = $data['load_for_points'];
                    break;
                case 'points_on_reload':
                    $business_policy->points_on_reload = $data['points_on_reload'];
                    break;
                case 'is_load_price_inclusive':
                    $business_policy->is_load_price_inclusive = $data['is_load_price_inclusive'];
                    break;
                case 'created_at':
                    $business_policy->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $business_policy->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $business_policy->save();
        return $status;
    }

    public function update_business_policy_data($data,$id){
        $business_policy = BusinessPolicy::find($id);
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'business_id':
                    $business_policy->business_id = $data['business_id'];
                    break;
                case 'card_validity':
                    $business_policy->card_validity = $data['card_validity'];
                    break;
                case 'points_invalidity_month':
                    $business_policy->points_invalidity_month = $data['points_invalidity_month'];
                    break;
                case 'points_invalidity_day':
                    $business_policy->points_invalidity_day = $data['points_invalidity_day'];
                    break;
                case 'is_card_roaming':
                    $business_policy->is_card_roaming = $data['is_card_roaming'];
                    break;
                case 'is_retaining_point':
                    $business_policy->is_retaining_point = $data['is_retaining_point'];
                    break;
                case 'is_reward_transaction_based':
                    $business_policy->is_reward_transaction_based = $data['is_reward_transaction_based'];
                    break;
                case 'per_transaction_points':
                    $business_policy->per_transaction_points = $data['per_transaction_points'];
                    break;
                case 'is_reward_denom_based':
                    $business_policy->is_reward_denom_based = $data['is_reward_denom_based'];
                    break;
                case 'per_denom_points':
                    $business_policy->per_denom_points = $data['per_denom_points'];
                    break;
                case 'denom_for_points':
                    $business_policy->denom_for_points = $data['denom_for_points'];
                    break;
                case 'is_point_convertible':
                    $business_policy->is_point_convertible = $data['is_point_convertible'];
                    break;
                case 'point_for_load':
                    $business_policy->point_for_load = $data['point_for_load'];
                    break;
                case 'amount_for_load':
                    $business_policy->amount_for_load = $data['amount_for_load'];
                    break;
                case 'is_reload_has_points';
                    $business_policy->is_reload_has_points = $data['is_reload_has_points'];
                    break;
                case 'load_for_points':
                    $business_policy->load_for_points = $data['load_for_points'];
                    break;
                case 'points_on_reload':
                    $business_policy->points_on_reload = $data['points_on_reload'];
                    break;
                case 'is_load_price_inclusive':
                    $business_policy->is_load_price_inclusive = $data['is_load_price_inclusive'];
                    break;
                case 'created_at':
                    $business_policy->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $business_policy->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $business_policy->save();
        return $status;
    }

}
