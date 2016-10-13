@extends("admin.base.base")

@section("link")

<!-- 上传框开始 -->
<link rel="stylesheet" type="text/css" href="{{ asset('admins/css/bootstrap-fileupload.min.css') }}" />
<!-- 上传匡结束 -->

@endSection

@section("content")

     <section class="panel">
            <header class="panel-heading">
                添加友情链接
            </header>
            <div class="panel-body">
                <form class="form-horizontal adminex-form" method="get">
                    <!-- 友情链接开始 -->
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">友情链接名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control round-input">
        </div>
    </div>
     <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">链接地址</label>
        <div class="col-sm-10">
            <input type="text" class="form-control round-input">
        </div>
    </div>
    <!--上传匡开始-->
   <div class="form-group last">
        <label class="control-label col-md-3">上传logo</label>
            <div class="col-md-9">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-default btn-file">
                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> 选择图片 </span>
                            <span class="fileupload-exists"><i class="fa fa-undo"></i> 重新选择</span>
                            <input type="file" class="default" />
                        </span>
                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> 移除</a>
                    </div>
                </div><br/>
                    <span class="label label-danger ">注意!</span>
                        <span>
                           仅在最新的Firefox，Chrome，Opera，Safari和Internet Explorer 10中支持附加图片缩略图
                        </span>
            </div>
        </div>
    <!--上传匡结束-->


                </form>
            </div>
        </section>




@endSection

@section("javaScript")
    <!-- 上传匡开始 -->
    <script type="text/javascript" src="{{ asset('admins/js/bootstrap-fileupload.min.js') }}"></script>

@endSection