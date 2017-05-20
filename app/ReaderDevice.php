<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReaderDevice extends Model
{
    protected $table = 'reader_devices';

    public function device_status(){
        return $this->hasOne('App\DeviceStatus');
    }

    public function fetch_reader_device_data($id){
        //return ReaderDevice::with('device_status')->where('id','=',$id)->get(); // resolve foreign key constraint
        return ReaderDevice::find($id);
    }

    public function create_reader_device_data($data){
        $reader_device = new ReaderDevice();
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'serial_number':
                    $reader_device->serial_number = $data['serial_number'];
                    break;
                case 'device_model':
                    $reader_device->device_model = $data['device_model'];
                    break;
                case 'status':
                    $reader_device->status = $data['status'];
                    break;
                case 'created_at':
                    $reader_device->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $reader_device->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $reader_device->save();
        return $status;
    }

    public function udpate_reader_device_data($data,$id){
        $reader_device = ReaderDevice::find($id);
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'serial_number':
                    $reader_device->serial_number = $data['serial_number'];
                    break;
                case 'device_model':
                    $reader_device->device_model = $data['device_model'];
                    break;
                case 'status':
                    $reader_device->status = $data['status'];
                    break;
                case 'created_at':
                    $reader_device->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $reader_device->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $reader_device->save();
        return $status;
    }

    public function remove_reader_device_data($id){
        return ReaderDevice::destroy($id);
    }
}
