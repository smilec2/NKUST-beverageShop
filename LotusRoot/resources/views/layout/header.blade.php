<!-- 主選單 -->

<!-- TODO 修改會員的下拉選單 -->
<!-- TODO新增管理員的上架頁面  -->
<nav
    class="navbar navbar-expand-lg bgc-lotus-a-nav shadow-sm position-sticky top-0 z-3">
    <div class="container">
        <h1 class="mb-0 d-inline-block col-lg-1 p-lg-1 col-md-2">
            <a class="navbar-brand me-0" href="{{route('home')}}" title="回 首頁">
                <img
                    class="d-md-inline-block d-none"
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
                @if (session()->has('user_id'))
                <div>
                    <a
                        class="text-darkred btn"
                        href="{{ route('user.signout') }}"
                        title="點擊"
                        <i class="bi bi-person fs-5"></i>
                        <span class="text-darkred d-md-inline-block d-none">登出</span>
                    </a>
                </div>
                <!-- 購物車 -->
                <div class="cart-btn">
                    <a
                        href="{{ route('cart.index', session()->get('user_id')) }}"
                        title="前往 我的購物車"
                        class="position-relative">
                        <i class="bi bi-cart text-darkred"></i>
                        <span
                            class="text-white small bg-danger rounded-pill p-1 fs-8 mb-2 fw-bold position-absolute"
                            style="left: 10px">+99</span>
                    </a>
                </div>
                @else
                <div>
                    <a
                        class="text-darkred btn"
                        title="點擊"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="bi bi-person fs-5"></i>
                        <span class="text-darkred d-md-inline-block d-none">登入</span>
                    </a>
                </div>
                @endif
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
        <div class="collapse navbar-collapse " id="main-menu">
            <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="/#about" title="前往 關於蓮藕大王">關於蓮藕大王</a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        title="前往 最新消息">最新消息
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="/#activity" title="前往 餐車活動">餐車活動</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/#holiday" title="前往 休假公告">休假公告</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#new-product" title="前往 最新商品">最新商品
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/menu" title="前往 菜單MENU">菜單MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product" title="前往 線上購物">線上購物
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact-us" title="前往 聯絡我們">聯絡我們</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#subscribe" title="前往 訂閱">訂閱</a>
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
                <div class="d-flex me-sm-0 align-items-center justify-content-between w-100">
                    <!-- 會員區塊 -->
                    <div class="d-flex align-items-center">
                        @if (session()->has('user_id'))
                            @if (session('user_type') === 'A') 
                                {{-- 管理員按鈕 (編輯) --}}
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown-admin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person"></i>
                                        管理員
                                    </a>
                                    <ul class="dropdown-menu bgc-lotus-a-nav text-center border-0" aria-labelledby="navbarDropdown-admin">
                                        <li><a class="dropdown-item" href="{{ route('user.editProfile.get') }}">修改個人資料</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.product.create') }}">管理商品</a></li>
                                        <li><a class="dropdown-item" href="{{ route('user.signout') }}" title="登出"><span class="text-darkred d-md-inline-block">登出</span></a></li>
                                    </ul>
                                </li>
                            @else
                                {{-- 一般會員按鈕 (登出) --}}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown-member" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person"></i>
                                        會員管理
                                    </a>
                                    <ul class="dropdown-menu bgc-lotus-a-nav text-center border-0" aria-labelledby="navbarDropdown-member">
                                        <li><a class="dropdown-item" href="{{ route('user.editProfile.get') }}">修改個人資料</a></li>
                                        <li><a class="dropdown-item" href="{{ route('user.signout') }}" title="登出"><span class="text-darkred d-md-inline-block">登出</span></a></li>
                                    </ul>
                                </li>
                                <!-- <a class="text-darkred nav-link dropdown-toggle" href="#" role="button" id="memberDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person"></i>
                                            <span class="text-darkred d-md-inline-block d-none">會員管理</span>
                                    </a>
                                <div>
                                    <a class="text-darkred nav-link" href="{{ route('user.signout') }}" title="登出">
                                        <span class="text-darkred d-md-inline-block d-none">登出</span>
                                    </a>
                                </div>
                                <ul class="dropdown-menu" aria-labelledby="memberDropdown">
                                        <li><a class="dropdown-item" href="{{ route('user.editProfile.get') }}">修改會員資料</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="{{ route('user.signout') }}">登出</a></li>
                                    </ul> -->
                            @endif
                        @else
                                {{-- 登入 --}}
                                <div>
                                    <a class="text-darkred nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" title="登入" style="cursor: pointer;">
                                        <i class="bi bi-person"></i>
                                        <span class="text-darkred d-md-inline-block d-none">登入</span>
                                    </a>
                                </div>
                        @endif
                        <!-- 購物車 -->
                        @if(session()->has('user_id'))
                        <div class="cart-btn d-md-none d-sm-none d-lg-block d-md-block">
                            <a
                                href="{{ route('cart.index', session()->get('user_id')) }}"
                                title="前往 我的購物車"
                                class="position-relative">
                                <i class="bi bi-cart text-darkred"></i>
                                <span
                                    class="text-white small bg-danger rounded-pill p-1 fs-8 fw-bold position-absolute">+99</span>
                            </a>
                        </ㄠ>
                        @endif
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
    <div class="collapse sticky-search" id="search-area">
        <div class="card card-body border-0 bg-transparent">
            <form action="#" method="get">
                <div class="form-floating">
                    <input
                        type="search"
                        class="form-control bgc-lotus border-0"
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