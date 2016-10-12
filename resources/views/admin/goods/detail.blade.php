@extends("admin.base.base")

<!-- 头部文件引入 css等 -->
@section("link")

    <!--dropzone css-->
    <link href="{{ asset('admins/js/dropzone/css/dropzone.css') }}" rel="stylesheet"/>

@endSection

<!-- 页面内容引入 -->
@section("content")

	<!-- page heading start-->
    <div class="page-heading">
        <h3>
            商品详情
        </h3>
        <ul class="breadcrumb">
            <li class="active"> 商品管理 </li>
            <li>
                <a href="#"> 商品详情 </a>
            </li>
        </ul>
    </div>
    <!-- page heading end-->

    <!-- 商品基本信息开始 -->
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                商品基本信息
            </header>
            <div class="panel-body">
                <form class="form-horizontal adminex-form" method="get">
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">商品标题</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                            <span class="help-block">不能超过30个汉字(60个字符)，商品的标题要和商品类目、属性一致</span>
                        </div>

                        <label class="col-sm-2 control-label">商品描述</label>
                        <div class="col-sm-9">
                            <textarea rows="6" class="form-control"></textarea>
                            <span class="help-block">描述不能超过150个汉字，描述用来介绍商品特点，吸引消费者购买。</span>
                        </div>

                    </div>

                    <form action="js/dropzone/upload.php" class="dropzone" id="my-awesome-dropzone"></form>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">11</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                            <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                        </div>
                    </div>
                </form>
            </div>
        <!-- </section> -->

        <!-- <section class="panel"> -->
                <header class="panel-heading">
                    上传商品原图
                    <!-- <span class="tools pull-right">
                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                        <a class="fa fa-times" href="javascript:;"></a>
                     </span> -->
                </header>
                <div class="panel-body">
                    <form action="js/dropzone/upload.php" class="dropzone" id="my-awesome-dropzone"></form>
                    <span class="help-block">可上传5张</span>
                </div>
        <!-- </section> -->

        <!-- <section class="panel"> -->
                <header class="panel-heading">
                    上传商品详情图
                    <!-- <span class="tools pull-right">
                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                        <a class="fa fa-times" href="javascript:;"></a>
                     </span> -->
                </header>
                <div class="panel-body">
                    <form action="js/dropzone/upload.php" class="dropzone" id="my-awesome-dropzone"></form>
                    <span class="help-block">请上传详情长图</span>
                </div>
        </section>
    </section>
    <!-- 商品基本信息结束 -->

@endSection

<!-- javaScript 引入 -->
@section("javaScript")

    <!--dropzone-->
    <script src="{{ asset('admins/js/dropzone/dropzone.js') }}"></script>

@endSection
