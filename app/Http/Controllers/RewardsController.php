<?php

namespace App\Http\Controllers;

use App\Reward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class RewardsController extends Controller
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
            'description' => 'required',
            'required_points' => 'required',
            'is_exclusive' => 'required',
            'expiration_date'=> 'required',
            'business_id' => 'required',
            'reward_count_limit' => 'required',
            'estimated_equivalent_amount' => 'required',
            'max_single_claim' => 'required'
        );


        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return "ERROR IN VALIDATION";
        } else {
            $reward = new Reward();
            $status = $reward->create_reward_data($request->all());
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
        $reward = new Reward();
        return $reward->fetch_reward_data($id);
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
        $reward = new Reward();
        $status = $reward->update_reward_data($request->all(),$id);
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
        $reward = new Reward();
        $status = $reward->remove_reward_data($id);
        return (string)$status;
    }
}
