<!-- 主選單 -->
<nav class="navbar navbar-expand-lg bgc-lotus-a-nav shadow-sm position-sticky top-0 z-3">
    <div class="container">
        <h1 class="mb-0 d-inline-block col-lg-2 p-lg-3 col-md-2">
            <a class="navbar-brand me-0 " href="/" title="回 首頁">
                <img
                    class="d-md-inline-block d-none col-8"
                    src="{{ asset('assets/images/Logo.svg') }}"
                    alt="蓮藕大王鼎中店(正哥)" />
                <span class="d-md-none d-inline-block text-darkred">
                    蓮藕大王鼎中店(正哥)
                </span>
            </a>
        </h1>
        <!-- 平板、手機 -->
        <div class="search-btn d-lg-none d-inline-block ms-auto">
            <button
                class="btn px-1"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#search-area"
                aria-expanded="false"
                aria-controls="search-area">
                <i class="bi bi-search-heart text-darkred"></i>
                <span class="d-none">搜尋按鈕</span>
            </button>
        </div>
        <!-- 平板、手機版的會員及購物車 -->
        <li class="nav-item d-lg-none d-inline-block">
            <div class="d-flex me-sm-0 align-items-center">
                <!-- 會員 -->
                <div>
                    <a
                        class="text-darkred btn"
                        href="javascript:;"
                        title="點擊"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="bi bi-person fs-5"></i>
                        <span class="text-darkred d-md-inline-block d-none">登入</span>
                    </a>
                </div>
                <!-- 購物車 -->
                <div class="cart-btn">
                    <a
                        href="cart-list.html"
                        title="前往 我的購物車"
                        class="position-relative">
                        <i class="bi bi-cart text-darkred"></i>
                        <span
                            class="text-white small bg-danger rounded-pill p-1 fs-8 mb-2 fw-bold position-absolute"
                            style="left: 10px"
                            >+99</span
                        >
                    </a>
                </div>
            </div>
        </li>
        <!-- 漢堡 -->
        <button
            class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#main-menu"
            aria-controls="main-menu"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> 此為選單可以更換成自己的圖 -->
            <i class="bi bi-list"></i>
        </button>
        <!-- 連結 -->
        <div class="collapse navbar-collapse" id="main-menu">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/#about" title="前往 關於蓮藕大王"
                        >關於蓮藕大王</a
                    >
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        title="前往 最新消息"
                        >最新消息
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="/#activity" title="前往 餐車活動"
                                >餐車活動</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="/#holiday" title="前往 休假公告"
                                >休假公告</a
                            >
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#new-product" title="前往 最新商品"
                        >最新商品
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/menu" title="前往 菜單MENU">菜單MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product" title="前往 線上購物"
                        >線上購物
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact-us" title="前往 聯絡我們"
                        >聯絡我們</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#subscribe" title="前往 訂閱"
                        >訂閱</a
                    >
                </li>
                <!-- 電腦版 -->
                <li class="nav-item d-lg-block d-none">
                    <div class="search-btn">
                        <button
                            class="btn"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#search-area"
                            aria-expanded="false"
                            aria-controls="search-area">
                            <i class="bi bi-search-heart text-darkred"></i>
                            <span class="d-none">搜尋按鈕</span>
                        </button>
                    </div>
                </li>
                <!-- 電腦版的會員及購物車 -->
                <li class="nav-item d-lg-block d-none">
                    <div class="d-flex me-sm-0 align-items-center">
                    <!-- 會員 -->
                        {{ csrf_field() }}
                        @if (session()->has('user_id'))
                            <div>
                                <a class="text-darkred nav-link"
                                    href="{{ route('signout') }}"
                                    title="點擊"
                                    >
                                    <i class="bi bi-person"></i>
                                    <span class="text-darkred d-md-inline-block d-none" >登出</span>
                                </a>
                            </div>
                        @else
                            <div>
                                <a class="text-darkred nav-link"
                                    href="javascript:;"
                                    title="點擊"
                                    data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="bi bi-person"></i>
                                    <span class="text-darkred d-md-inline-block d-none">登入</span>
                                </a>
                            </div>
                        @endif
                        <!-- 購物車 -->
                        <div class="cart-btn">
                            <a
                                href="/cart"
                                title="前往 我的購物車"
                                class="position-relative">
                                <i class="bi bi-cart text-darkred"></i>
                                <span
                                    class="text-white small bg-danger rounded-pill p-1 fs-8 fw-bold position-absolute"
                                    >+99</span
                                >
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- <input
                    class="form-control me-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search" /> -->
        </div>
    </div>
</nav>
<!-- 搜尋表單 -->
<div class="container col-xl-10">
    <div class="collapse" id="search-area">
        <div class="card card-body border-0 bg-transparent">
            <form action="#" method="get">
                <div class="form-floating">
                    <input
                        type="search"
                        class="form-control bgc-lotus-a border-0"
                        id="floatingInput"
                        name="search"
                        placeholder="搜尋" />
                    <label for="floatingInput">搜尋</label>
                </div>
                <button type="submit" class="d-none">送出</button>
            </form>
        </div>
    </div>
</div>