<?php

namespace App\Http\Controllers\admin\goods;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class brandController extends Controller
{
    /**
     * 品牌列表
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = \DB::table('fu_brand')->get();
        return view('admin/goods/brand',compact('data'));
        
    }

    /**
     * 增加一条品牌
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
        // if(!$request->hasFile('file')){
        //     exit('上传文件为空');
        // }
        // $file = $request->file('brandIcon');
        // var_dump($file);
        //dd($request);
        //$data = \DB::table('fu_brand')->ceewte;
        //dd('success');
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
    public function destroy($bid)
    {
        //
        \DB::table('fu_brand')->where('id','=',$bid)->delete();
        //dd('xx');
    }
}
