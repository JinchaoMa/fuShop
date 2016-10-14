<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class imageController extends Controller
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
     * Laravel框架 上传文件 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //判断请求中是否包含name=file的上传文件
        if(!$request->hasFile('brandIcon')){
            exit('上传文件为空！');
        }
        // 接收文件信息 进行上传  
        $file = $request->file('brandIcon');
       // dd($file);
        // 检验一下上传的文件是否有效.  
        if($file->isValid()){  
            // 缓存在tmp文件夹中的文件名 例如 php8933.tmp 这种类型的.  
            $clientName = $file -> getClientOriginalName(); 

            $tmpName = $file ->getFileName();   

            // 这个表示的是缓存在tmp文件夹下的文件的绝对路径(这里要注意,如果我使用接下来的move方法之后, getRealPath() 就找不到文件的路径了.因为文件已经被移走了.所以这里道出了文件上传的原理,将文件上传的某个临时目录中,然后使用Php的函数将文件移动到指定的文件夹.)  
            $realPath = $file -> getRealPath();   
            
            // 上传文件的后缀.  
            $entension = $file -> getClientOriginalExtension();   

            // 大家对mimeType应该不陌生了. 我得到的结果是 image/jpeg.(这里要注意一点,以前我们使用 mime_content_type() ,在php5.3 之后,开始使用 fileinfo 来获取文件的mime类型.所以要加入 php_fileinfo的php拓展.windows下是 php_fileinfo.dll,在php.ini文件中将 extension=php_fileinfo.dll前面的分号去掉即可.当然要重启服务器. )  
            $mimeType = $file -> getMimeType(); 
            //dd($mimeType);
            //限制文件上传MIME类型
            $mimeTypes = ["image/jpeg","image/png","image/gif","image/jpg"];
            if(!in_array($mimeType,$mimeTypes)){
                exit('上传文件格式不正确');
            } 
            
            // (第一种)最后我们使用  
            //$path = $file -> move('public/updateFile');  

            // 如果你这样写的话,默认是会放置在 我们 public/updateFile/php79DB.tmp   
            // 貌似不是我们希望的,如果我们希望将其放置在app的storage目录下的uploads目录中,并且需要改名的话..  
            //(第二种)  
            $newName = md5(date("Y-m-d H:i:s").$clientName).".".$entension;  
            $path = $file -> move('updateFile',$newName);  
            // 这里app_path()就是app文件夹所在的路径.$newName 可以是你通过某种算法获得的文件的名称.主要是不能重复产生冲突即可. 比如 $newName = md5(date("Y-m-d H:i:s").$clientName).".".$entension;  
            // 利用日期和客户端文件名结合 使用md5 算法加密得到结果.不要忘记在后面加上文件原始的拓展名.  

            // 将$path入库  
            // if(Db::table('file')->insert(['file_path'=>$path])){  
            //     return Redirect::to('file_list');  
            // }  
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
        dd('successed');
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
