<?php

namespace App\Http\Controllers;

use App\BusinessReloadDenom;
use Illuminate\Http\Request;

class BusinessReloadDenomsController extends Controller
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
        $business_reload_denom = new BusinessReloadDenom();
        $status = $business_reload_denom->create_business_reload_denom_data($request->all());
        return (string)$status;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $business_reload_denom = new BusinessReloadDenom();
        return $business_reload_denom->fetch_business_reload_denom_data($id);
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
        $business_reload_denom = new BusinessReloadDenom();
        $status = $business_reload_denom->update_business_reload_denom($request->all(),$id);
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
        $business_reload_denom = new BusinessReloadDenom();
        $status = $business_reload_denom->remove_business_reload_denom_data($id);
        return (string)$status;
    }
}
