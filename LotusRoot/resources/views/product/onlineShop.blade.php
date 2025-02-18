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
            <!-- 1手熬薏仁湯 -->
            <div class="col text-center filtr-item py-3" data-category="1">
                <div class="card h-100">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="images/drink1.jpg"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="手熬薏仁湯">
                            <img src="images/drink1.jpg" class="card-img-top" alt="手熬薏仁湯" />
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
                                <a
                                    href="javascript:;"
                                    title="點擊加入購物車"
                                    class="text-green fs-5">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </a>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product-description.html"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                        <span
                            class="position-absolute top-0 end-0 bg-warning px-3 mt-2 me-2 rounded-pill text-uppercase"
                            >sale
                        </span>
                    </div>
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">手熬薏仁湯</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">55</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2蓮藕牛奶 -->
            <div class="col filtr-item py-3" data-category="3">
                <div class="card h-100">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="images/drink2.jpg"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="招牌蓮藕牛奶">
                            <img
                                src="images/drink2.jpg"
                                class="card-img-top"
                                alt="招牌蓮藕牛奶" />
                        </a>
                        <span
                            class="position-absolute top-0 end-0 bg-success px-3 mt-2 me-2 rounded-pill text-uppercase"
                            >popular
                        </span>
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
                                <a
                                    href="javascript:;"
                                    title="點擊加入購物車"
                                    class="text-green fs-5">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </a>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product-description.html"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 價格 -->
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">招牌蓮藕牛奶</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">60</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 3手熬綠豆露 -->
            <div class="col filtr-item py-3" data-category="1">
                <div class="card h-100">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="images/drink3.jpg"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="招牌蓮藕牛奶">
                            <img src="images/drink3.jpg" class="card-img-top" alt="手熬綠豆露" />
                        </a>
                        <span
                            class="position-absolute top-0 end-0 bg-danger px-3 mt-2 me-2 rounded-pill text-uppercase"
                            >hot
                        </span>
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
                                <a
                                    href="javascript:;"
                                    title="點擊加入購物車"
                                    class="text-green fs-5">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </a>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product-description.html"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 價格 -->
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">手熬綠豆露</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">50</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4洛神烏梅 -->
            <div class="col filtr-item py-3" data-category="4">
                <div class="card h-100">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="images/drink4.jpg"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="洛神烏梅">
                            <img src="images/drink4.jpg" class="card-img-top" alt="洛神烏梅" />
                        </a>
                        <span
                            class="position-absolute top-0 end-0 bg-success px-3 mt-2 me-2 rounded-pill text-uppercase"
                            >popular</span
                        >
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
                                <a
                                    href="javascript:;"
                                    title="點擊加入購物車"
                                    class="text-green fs-5">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </a>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product-description.html"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 價格 -->
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">洛神烏梅</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">55</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 5杏仁茶 -->
            <div class="col filtr-item py-3" data-category="2">
                <div class="card h-100">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="images/drink5.jpg"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="杏仁茶">
                            <img src="images/drink5.jpg" class="card-img-top" alt="杏仁茶" />
                        </a>
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
                                <a
                                    href="javascript:;"
                                    title="點擊加入購物車"
                                    class="text-green fs-5">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </a>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product-description.html"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 價格 -->
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">杏仁茶</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">50</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 6綠豆露牛奶 -->
            <div class="col filtr-item py-3" data-category="1,3">
                <div class="card h-100">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="images/drink6.jpg"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="綠豆露牛奶">
                            <img src="images/drink6.jpg" class="card-img-top" alt="綠豆露牛奶" />
                        </a>
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
                                <a
                                    href="javascript:;"
                                    title="點擊加入購物車"
                                    class="text-green fs-5">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </a>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product-description.html"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 價格 -->
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">綠豆露牛奶</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">55</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 7紅豆牛奶 -->
            <div class="col filtr-item py-3" data-category="1,3">
                <div class="card h-100">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="images/drink7.jpg"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="紅豆牛奶">
                            <img src="images/drink7.jpg" class="card-img-top" alt="紅豆牛奶" />
                        </a>
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
                                <a
                                    href="javascript:;"
                                    title="點擊加入購物車"
                                    class="text-green fs-5">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </a>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product-description.html"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 價格 -->
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">紅豆牛奶</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">60</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 8紅豆湯 -->
            <div class="col filtr-item py-3" data-category="4">
                <div class="card h-100">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="images/drink8.jpg"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="紅豆湯">
                            <img src="images/drink8.jpg" class="card-img-top" alt="紅豆湯" />
                        </a>
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
                                <a
                                    href="javascript:;"
                                    title="點擊加入購物車"
                                    class="text-green fs-5">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </a>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product-description.html"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 價格 -->
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">紅豆湯</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">55</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 9紅茶 -->
            <div class="col filtr-item py-3" data-category="2">
                <div class="card h-100">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="images/drink9.jpg"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="紅茶">
                            <img src="images/drink9.jpg" class="card-img-top" alt="紅茶" />
                        </a>
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
                                <a
                                    href="javascript:;"
                                    title="點擊加入購物車"
                                    class="text-green fs-5">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </a>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product-description.html"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 價格 -->
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">紅茶</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">30</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 10紅茶牛奶 -->
            <div class="col filtr-item py-3" data-category="3">
                <div class="card h-100">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="images/drink10.jpg"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="紅茶牛奶">
                            <img src="images/drink10.jpg" class="card-img-top" alt="紅茶牛奶" />
                        </a>
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
                                <a
                                    href="javascript:;"
                                    title="點擊加入購物車"
                                    class="text-green fs-5">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </a>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product-description.html"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 價格 -->
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">紅茶牛奶</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">45</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 11紅茶拿鐵 -->
            <div class="col filtr-item py-3" data-category="3">
                <div class="card h-100">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="images/drink11.jpg"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="紅茶拿鐵">
                            <img src="images/drink11.jpg" class="card-img-top" alt="紅茶拿鐵" />
                        </a>
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
                                <a
                                    href="javascript:;"
                                    title="點擊加入購物車"
                                    class="text-green fs-5">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </a>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product-description.html"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 價格 -->
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">紅茶拿鐵</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">60</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 12招牌蓮藕茶 -->
            <div class="col filtr-item py-3" data-category="2">
                <div class="card h-100">
                    <div class="position-relative overflow-hidden">
                        <a
                            href="images/drink12.jpg"
                            title="點擊放大圖"
                            data-fancybox="gallery"
                            data-caption="招牌蓮藕茶">
                            <img src="images/drink12.jpg" class="card-img-top" alt="招牌蓮藕茶" />
                        </a>
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
                                <a
                                    href="javascript:;"
                                    title="點擊加入購物車"
                                    class="text-green fs-5">
                                    <i class="bi bi-cart-plus"></i>
                                    <span class="d-none">加入購物車</span>
                                </a>
                            </li>
                            <li class="col text-center">
                                <a
                                    href="product-description.html"
                                    title="點擊前往商品說明頁"
                                    class="text-green fs-5 pt-1">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span class="d-none">商品說明頁</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 價格 -->
                    <div class="card-body text-darkred text-center">
                        <h3 class="card-title h5">招牌蓮藕茶</h3>
                        <div class="card-text fst-italic">
                            <span class="sale fs-4 p-2 text-green">55</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
@endsection