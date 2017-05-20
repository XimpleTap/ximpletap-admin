<?php

namespace App\Http\Controllers;

use App\DevicePair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class DevicePairsController extends Controller
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
            'rpi_id'=>'required',
            'reader_id'=>'required',
            'is_pair_active'=>'required',
            'is_currently_deployed'=>'required'
        );
        $validator = Validator::make(Input::all(),$rules);
        if($validator->fails()){
            return "ERROR IN VALIDATION";
        }else{
            $device_pair = new DevicePair();
            $status = $device_pair->create_device_pair_data($request->all());
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
        $device_pair = new DevicePair();
        return $device_pair->fetch_device_pair_data($id);
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
        $device_pair = new DevicePair();
        $status = $device_pair->update_device_pair_data($request->all(),$id);
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
        $device_pair = new DevicePair();
        $status = $device_pair->remove_device_pair_data($id);
        return (string)$status;
    }
}
