<?php

namespace App\Http\Controllers;

use App\ProductServiceDiscount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ProductsServicesDiscountsController extends Controller
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
            'products_services_id' => 'required',
            'is_discount_fixed' => 'required',
            'discount' => 'required',
            'expires_on' => 'required'
        );
        $validator = Validator::make(Input::all(),$rules);
        if($validator->fails()){
            return "ERROR IN VALIDATION";
        } else{
            $product_service_discount = new ProductServiceDiscount();
            $status = $product_service_discount->create_product_service_discount_data($request->all());
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
        $product_services_discounts = new ProductServiceDiscount();
        return $product_services_discounts->fetch_product_service_discount_data($id);
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
        $product_services_discounts = new ProductServiceDiscount();
        $status = $product_services_discounts->update_product_service_data($request->all(),$id);
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

    }
}
