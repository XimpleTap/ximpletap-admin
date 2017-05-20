<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevicePair extends Model
{
    protected $table = 'device_pairs';

    public function fetch_device_pair_data($id){
        return DevicePair::find($id);
    }

    public function create_device_pair_data($data){
        $device_pair = new DevicePair();
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'rpi_id':
                    $device_pair->rpi_id = $data['rpi_id'];
                    break;
                case 'reader_id':
                    $device_pair->reader_id = $data['reader_id'];
                    break;
                case 'is_pair_active':
                    $device_pair->is_pair_active = $data['is_pair_active'];
                    break;
                case 'is_currently_deployed':
                    $device_pair->is_currently_deployed = $data['is_currently_deployed'];
                    break;
                case 'created_at':
                    $device_pair->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $device_pair->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $device_pair->save();
        return $status;
    }

    public function update_device_pair_data($data,$id){
        $device_pair = DevicePair::find($id);
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'rpi_id':
                    $device_pair->rpi_id = $data['rpi_id'];
                    break;
                case 'reader_id':
                    $device_pair->reader_id = $data['reader_id'];
                    break;
                case 'is_pair_active':
                    $device_pair->is_pair_active = $data['is_pair_active'];
                    break;
                case 'is_currently_deployed':
                    $device_pair->is_currently_deployed = $data['is_currently_deployed'];
                    break;
                case 'created_at':
                    $device_pair->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $device_pair->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $device_pair->save();
        return $status;
    }

    public function remove_device_pair_data($id){
        return DevicePair::destroy($id);
    }
}
