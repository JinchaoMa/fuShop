@extends("admin.base.base")

@section("link")

	<!--data table-->
	<link rel="stylesheet" href="{{ asset('admins/js/data-tables/DT_bootstrap.css') }}" />

    <link rel="stylesheet" href="{{ asset('admins/css/base-ma.css') }}" />


    <!--icheck-->
    <link href="{{ asset('js/iCheck/skins/minimal/minimal.css') }}" rel="stylesheet">

@endSection

@section("content")

    <!-- page heading start-->
    <div class="page-heading">
        <h3>
            基本信息
        </h3>
        <ul class="breadcrumb">
            <li class="active"> 用户管理 </li>
            <li>
                <a href="#"> 基本信息 </a>
            </li>
        </ul>
    </div>
    <!-- page heading end-->

    <!--body wrapper start-->
    <div class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        用户列表
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table editable-table ">
                            <div class="clearfix">
                                <div class="btn-group pull-right">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">工具 <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">打印</a></li>
                                        <li><a href="#">输出到PDF</a></li>
                                        <li><a href="#">输出到Excel</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space15"></div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>头像</th>
                                    <th>帐号</th>
                                    <th>用户名</th>
                                    <th>积分</th>
                                    <th>订单</th>
                                    <th>状态</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $value)
                                    <tr class="">
                                        <td>{{ $key+1 }}</td>
                                         <td><img src="{{ asset('admins/images/photos/user1.png') }}" alt="" style="height: 35px;"></td>
                                         <td>{{ $value->cAccount }}</td>
                                        <td>{{ $value->cName }}</td>
                                        <td>{{ $value->cScore }}</td>
                                         <td><a href="order/{{ ($value->id) }}" class="label label-success radius">订单详情</a></td>

                                            <td ><a href="{{ ($value->id) }}" class="label label-success radius" onclick='doStart()' id='btn'>已开启</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--body wrapper end-->

@endSection

@section("javaScript")

	<!--data table-->
	<script type="text/javascript" src="{{ asset('admins/js/data-tables/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admins/js/data-tables/DT_bootstrap.js') }}"></script>



	<!--script for editable table-->
	<script src="{{ asset('admins/js/editable-table.js') }}"></script>

	<!-- END JAVASCRIPTS -->
	<script>
	    jQuery(document).ready(function() {
	        EditableTable.init();
	    });

        // 按钮
        function doStart()
        {
            //判断按钮是开始还是结束
            if(btn.innerHTML == '已开启'){
                //让按钮的值变成停止
                btn.innerHTML = '已禁用';
            }else{
                btn.innerHTML = '已开启';
            }
        }

        /*用户-停用*/
// function doStart(obj,id){
//     layer.confirm('确认要停用吗？',function(index){
//         $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
//         $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
//         $(obj).remove();
//         layer.msg('已停用!',{icon: 5,time:1000});
//     });
// }

// 用户-启用
// function doStop(obj,id){
//     layer.confirm('确认要启用吗？',function(index){
//         $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
//         $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
//         $(obj).remove();
//         layer.msg('已启用!',{icon: 6,time:1000});
//     });
// }
	</script>

    <!-- 按钮 -->




@endSection