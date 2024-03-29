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
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>U袋网</title>
</head>
<body>

@section('style')

@show

@section('header')
<!-- 顶部tab -->
<div class="tab-header">
    <div class="inner">
        <div class="pull-left">
            <div class="pull-left">嗨，欢迎来到<span class="cr">U袋网</span></div>
            <a href="agent_level.html">网店代销</a>
            <a href="temp_article/udai_article4.html">帮助中心</a>
        </div>
        <div class="pull-right">
            <a href="login.html"><span class="cr">登录</span></a>
            <a href="login.html?p=register">注册</a>
            <a href="udai_welcome.html">我的U袋</a>
            <a href="udai_order.html">我的订单</a>
            <a href="udai_integral.html">积分平台</a>
        </div>
    </div>
</div>
@show


@yield('content')


@section('footer')
<!-- 底部信息 -->
<div class="footer">
    <div class="footer-tags">
        <div class="tags-box inner">
            <div class="tag-div">
                <img src="images/icons/footer_1.gif" alt="厂家直供">
            </div>
            <div class="tag-div">
                <img src="images/icons/footer_2.gif" alt="一件代发">
            </div>
            <div class="tag-div">
                <img src="images/icons/footer_3.gif" alt="美工活动支持">
            </div>
            <div class="tag-div">
                <img src="images/icons/footer_4.gif" alt="信誉认证">
            </div>
        </div>
    </div>
    <div class="footer-links inner">
        <dl>
            <dt>U袋网</dt>
            <a href="temp_article/udai_article10.html"><dd>企业简介</dd></a>
            <a href="temp_article/udai_article11.html"><dd>加入U袋</dd></a>
            <a href="temp_article/udai_article12.html"><dd>隐私说明</dd></a>
        </dl>
        <dl>
            <dt>服务中心</dt>
            <a href="temp_article/udai_article1.html"><dd>售后服务</dd></a>
            <a href="temp_article/udai_article2.html"><dd>配送服务</dd></a>
            <a href="temp_article/udai_article3.html"><dd>用户协议</dd></a>
            <a href="temp_article/udai_article4.html"><dd>常见问题</dd></a>
        </dl>
        <dl>
            <dt>新手上路</dt>
            <a href="temp_article/udai_article5.html"><dd>如何成为代理商</dd></a>
            <a href="temp_article/udai_article6.html"><dd>代销商上架教程</dd></a>
            <a href="temp_article/udai_article7.html"><dd>分销商常见问题</dd></a>
            <a href="temp_article/udai_article8.html"><dd>付款账户</dd></a>
        </dl>
    </div>
    <div class="copy-box clearfix">
        <ul class="copy-links">
            <a href="agent_level.html"><li>网店代销</li></a>
            <a href="class_room.html"><li>U袋学堂</li></a>
            <a href="udai_about.html"><li>联系我们</li></a>
            <a href="temp_article/udai_article10.html"><li>企业简介</li></a>
            <a href="temp_article/udai_article5.html"><li>新手上路</li></a>
        </ul>
        <!-- 版权 -->
        <p class="copyright">
            © 2005-2017 U袋网 版权所有，并保留所有权利<br>
            ICP备案证书号：闽ICP备16015525号-2&nbsp;&nbsp;&nbsp;&nbsp;福建省宁德市福鼎市南下村小区（锦昌阁）1栋1梯602室&nbsp;&nbsp;&nbsp;&nbsp;Tel: 18650406668&nbsp;&nbsp;&nbsp;&nbsp;E-mail: 18650406668@qq.com
        </p>
    </div>
</div>

@show


@section('javascript')
@show
</body>
</html>