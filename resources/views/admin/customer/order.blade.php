@extends("admin.base.base")

<!-- 头部文件引入 css等 -->
@section("link")

<!--data table-->
    <link rel="stylesheet" href="{{ asset('admins/js/data-tables/DT_bootstrap.css') }}" />


@endSection

<!-- 页面内容引入 -->
@section("content")

	<!-- page heading start-->
    <div class="page-heading">
        <h3>
            订单详情
        </h3>
        <ul class="breadcrumb">
            <li class="active"> 用户管理 </li>
            <li>
                <a href="#"> 订单详情 </a>
            </li>
        </ul>
    </div>
    <!-- page heading end-->
      <!-- page heading end-->
    <div class="wrapper">
         <div class="row">
            <div class="col-sm-12">
            <section class="panel">
            <header class="panel-heading">
                订单详情
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
                <th>商品名</th>
                <th>单价</th>
                <th>数量</th>
                <th>售后</th>
                <th>交易状态</th>
                <th>实际收款</th>
                <th>评价</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order as $key => $value)
            <tr class="">
                <td>{{ $key+1 }}</td>
                <td>{{ $value[4] }}</td>
                <td>{{ $value[2] }}</td>
                <td>{{ $value[3] }}</td>
                <td>{{ $value[5] }}</td>
                <td>{{ $value[0] }}</td>
                <td>{{ $value[1] }}</td>
                <td>好评</td>
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



@endSection

<!-- javaScript 引入 -->
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

@endSection

