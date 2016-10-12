@extends("admin.base.base")

<!-- 头部文件引入 css等 -->
@section("link")

    <link rel="stylesheet" href="{{ asset('admins/js/data-tables/DT_bootstrap.css') }}" />

@endSection

<!-- 页面内容引入 -->
@section("content")

	<!-- page heading start-->
    <div class="page-heading">
    <h3>
        员工列表
    </h3>
    <ul class="breadcrumb">
        <li class="active"> 员工管理 </li>
        <li>
            <a href="#"> 员工列表 </a>
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
                    管理员列表
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                <div class="adv-table editable-table ">
                <div class="clearfix">
                    <div class="btn-group">
                        <button id="editable-sample_new" class="btn btn-primary">
                            添加管理员 <i class="fa fa-plus"></i>
                        </button>
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
                    <th>用户名</th>
                    <th>角色</th>
                    <th>性别</th>
                    <th>手机号</th>
                    <th>邮箱</th>
                    <th>加入时间</th>
                    <th>状态</th>
                    <th>编辑</th>
                    <th>删除</th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td>Jonathan</td>
                    <td>Smith</td>
                    <td>3455</td>
                     <td>3455</td>
                      <td>3455</td>
                      <td>3455</td>
                      <td>3455</td>
                    <td class="center">Lorem ipsume</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
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
