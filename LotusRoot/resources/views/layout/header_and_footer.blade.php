<!DOCTYPE html>
<html lang="zh-tw">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>蓮藕大王鼎中店(正哥)</title>
		<!-- icon -->
		<link rel="stylesheet" href="assets/images/Logo.svg" />
		<!-- css -->
		<link rel="stylesheet" href="assets/css/bs-533/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/fonts/icons-1.11.3/font/bootstrap-icons.css" />
		<!-- 頁面動態 -->
		<link rel="stylesheet" href="assets/css/js/WOW-master/css/libs/animate.css" />
		<!-- 進度條 -->
		<link
			rel="stylesheet"
			href="assets/js/LineProgressbar-master/jquery.lineProgressbar.css" />
		<!-- 燈箱 -->
		<link rel="stylesheet" href="assets/js/ui-main/dist/fancybox/fancybox.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/css/media.css" />
	</head>

	<body>
		<!-- 主選單 -->
		<nav
			class="navbar navbar-expand-lg bgc-lotus-a-nav shadow-sm position-sticky top-0 z-3">
			<div class="container">
				<h1 class="mb-0 d-inline-block col-lg-2 p-lg-3 ">
					<a class="navbar-brand me-0 " href="index.html" title="回 首頁">
						<img
							class="d-md-inline-block d-none col-8"
							src="assets/images/Logo.svg"
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
							<a class="nav-link" href="index.html#about" title="前往 關於蓮藕大王"
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
									<a class="dropdown-item" href="#activity" title="前往 餐車活動"
										>餐車活動</a
									>
								</li>
								<li>
									<a class="dropdown-item" href="#holiday" title="前往 休假公告"
										>休假公告</a
									>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.html#new-product" title="前往 最新商品"
								>最新商品
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="menu.html" title="前往 菜單MENU">菜單MENU</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="onlineshop.html" title="前往 線上購物"
								>線上購物
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.html#contact-us" title="前往 聯絡我們"
								>聯絡我們</a
							>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.html#subscribe" title="前往 訂閱"
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
								<div>
									<a
										class="text-darkred nav-link"
										href="javascript:;"
										title="點擊"
										data-bs-toggle="modal"
										data-bs-target="#exampleModal">
										<i class="bi bi-person"></i>
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

		<!-- 輪播圖/行銷圖 -->
		<header>
            @yield("banner")
        </head>
		<!-- 主要內容 -->
		<main>
            @yield("about")
        </main>
		<footer class="py-5 bgc-pearl-a text-darkred">
			<div class="container">
				<!-- 社群、連結、聯絡資訊 -->
				<div class="footer top">
					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
						<!-- 社群 -->
						<div class="col">
							<!-- Logo -->
							<div class="text-lg-center mb-3">
								<a href="index.html" title="首頁">
									<img class="col-4" src="assets/images/Logo.svg" alt="蓮藕大王鼎中店(正哥)" />
								</a>
							</div>
							<!-- 社群 Logo -->
							<ul
								class="list-unstyled d-flex align-items-center justify-content-lg-center social-icon">
								<li class="me-3">
									<a
										class="text-darkred fs-2"
										href="https://www.facebook.com/蓮藕大王鼎中店正哥美式行動餐車-396313804322166"
										target="_blank"
										title="前往蓮藕大王鼎中店(正哥)FB專頁">
										<i class="bi bi-facebook"></i>
										<span class="d-none">FB專頁</span>
									</a>
								</li>
								<li class="me-3">
									<a
										class="text-darkred fs-2"
										href="https://instagram.com/lotus.root0510?igshid=NGVhN2U2NjQ0Yg=="
										target="_blank"
										title="前往蓮藕大王鼎中店(正哥)IG專頁">
										<i class="bi bi-instagram"></i>
										<span class="d-none">IG專頁</span>
									</a>
								</li>
								<li>
									<a
										class="text-darkred fs-2"
										href="https://l.facebook.com/l.php?u=https%3A%2F%2Fline.me%2Fti%2Fg2%2FIqjPMIcnA8UDphSIGMgVQaDSWk-R7ZaFCcwVRQ%3Futm_source%3Dinvitation%26utm_medium%3Dlink_copy%26utm_campaign%3Ddefault%26fbclid%3DIwZXh0bgNhZW0CMTAAAR04-rdSyXzqlOf9kpNCQULl0mcj1Pydhkv6XzmRaqp1gEKi7XEVmyf2T-Q_aem_z9vKRccXcbcLgh9tpwCFkw&h=AT2AxblCI43_3_t4mTnXfV_DXz8amt2xk7-G5aEj0rSlFkSqlX0tDCBwGZzL3ObnR834xCNRMjjuiS3qR0TcS5KqVx2KVTIINFsf1HTPWPKP0D13FgEKBQmgbCPnBnPGjB6p&__tn__=-UK-R&c[0]=AT2lhFbUC0NmzQg1f5_uIsu_nndS5mtFghUHpRHpdnltk-QKhLctT_-ckfAXHkHzJK6oUzmjf0aARi4cWCVoi04KeaHJ39Txi83UQCt6o9hvXngzW2A21RhvZ_rfR7o0nyTyP30eX_w2ueo-ic1bWLtp8lhMyDS5kGoefOeyUNxx_Q8974D8d2abNnjKchoAKT13rRjQVsxyXBsoMfYNkactonQ"
										target="_blank"
										title="前往蓮藕大王鼎中店(正哥)Line社群">
										<i class="bi bi-line"></i> <span class="d-none">Line社群</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- 連結 -->
						<div class="col">
							<h3 class="h5">連結</h3>
							<!-- <h3 class="h5 border-bottom d-inline-block col-8 pb-2">連結</h3> -->
							<hr class="col-8 pb-2 my-1" />
							<ul class="list-unstyled row row-cols-2 g-3">
								<li class="nav-item">
									<a class="nav-link" href="index.html#about" title="前往 關於蓮藕大王">
										關於蓮藕大王
									</a>
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
											<a
												class="dropdown-item"
												href="index.html#activity"
												title="前往 餐車活動">
												餐車活動
											</a>
										</li>
										<li>
											<a
												class="dropdown-item"
												href="index.html#holiday"
												title="前往 休假公告">
												休假公告
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a
										class="nav-link"
										href="index.html#new-product"
										title="前往 最新商品">
										最新商品
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="menu.html" title="前往 菜單MENU">菜單MENU</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="onlineshop.html" title="前往 線上購物">
										線上購物
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="index.html#contact-us" title="前往 聯絡我們">
										聯絡我們
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="index.html#subscribe" title="前往 訂閱"
										>訂閱</a
									>
								</li>
							</ul>
						</div>
						<!-- 聯絡資訊 -->
						<div class="col">
							<h3 class="h5">聯絡資訊</h3>
							<hr class="col-8 pb-2 my-1" />
							<ul class="list-unstyled lh-lg">
								<li>客服專線:<span>07-359-5118/0929-108-125</span></li>
								<li>電子信箱:<span>service@lotusroot.com.tw</span></li>
								<li>
									地址:<span>
										<a
											class="text-darkred"
											href="https://maps.app.goo.gl/cV5yZ5bFfvCNimJx9"
											title="前往Google map[另開新視窗]"
											target="_blank">
											高雄市三民區鼎和街1號
										</a>
									</span>
								</li>
								<li>營業時間:<span>週一至週六 10:00-21:00</span></li>
								<li>店休時間:<span>週日</span></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- 版權申告 -->
				<hr class="mb-0" />
				<div class="py-3 text-center footer-bottom">
					<small>
						&copy; 2025 蓮藕大王鼎中店正哥美式行動餐車<span
							class="px-2 d-lg-inline-block d-none"
							>|</span
						>
						<br class="d-lg-none d-block" />
						此網站為版型設計，無商業用途<span class="px-2 d-lg-inline-block d-none"
							>|</span
						>
						<br class="d-lg-none d-block" />
						文字及圖檔來源於
						<a
							href="#"
							class="text-darkred"
							target="_blank"
							title="前往蓮藕大王鼎中店[另開新視窗]">
							蓮藕大王鼎中店(正哥)版權所有
						</a>
						<br class="d-lg-none d-block" />
						<span class="px-2 d-lg-inline-block d-none">|</span>
						此為本蓮藕大王鼎中店(正哥)版權圖
						<a
							href="service@lotusroot.com.tw"
							class="text-darkred"
							title="信箱:service@lotusroot.com.tw"
							>有問題</a
						>來信告知
					</small>
				</div>
			</div>
		</footer>
		<!-- 登入表單 -->
		<div
			class="modal fade"
			id="exampleModal"
			tabindex="-1"
			aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header border-0">
						<h1 class="modal-title fs-5 text-darkred" id="exampleModalLabel">
							請先登入
						</h1>
						<button
							type="button"
							class="btn-close"
							data-bs-dismiss="modal"
							aria-label="Close"></button>
					</div>
					<div class="text-center justify-content-center">
						<div class="modal-body h3 py-4 text-darkred">會員登入</div>
						<div class="modal-body">
							<form action="#" method="post" class="px-3">
								<div class="mb-3">
									<input
										class="form-control"
										type="text"
										name="account"
										placeholder="請輸入帳號"
										required />
								</div>

								<div class="mb-3">
									<input
										class="form-control"
										type="password"
										name="password"
										placeholder="請輸入密碼"
										required />
								</div>
								<div class="form-check">
									<div class="d-flex justify-content-center">
										<div class="form-check">
											<input
												class="form-check-input is-invalid ms-3"
												type="checkbox"
												value="記住我"
												id="rememberMe"
												aria-describedby="rememberMeFeedback" />
											<label class="form-check-label" for="rememberMe"> 記住我 </label>
										</div>
										<div class="form-check">
											<input
												class="form-check-input is-invalid ms-3"
												type="checkbox"
												value="保持登入"
												id="stayLoggedIn"
												aria-describedby="stayLoggedInFeedback" />
											<label class="form-check-label" for="stayLoggedIn"> 保持登入 </label>
										</div>
										<div class="form-check">
											<input
												class="form-check-input is-invalid ms-3"
												type="checkbox"
												value="忘記密碼"
												id="forgotPassword"
												aria-describedby="forgotPasswordFeedback" />
											<label class="form-check-label" for="forgotPassword">
												忘記密碼
											</label>
										</div>
									</div>
									<div class="mb-4 mt-3">
										<button class="btn btn-primary" type="submit">登入</button>
										<button class="btn btn-primary" type="reset">清除</button>
									</div>
									<div class="mt-4 text-darkred">
										還沒有帳號嗎？
										<a
											id="btn-switch-register"
											href="javascript:;"
											data-bs-toggle="modal"
											data-bs-target="#exampleModalRegister"
											>我要註冊</a
										>
									</div>
								</div>
							</form>
							<div class="position-relative my-4 text-center">
								<hr />
								<span
									class="position-absolute top-50 start-50 translate-middle bg-white px-2 text-darkred">
									使用其他帳號登入
								</span>
							</div>
							<div class="d-flex justify-content-center align-items-center gap-3 py-2">
								<a href="###" data-platform="Google">
									<img class="rounded-circle btn btn-light" src="assets/images/Google.svg" />
								</a>
								<a href="###" data-platform="facebook">
									<img class="rounded-circle btn btn-light" src="assets/images/fb.svg" />
								</a>
								<a href="###" data-platform="Line">
									<img class="rounded-circle btn btn-light" src="assets/images/Line.svg" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 註冊 -->
		<div
			class="modal fade"
			id="exampleModalRegister"
			tabindex="-1"
			aria-labelledby="exampleModalRegisterLabel"
			aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header border-0">
						<h1 class="modal-title fs-5 text-darkred" id="exampleModalRegisterLabel">
							會員註冊
						</h1>
						<button
							type="button"
							class="btn-close"
							data-bs-dismiss="modal"
							aria-label="Close"></button>
					</div>
					<div class="text-center justify-content-center">
						<div class="modal-body h3 py-4 text-darkred">會員註冊</div>
						<div class="modal-body">
							<form action="#" method="post" class="px-3">
								<div class="mb-3">
									<input
										class="form-control"
										type="text"
										name="username"
										placeholder="請輸入使用者名稱"
										required />
								</div>
								<div class="mb-3">
									<input
										class="form-control"
										type="email"
										name="email"
										placeholder="請輸入電子郵件"
										required />
								</div>
								<div class="mb-3">
									<input
										class="form-control"
										type="tel"
										name="mobile_phone"
										placeholder="請輸入行動電話"
										pattern="[0-9]{2}[0-9]{2}[0-9]{3}[0-9]{3}"
										required />
								</div>
								<div class="mb-3">
									<input
										class="form-control"
										type="text"
										name="detailed_address"
										placeholder="請輸入詳細地址"
										required />
								</div>
								<div class="mb-3">
									<input
										class="form-control"
										type="text"
										name="account"
										placeholder="請輸入帳號"
										required />
								</div>
								<div class="mb-3">
									<input
										class="form-control"
										type="password"
										name="password"
										placeholder="請輸入密碼"
										required />
								</div>
								<div class="mb-3">
									<input
										class="form-control"
										type="password"
										name="confirm_password"
										placeholder="請再次輸入密碼"
										required />
								</div>
								<div class="mb-3">
									<button class="btn btn-primary" type="submit">註冊</button>
									<button class="btn btn-secondary" type="reset">清除</button>
								</div>
							</form>
							<div class="mt-4">
								已經有帳號了嗎？
								<a
									id="btn-switch-login"
									href="javascript:;"
									data-bs-toggle="modal"
									data-bs-target="#exampleModal"
									data-bs-dismiss="modal">
									我要登入
								</a>
							</div>
							<div class="position-relative my-4 text-center">
								<hr />
								<span
									class="position-absolute top-50 start-50 translate-middle bg-white px-2">
									使用其他帳號註冊
								</span>
							</div>
							<div class="d-flex justify-content-center align-items-center gap-3 py-2">
								<a href="###" data-platform="Google">
									<img class="rounded-circle btn btn-light" src="assets/images/Google.svg" />
								</a>
								<a href="###" data-platform="facebook">
									<img class="rounded-circle btn btn-light" src="assets/images/fb.svg" />
								</a>
								<a href="###" data-platform="Line">
									<img class="rounded-circle btn btn-light" src="assets/images/Line.svg" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- js -->
		<script src="/assets/js/bs-533/js/bootstrap.bundle.min.js"></script>
		<script src="/assets/js/jquery-3.7.1.js"></script>
		<script src="/assets/js/WOW-master/dist/wow.min.js"></script>
		<script src="/assets/js/LineProgressbar-master/jquery.lineProgressbar.js"></script>
		<script src="/assets/js/ui-main/dist/fancybox/fancybox.umd.js"></script>
		<script>
			new WOW().init();
			// 關於
			$("#about-1").LineProgressbar({
				percentage: 100,
				fillBackgroundColor: "#84b78e",
			});
			$("#about-2").LineProgressbar({
				percentage: 85,
				fillBackgroundColor: "#84b78e",
			});
			$("#about-3").LineProgressbar({
				percentage: 100,
				fillBackgroundColor: "#84b78e",
			});
			$("#about-4").LineProgressbar({
				percentage: 100,
				fillBackgroundColor: "#84b78e",
			});
			$("#about-5").LineProgressbar({
				percentage: 80,
				fillBackgroundColor: "#84b78e",
			});
			// 燈箱
			Fancybox.bind("[data-fancybox]", {});
		</script>
	</body>
</html>

