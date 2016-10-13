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
        友情链接
    </h3>
    <ul class="breadcrumb">
        <li class="active"> 网站管理 </li>
        <li>
            <a href="#"> 友情链接 </a>
        </li>
    </ul>
    </div>
    <!-- page heading end-->
     <div class="wrapper">
         <div class="row">
            <div class="col-sm-12">
            <section class="panel">
            <header class="panel-heading">
                用户表
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                 </span>
            </header>
            <div class="panel-body">
            <div class="adv-table editable-table ">
            <div class="clearfix">
                <div class="btn-group">
                     <a href="links_add" title=""  class="btn btn-primary">
                      添加友情链接<i class="fa fa-plus"></i>
                   </a>
                </div>
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
                <th>链接名</th>
                <th>链接地址</th>
                <th>logo</th>
                <th>优先值</th>
                <th>编辑</th>
                <th>删除</th>
            </tr>
            </thead>
            <tbody>
            <tr class="">
                <td>1</td>
                <td>百度</td>
                <td>www.baidu.com</td>
                <td><img src="{{ asset('admins/images/baidu.jpg') }}" alt="百度" style="height: 40px;"></td>
                <td>1</td>
                <td><a class="edit" href="javascript:;">编辑</a></td>
                <td><a class="delete" href="javascript:;">删除</a></td>
            </tr>
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
