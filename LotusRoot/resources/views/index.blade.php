@extends('layout.header_and_footer')

@section("banner")
<!-- 輪播圖/行銷圖 -->
<div id="banner-slide" class="carousel slide">
    <!-- 底線切換 -->
    <div class="carousel-indicators">
        <button
            type="button"
            data-bs-target="#banner-slide"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"></button>
        <button
            type="button"
            data-bs-target="#banner-slide"
            data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button
            type="button"
            data-bs-target="#banner-slide"
            data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        <!-- 新增一組就要再加上<button type="button" data-bs-target="#banner-slide" data-bs-slide-to="3" aria-label="Slide 4"></button> -->
    </div>
    <!-- 圖 -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/back1.jpg" class="d-block w-100" alt="back1" />
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/back2.jpg" class="d-block w-100" alt="back2" />
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/back3.jpg" class="d-block w-100" alt="back3" />
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
        <!-- <div class="carousel-item"> 多一組的狀況
        <img src="images/back4.jpg" class="d-block w-100" alt="back4">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div> -->
    </div>
    <!-- 箭頭 -->
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#banner-slide"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#banner-slide"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection
@section("about")
<!-- 關於 -->
<article id="about" class="py-7 bgc-lotus-a">
    <div class="container">
        <!-- 區塊標題 -->
        <div class="text-center section-title mb-5">
            <h2>關於我們</h2>
            <p>傳統古早味，古法手工熬煮</p>
        </div>
        <!-- 相關內容 -->
        <div class="d-flex align-items-center justify-content-center flex-column">
            <div class="col-lg-5 col-12 mb-lg-0 mb-4 wow bounceInLeft"></div>
            <div class="col-lg-7 wow bounceInRight ps-lg-5">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card border-0 rounded-0 bg-transparent">
                            <img src="assets/images/abouticon1.png" class="col-3" alt="關於圖標" />
                            <div class="card-body">
                                <h3 class="card-title fw-bold text-darkred">友善農產認購</h3>
                                <p class="card-text fs-6 text-green">
                                    與路竹在地小農合作，支持友善種植，確保食材的天然與安全。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 rounded-0 bg-transparent">
                            <img src="assets/images/abouticon4.png" class="col-3" alt="關於圖標" />
                            <div class="card-body">
                                <h3 class="card-title fw-bold text-darkred">創新行銷模式</h3>
                                <p class="card-text fs-6 text-green">
                                    美式餐車經營：將傳統古早味飲品結合創新行銷方式，讓更多人接觸蓮藕的美味與健康。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- bg-transparent 背景透明 -->
                        <div class="card border-0 rounded-0 bg-transparent">
                            <img src="assets/images/abouticon3.png" class="col-3" alt="關於圖標" />
                            <div class="card-body">
                                <h3 class="card-title fw-bold text-darkred">健康飲品推廣</h3>
                                <p class="card-text fs-6 text-green">
                                    傳承30年古法熬煮技術，推廣天然、健康的飲品理念，讓更多人品味古早味的同時，兼顧養生與環保。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 rounded-0 bg-transparent">
                            <img src="assets/images/abouticon2.png" class="col-3" alt="關於圖標" />
                            <div class="card-body">
                                <h3 class="card-title fw-bold text-darkred">無冰添加承諾</h3>
                                <p class="card-text fs-6 text-green">
                                    採用冰鎮技術保留原味，無額外冰塊稀釋，保證飲品的純粹品質。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
@endsection

