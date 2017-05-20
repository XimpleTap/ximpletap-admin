<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public function profile(){
        return $this->hasOne('App\UserProfile');
    }

    public function fetch_user_data($id){
        return User::with('profile')->where('id','=',$id)->get();
    }

    public function create_user_data($data){
        $user = new User();
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'username':
                    $user->username = $data['username'];
                    break;
                case 'password':
                    $user->password = $data['password'];
                    break;
                case 'user_type_id':
                    $user->user_type_id = $data['user_type_id'];
                    break;
            }
        }
        $status = $user->save();
        return $status;
    }

    public function update_user_data($data,$id){
        $user = User::find($id);
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'username':
                    $user->username = $data['username'];
                    break;
                case 'password':
                    $user->password = $data['password'];
                    break;
                case 'user_type_id':
                    $user->user_type_id = $data['user_type_id'];
                    break;
            }
        }
        $status = $user->save();
        return $status;
    }

    public function remove_user_data($id){
        return User::destroy($id);
    }


}
