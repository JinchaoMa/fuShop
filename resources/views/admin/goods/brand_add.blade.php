@extends("admin.base.base")

<!-- 头部文件引入 css等 -->
@section("link")

    <!-- 上传框开始 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/css/bootstrap-fileupload.min.css') }}" />
    <!-- 上传匡结束 -->

@endSection

<!-- 页面内容引入 -->
@section("content")

	<!-- page heading start-->
    <div class="page-heading">
    <h3>
        添加品牌
    </h3>
    <ul class="breadcrumb">
        <li class="active"> 品牌管理 </li>
        <li>
            <a href="#"> 添加品牌 </a>
        </li>
    </ul>
    </div>
    <!-- page heading end-->
    <div class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                添加品牌
            </header>
            <div class="panel-body">
                @if(isset($status))
                    <div class="alert alert-success fade in">
                        <button type="button" class="close close-sm" data-dismiss="alert">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>添加成功！</strong> 你已经成功的添加了一个品牌，在此页面继续添加，或点击左侧品牌列表查看。
                    </div>
                @endif
                <form class="form-horizontal adminex-form" method="post" action=" {{ URL('updateFile/update') }} " enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <!-- 友情链接开始 -->
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">品牌名</label>
                        <div class="col-sm-10">
                            <input type="text" name="brandName" class="form-control round-input">
                            <span class="help-block">不能超过15个汉字(30个字符)</span>
                        </div>
                    </div>
                    <!--上传匡开始-->
                    <div class="form-group">
                        <label class="control-label col-md-3">上传品牌logo</label>
                        <div class="col-md-9">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="{{ asset('admins/images/gallery/image4.jpg') }}" alt="无法加载预览" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> 选择图片 </span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> 重新选择</span>
                <!-- </form>
                <form > -->
                                        <input type="file" name="brandIcon" class="default" />
                                    </span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> 移除</a>
                                </div>
                            </div>
                            <br/>
                            <span class="label label-danger ">注意!</span>
                            <span>
                                仅在最新的Firefox，Chrome，Opera，Safari和Internet Explorer 10中支持附加图片缩略图
                            </span>
                            <br>
                            <br>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-success btn-lg btn-block">确认添加</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <!--上传匡结束-->

@endSection

<!-- javaScript 引入 -->
@section("javaScript")

    <!-- 上传匡开始 -->
    <script type="text/javascript" src="{{ asset('admins/js/bootstrap-fileupload.min.js') }}"></script>

@endSection
