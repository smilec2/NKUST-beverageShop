@extends('layout.main')

@section("content")
<!-- 主要內容 -->
<article id="menu-page" class="py-7">
    <div class="container">
        <!-- 區塊標題 -->
        <div class="text-center section-title mb-5">
            <h2>菜單MENU</h2>
            <p>我們用心堅持每一個細節，致力於將健康與美味傳遞</p>
        </div>
        <!-- 內容 -->
        <div class="text-center">
            <img src="{{ asset('/assets/images/menu.jpg')}}" alt="菜單" />
        </div>
    </div>
</article>
@endsection