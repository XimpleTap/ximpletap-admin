<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardGroup extends Model
{
    protected $table = 'cards_group';

    public function fetch_card_group_data($id){
        return CardGroup::find($id);
    }

    public function remove_card_group_data($id){
        return CardGroup::destroy($id);
    }

    public function create_card_group_data($data){
        $card_group = new CardGroup();
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'card_price':
                    $card_group->card_price = $data['card_price'];
                    break;
                case 'preloaded_amount':
                    $card_group->preloaded_amount = $data['preloaded_amount'];
                    break;
                case 'business_id':
                    $card_group->business_id = $data['business_id'];
                    break;
                case 'created_at':
                    $card_group->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $card_group->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $card_group->save();
        return $status;
    }

    public function update_card_group_data($data,$id){
        $card_group = CardGroup::find($id);
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'card_price':
                    $card_group->card_price = $data['card_price'];
                    break;
                case 'preloaded_amount':
                    $card_group->preloaded_amount = $data['preloaded_amount'];
                    break;
                case 'business_id':
                    $card_group->business_id = $data['business_id'];
                    break;
                case 'created_at':
                    $card_group->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $card_group->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $card_group->save();
        return $status;
    }
}
