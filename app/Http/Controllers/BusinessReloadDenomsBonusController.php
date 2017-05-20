<?php

namespace App\Http\Controllers;

use App\BusinessReloadDenomBonus;
use Illuminate\Http\Request;

class BusinessReloadDenomsBonusController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $business_reload_denom_bonus = new BusinessReloadDenomBonus();
        $status = $business_reload_denom_bonus->create_business_reload_denom_data($request->all());
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
        $business_reload_denom_bonus = new BusinessReloadDenomBonus();
        return $business_reload_denom_bonus->fetch_business_reload_denom_bonus_data($id);
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
        $business_reload_denom_bonus = new BusinessReloadDenomBonus();
        $status = $business_reload_denom_bonus->update_business_reload_denom_data($request->all(),$id);
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
        $business_reload_denom_bonus = new BusinessReloadDenomBonus();
        $status = $business_reload_denom_bonus->remove_business_reload_denom_bonus_data($id);
        return (string)$status;
    }
}
