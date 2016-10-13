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
                                    <th>状态</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td>1</td>
                                         <td><img src="{{ asset('admins/images/photos/user1.png') }}" alt="" style="height: 35px;"></td>
                                         <td>125465648</td>
                                        <td>马小云</td>
                                        <td>3455</td>
                                        <td class="center">
                                            <div class="wrap5" a="off">
                                                <span>开启</span>
                                                <span>关闭</span>
                                                <div style="left: 2px;"></div>
                                            </div>
                                        </td>


                                    </tr>
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
	</script>

    <!-- 按钮 -->

    <script>
            $(".wrap5").mousedown(function(event) {
            if ($(".wrap5").attr("a") == "off") {
                $(".wrap5 div").stop().animate({
                    "left" : "49px"
                },400),
                $(".wrap5").attr("a","on")
            }else {
                $(".wrap5 div").stop().animate({
                    "left" : "1px"
                },400),
                $(".wrap5").attr("a","off")
            }
        });
    </script>

@endSection