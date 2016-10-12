<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>未来商城后台</title>

  <!--common-->
  <link href="{{ asset('admins/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('admins/css/style-responsive.css') }}" rel="stylesheet">

  @yield('link')



  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- 侧边栏开始-->
    <div class="left-side sticky-left-side">

        <!--logo开始-->
        <div class="logo">
            <a href="index.html"><img src="{{ asset('admins/images/logo.png') }}" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="{{ asset('admins/images/logo_icon.png') }}" alt=""></a>
        </div>
        <!--logo结束-->

        <!-- 侧边导航条开始 -->
        <div class="left-side-inner">

            <!-- 手机端自适应开始 -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="{{ asset('admins/images/photos/user-avatar.png') }}" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">登录员工名</a></h4>
                        <span>"Hello There...恩恩，说点啥吧"</span>
                    </div>
                </div>

                <h5 class="left-nav-title">帐号信息</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>个人信息</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>设置</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>登出</span></a></li>
                </ul>
            </div>
            <!-- 手机端自适应结束 -->

            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="{{ url('admin') }}"><i class="fa fa-home"></i> <span>主页</span></a></li>

                <!-- 用户管理导航开始 -->
                <li class="menu-list"><a href=""><i class="fa fa-male"></i> <span>用户管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{ url('admin/customer/base') }}"> 基本信息</a></li>
                        <li><a href="{{ url('admin/customer/order') }}"> 订单详情</a></li>
                        <li><a href="{{ url('admin/customer/evaluation') }}"> 评价详情</a></li>
                    </ul>
                </li>
                <!-- 用户管理导航结束 -->

                <!-- 商品管理开始 -->
                <li class="menu-list"><a href=""><i class="fa fa-gift"></i> <span>商品管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{ url('admin/goods/brand') }}"> 品牌管理</a></li>
                        <li><a href="{{ url('admin/goods/status') }}"> 商品状态</a></li>
                        <li><a href="{{ url('admin/goods/detail') }}"> 商品详情</a></li>
                    </ul>
                </li>
                <!-- 商品管理结束 -->

                <!-- 订单管理开始 -->
                <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>订单管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{ url('admin/order/list') }}"> 订单列表</a></li>
                        <li><a href="{{ url('admin/order/evaluation') }}"> 评价管理</a></li>
                        <li><a href="{{ url('admin/order/service') }}"> 售后管理</a></li>
                    </ul>
                </li>
                <!-- 订单管理结束 -->

                <!-- 商城管理开始 -->
                <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>商城管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{ url('admin/shop/index') }}"> 主页管理</a></li>
                        <li><a href="{{ url('admin/shop/list') }}"> 列表页管理</a></li>
                        <li><a href="{{ url('admin/shop/detail') }}"> 详情页管理</a></li>
                    </ul>
                </li>
                <!-- 商城管理结束 -->

                <!-- 系统统计开始 -->
                <li class="menu-list"><a href=""><i class="fa fa-qrcode"></i> <span>系统统计</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#"> 访客数量</a></li>
                        <li><a href="#"> 商品热度</a></li>
                        <li><a href="#"> 订单数量</a></li>
                         <li><a href="#"> 交易额</a></li>
                          <li><a href="#"> 库存信息</a></li>
                    </ul>
                </li>
                <!-- 系统统计结束 -->

                <!-- 后台管理员开始 -->
                <li class="menu-list"><a href=""><i class="fa fa-android"></i> <span>员工管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{ url('admin/staff/list') }}">员工列表</a></li>
                        <li><a href="{{ url('admin/staff/role') }}"> 角色管理</a></li>
                        <li><a href="{{ url('admin/staff/power') }}"> 权限管理</a></li>
                    </ul>
                </li>
                <!-- 后台管理结束 -->

                <!-- 网站管理开始 -->
                <li class="menu-list"><a href=""><i class="fa fa-keyboard-o"></i> <span>网站管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{ url('admin/web/config') }}"> 网站配置</a></li>
                        <li><a href="{{ url('admin/web/ad') }}"> 广告管理</a></li>
                        <li><a href="{{ url('admin/web/links') }}"> 友情链接</a></li>
                    </ul>
                </li>
                <!-- 网站管理结束 -->

            </ul>
            <!--sidebar nav end-->

        </div>
        <!-- 侧边导航条结束 -->
    </div>
    <!-- 侧边栏结束-->

    <!-- 内容区开始-->
    <div class="main-content" >

        <!-- header section start-->
        <!-- 顶部导航开始 -->
        <div class="header-section">
            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->
        </div>
        <!-- 顶部导航结束 -->
        <!-- header section end-->

        <!-- 页面内容 开始 -->

			@yield('content')

        <!-- 内面内容 结束 -->

        <!--footer section start-->
        <footer>
            2016 &copy; 版权归变形金刚项目小组所有
        </footer>
        <!--footer section end-->

    </div>
    <!-- 内容区结束-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ asset('admins/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('admins/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('admins/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('admins/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admins/js/modernizr.min.js') }}"></script>
<script src="{{ asset('admins/js/jquery.nicescroll.js') }}"></script>

<!-- javaScript 引入开始 -->

@yield('javaScript')

<!-- javaScript 引入结束 -->

<!--common scripts for all pages-->
<script src="{{ asset('admins/js/scripts.js') }}"></script>

</body>
</html>
