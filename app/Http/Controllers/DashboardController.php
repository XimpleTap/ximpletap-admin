<?php

namespace App\Http\Controllers;

use App\Business;
use App\CardAssignment;
use App\CardUser;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = new User();
        // TODO: $user_id = [please set user id here] REMOVE BELOW $user_id value after;
        $user_id = 1;
        $card_user = new CardUser();
        $cards = $card_user->fetch_cards($user_id);
        $card_assignment = new CardAssignment();
        $business = new Business();
        $new_card_data = [];

        foreach($cards as $card){

            $card_assignment_data = $card_assignment->fetch_card_assignment_data($card['card_assignment_id']);
            $business_data = $business->fetch_business_data($card_assignment_data[0]['business_id']);
            $compose_array_data = ['card'=>$card,'business'=>$business_data];
            array_push($new_card_data,$compose_array_data);
        }

        $user = new User();
        $user_data = $user->fetch_user_profile($user_id);
        $card_assignment_ids = [];
        foreach($cards as $card){

            array_push($card_assignment_ids,$card['card_assignment_id']);
        }






        return view('users.dashboard',['cards'=>$new_card_data,'user_data'=>$user_data]);
    }
}
