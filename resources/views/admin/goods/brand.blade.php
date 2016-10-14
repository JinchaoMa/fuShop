@extends("admin.base.base")

@section("link")

    <!--data table-->
    <link rel="stylesheet" href="{{ asset('admins/js/data-tables/DT_bootstrap.css') }}" />

@endSection

@section("content")

    <!-- page heading start-->
    <div class="page-heading">
    <h3>
        品牌管理
    </h3>
    <ul class="breadcrumb">
        <li class="active"> 商品管理 </li>
        <li>
            <a href="#"> 品牌管理 </a>
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
                        品牌列表
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group">
                                <a href="{{ url('admin/goods/brand/add') }}" class="btn btn-primary">
                                    添加品牌 <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">导出 <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">打印</a></li>
                                    <li><a href="#">导出到PDF</a></li>
                                    <li><a href="#">导出到Excel</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space15"><!-- </div> -->
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>品牌名称</th>
                                        <th>品牌LOGO</th>
                                       <!--  <th>编辑/保存</th> -->
                                        <th>删除/取消</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $value)
                                    <tr class="">
                                        <td id="id">{{ $value->id }}</td>
                                        <td>{{ $value->brandName }}</td>
                                        <td>
                                            <img src="{{ $value->brandIcon }}" alt="{{ $value->brandName }}">
                                        </td>
                                        <!-- <td><a class="edit" href="javascript:;">编辑</a></td> -->
                                        <td><a class="delete" bid="{{ $value->id }}" href="javascript:;">删除</a></td>
                                        @endforeach
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
    <script src="{{ asset('admins/js/simver-js/editable-table-goods-brand.js') }}"></script>

    <!-- END JAVASCRIPTS -->
    <script>
        jQuery(document).ready(function() {
            EditableTable.init();
        });
    </script>

@endSection
