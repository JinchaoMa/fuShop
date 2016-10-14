<?php

namespace App\Http\Controllers\admin\customer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $cid=$id;
        // dd($cid);
        $data = \DB::table("fu_goodsorder")->where("cid",$cid)->get();
        $data1 = \DB::table("fu_goodsorderprice")->where("oid",$data[0]->id)->get();
        $data2 = \DB::table("fu_goodstype")->where("gNo",$data1[0]->gNo)->get();
        $data3 = \DB::table("fu_goods")->where("id",$data2[0]->gId)->get();
        $data4 = \DB::table("fu_customerservice")->where("oid",$data[0]->id)->get();
        // dd($data4[0]->csStatus);

        // dd($data[0]->goStatus);//订单状态
        // dd($data1[0]->goPublshedPrice);//商品成交价
        // dd($data1[0]->goPrice);//商品商城价
        //  dd($data1[0]->goQuantity);//商品数量
        //  dd($data3[0]->gName);//商品名
        $order = [
            [$data[0]->goStatus,$data1[0]->goPublshedPrice,$data1[0]->goPrice,$data1[0]->goQuantity,$data3[0]->gName,$data4[0]->csStatus]
        ];
        // dd($order);
        return view('admin/customer/order',compact('order'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
