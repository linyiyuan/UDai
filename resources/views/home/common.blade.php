@extends('common.common')

@section('style')
@parent
@endsection


@section('header')
@parent
<!-- 搜索栏 -->
<div class="top-search">
    <div class="inner">
        <a class="logo" href="/"><img src="images/icons/logo.jpg" alt="U袋网" class="cover"></a>
        <div class="search-box">
            <form class="input-group">
                <input placeholder="Ta们都在搜U袋网" type="text">
                <span class="input-group-btn">
						<button type="button">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</button>
					</span>
            </form>
            <p class="help-block text-nowrap">
                <a href="">连衣裙</a>
                <a href="">裤</a>
                <a href="">衬衫</a>
                <a href="">T恤</a>
                <a href="">女包</a>
                <a href="">家居服</a>
                <a href="">2017新款</a>
            </p>
        </div>
        <div class="cart-box">
            <a href="udai_shopcart.html" class="cart-but">
                <i class="iconfont icon-shopcart cr fz16"></i> 购物车 0 件
            </a>
        </div>
    </div>
</div>    		
@endsection



@section('footer')
@parent
@endsection



@section('javascript')
@parent
@endsection