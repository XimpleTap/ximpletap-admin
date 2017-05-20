<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RpiDevice extends Model
{
    protected $table = 'rpi_devices';

    public function device_status(){
        return $this->hasOne('App\DeviceStatus');
    }

    public function fetch_rpi_device_data($id){
        // return RPIDevice::with('device_status')->where('id','=',$id)->get(); set the foreign key for DeviceStatus model
        return RpiDevice::find($id);
    }

    public function create_rpi_device_data($data){
        $rules = array(
            'serial_number' => 'required',
            'status' => 'required'
        );
        $rpi_device = new RpiDevice();
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'serial_number':
                    $rpi_device->serial_number = $data['serial_number'];
                    break;
                case 'status':
                    $rpi_device->status = $data['status'];
                    break;
                case 'created_at':
                    $rpi_device->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $rpi_device->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $rpi_device->save();
        return $status;
    }

    public function update_rpi_device_data($data,$id){
        $rpi_device = RpiDevice::find($id);
        $columns = array_keys($data);
        foreach($columns as $d){
            switch($d){
                case 'serial_number':
                    $rpi_device->serial_number = $data['serial_number'];
                    break;
                case 'status':
                    $rpi_device->status = $data['status'];
                    break;
                case 'created_at':
                    $rpi_device->created_at = $data['created_at'];
                    break;
                case 'updated_at':
                    $rpi_device->updated_at = $data['updated_at'];
                    break;
            }
        }
        $status = $rpi_device->save();
        return $status;
    }
}
