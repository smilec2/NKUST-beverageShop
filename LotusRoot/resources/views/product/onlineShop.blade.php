@extends('layout.main')

@section("content")
<!-- 主要內容 -->
<article id="onlineshop-page" class="py-7">
    <div class="container">
        <!-- 區塊標題 -->
        <div class="text-center section-title mb-5">
            <h2>線上購物</h2>
            <p>我們用心堅持每一個細節，致力於將健康與美味傳遞到每一位顧客的手中！</p>
        </div>
        <!-- 內容 -->
        <!-- 分類按鈕 -->
        <ul
            class="list-unstyled d-flex align-items-center justify-content-center filter-btn">
            <li class="btn btn-lotus-a me-2" data-filter="all">全部</li>
            <li class="btn btn-lotus-a me-2" data-filter="1">有料</li>
            <li class="btn btn-lotus-a me-2" data-filter="2">茶類</li>
            <li class="btn btn-lotus-a me-2" data-filter="3">奶類</li>
            <li class="btn btn-lotus-a me-2" data-filter="4">其他</li>
        </ul>
        <!-- 商品列 -->
        <div
            class="filter-area row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4 g-4 mx-0">
            @foreach($products as $product)
            <!-- 商品 -->
            <!-- data-sugar = 0 固定甜度, category_id == 2 不能調整甜度-->
            @if ($product->category_id == 2)
            <div
                class="col text-center filtr-item py-3 product-info" 
                @if (session()->has('user_id'))
                    data-user_id = "{{  session('user_id') }}"
                @else
                    data-user_id = 0
                @endif
                data-product_id = "{{ $product->id }}"
                data-quantity=1
                data-sugar=0
                data-size=1
                data-price="{{ $product->price }}"
                data-category="{{ $product->category_id }}"
                >
                <!-- data-sugar = 0 固定甜度, category_id == 2 不能調整甜度-->
            @else 
                <div
                class="col text-center filtr-item py-3 product-info" 
                @if (session()->has('user_id'))
                    data-user_id = "{{ session('user_id') }}"
                @else
                    data-user_id = 0
                @endif
                data-product_id="{{ $product->id }}"
                data-quantity=1
                data-sugar=0
                data-size=1
                data-price="{{ $product->price }}"
                data-category="{{ $product->category_id }}"
                
                >
            @endif
            
                <div class="card h-100 text-center">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="{{ asset('storage/' . $product->image_url) }}"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="手熬薏仁湯">
                            <img src="{{ asset('storage/' . $product->image_url) }}" class="card-img-top" alt="{{ $product->product_name }}" />
                        </a>
                        <!-- 英文大寫text-uppercase -->
                        <!-- 收藏、加入購物車、連結詳情頁 -->
                        <ul class="list-unstyled d-flex align-items-center onlineshop-icon-ul">
                            <!-- list-unstyled點拿掉 -->
                            <li class="col text-center">
                                <a
                                    href="javascript:;"
                                    title="點擊加入我的最愛商品"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-suit-heart-fill"></i>
                                    <span class="d-none">我的最愛商品</span>
                                </a>
                            </li>
                            <li class="py-1 col-6 text-center">
                                <button title="點擊加入購物車"
                                    class="text-green fs-5 btn add-to-cart" style="background: transparent; color: #84b78e;">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </button>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product/description/{{ $product->id }}"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                        <!-- <span
                            class="position-absolute top-0 end-0 bg-warning px-3 mt-2 me-2 rounded-pill text-uppercase"
                            >sale
                        </span> -->
                    </div>
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">{{ $product->product_name }}</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">{{ $product->price }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</article>
@endsection