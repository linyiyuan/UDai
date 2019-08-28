<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/jquery.1.12.4.min.js')}}" charset="UTF-8"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}" charset="UTF-8"></script>
    <script src="{{ asset('js/swiper.min.js')}}" charset="UTF-8"></script>
    <script src="{{ asset('js/global.js')}}" charset="UTF-8"></script>
    <script src="{{ asset('js/jquery.DJMask.2.1.1.js')}}" charset="UTF-8"></script>
    <title>U袋网</title>
</head>
<body>

<!-- 顶部tab -->
<div class="tab-header">
    <div class="inner">
        <div class="pull-left">
            <div class="pull-left">嗨，欢迎来到<span class="cr">U袋网</span></div>
            <a href="agent_level.html">网店代销</a>
            <a href="temp_article/udai_article4.html">帮助中心</a>
        </div>
        <div class="pull-right">
            <a href="login.html"><span class="cr">登录s</span></a>
            <a href="login.html?p=register">注册</a>
            <a href="udai_welcome.html">我的U袋</a>
            <a href="udai_order.html">我的订单</a>
            <a href="udai_integral.html">积分平台</a>
        </div>
    </div>
</div>

@section('header')
    
@show


@yield('content')

</body>
</html>