<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'cards';
    public $timestamps = false;

    public function fetch_card_data($id){
        return Card::find($id);
    }

    public function remove_card_data($id){
        return Card::destroy($id);
    }

    public function create_card_data($data){
        $card = new Card;
        $card->tag = $data['tag'];
        $card->serial_number = $data['serial_number'];
        $card->is_active = $data['is_active'];
        $status = $card->save();
        return $status;
    }

    public function update_card_data($data,$id){
        $card = Card::find($id);
        $columns = array_keys($data);

        foreach($columns as $d){
            switch($d){
                case "tag":
                    $card->tag = $data['tag'];
                    break;
                case "serial_number":
                    $card->serial_number = $data['serial_number'];
                    break;
                case "is_active":
                    $card->is_active = $data['is_active'];
                    break;
            }
        }

        $status = $card->save();
        return $status;




    }
}
