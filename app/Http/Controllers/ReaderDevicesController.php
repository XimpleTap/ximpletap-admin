<?php

namespace App\Http\Controllers;

use App\ReaderDevice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ReaderDevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'serial_number'=>'required',
            'device_model'=>'required',
            'status'=>'required'
        );
        $validator = Validator::make(Input::all(),$rules);
        if($validator->fails()){
            return "ERROR IN VALIDATION";
        } else{
            $reader_device = new ReaderDevice();
            $status = $reader_device->create_reader_device_data($request->all());
            return (string)$status;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reader_device = new ReaderDevice();
        return $reader_device->fetch_reader_device_data($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reader_device = new ReaderDevice();
        $status = $reader_device->udpate_reader_device_data($request->all(),$id);
        return (string)$status;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reader_device = new ReaderDevice();
        $status = $reader_device->remove_reader_device_data($id);
        return (string)$status;
    }
}
