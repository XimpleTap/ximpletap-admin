<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessDevice extends Model
{
    protected $table = 'businesses_devices';

    public function fetch_business_device_data($id){
        return BusinessDevice::find($id);
    }

    public function remove_business_device_data($id){
        return BusinessDevice::destroy($id);
    }

    public function create_business_device_data($data){
        $business_device = new BusinessDevice();
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'business_id':
                    $business_device->business_id = $data['business_id'];
                    break;
                case 'device_pair_id':
                    $business_device->device_pair_id = $data['device_pair_id'];
                    break;
                case 'is_deployed':
                    $business_device->is_deployed = $data['is_deployed'];
                    break;
                case 'created_at':
                    $business_device->created_at = $data['updated_at'];
                    break;
                case 'updated_at':
                    $business_device->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $business_device->save();
        return $status;
    }

    public function update_business_device_data($data,$id){
        $business_device = BusinessDevice::find($id);
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'business_id':
                    $business_device->business_id = $data['business_id'];
                    break;
                case 'device_pair_id':
                    $business_device->device_pair_id = $data['device_pair_id'];
                    break;
                case 'is_deployed':
                    $business_device->is_deployed = $data['is_deployed'];
                    break;
                case 'created_at':
                    $business_device->created_at = $data['updated_at'];
                    break;
                case 'updated_at':
                    $business_device->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $business_device->save();
        return $status;
    }
}
