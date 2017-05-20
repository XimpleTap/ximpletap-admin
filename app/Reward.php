<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    protected $table = 'rewards';

    public function fetch_reward_data($id){
        return Reward::find($id);
    }

    public function remove_reward_data($id){
        return Reward::destroy($id);
    }

    public function create_reward_data($data){
        $reward = new Reward();
        $columns = array_keys($data);
        foreach ($columns as $d) {
            switch($d){
                case 'description':
                    $reward->description = $data['description'];
                    break;
                case 'required_points':
                    $reward->required_points = $data['required_points'];
                    break;
                case 'is_exclusive':
                    $reward->is_exclusive = $data['is_exclusive'];
                    break;
                case 'expiration_date':
                    $reward->expiration_date= $data['expiration_date'];
                    break;
                case 'business_id':
                    $reward->business_id = $data['business_id'];
                    break;
                case 'reward_count_limit':
                    $reward->reward_count_limit = $data['reward_count_limit'];
                    break;
                case 'estimated_equivalent_amount':
                    $reward->estimated_equivalent_amount = $data['estimated_equivalent_amount'];
                    break;
                case 'max_single_claim':
                    $reward->max_single_claim = $data['max_single_claim'];
                    break;
            }
        }
        $status = $reward->save();
        return $status;
    }

    public function update_reward_data($data,$id){
        $reward = Reward::find($id);
        $columns = array_keys($data);
        foreach ($columns as $d) {
            switch($d){
                case 'description':
                    $reward->description = $data['description'];
                    break;
                case 'required_points':
                    $reward->required_points = $data['required_points'];
                    break;
                case 'is_exclusive':
                    $reward->is_exclusive = $data['is_exclusive'];
                    break;
                case 'expiration_date':
                    $reward->expiration_date= $data['expiration_date'];
                    break;
                case 'business_id':
                    $reward->business_id = $data['business_id'];
                    break;
                case 'reward_count_limit':
                    $reward->reward_count_limit = $data['reward_count_limit'];
                    break;
                case 'estimated_equivalent_amount':
                    $reward->estimated_equivalent_amount = $data['estimated_equivalent_amount'];
                    break;
                case 'max_single_claim':
                    $reward->max_single_claim = $data['max_single_claim'];
                    break;
            }
        }
        $status = $reward->save();
        return $status;
    }
}
