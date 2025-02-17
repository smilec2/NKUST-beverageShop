@extends('layout.main')

@section("content")
<!-- 輪播圖/行銷圖 -->
<header>
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

			</div>
			<div class="carousel-item">
				<img src="assets/images/back2.jpg" class="d-block w-100" alt="back2" />
			</div>
			<div class="carousel-item">
				<img src="assets/images/back3.jpg" class="d-block w-100" alt="back3" />
			</div>
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
</header>
<!-- 主要內容 -->
<main>
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
	<!-- 最新消息 -->
	<article id="activity" class="py-7 bgc-pearl-a">
		<div class="container">
			<!-- 區塊標題 -->
			<div class="text-center section-title mb-5">
				<h2>最新消息</h2>
				<p>餐車活動</p>
			</div>
			<!-- 內容 -->
			<div class="d-flex align-items-center flex-lg-row flex-column">
				<div class="col-xl-12">
					<div class="row row-cols-2 row-cols-gl-2 g-4">
						<div class="col wow bounceInLeft" data-wow-delay="0.5s">
							<div class="card mb-2 border-0 rounded-0 bg-transparent">
								<div class="row g-0 align-items-center">
									<div class="col-md-5">
										<img
											src="assets/images/activity1.jpg"
											class="img-fluid"
											alt="餐車活動圖" />
									</div>
									<div class="col-md-7">
										<div class="card-body">
											<h3 class="card-title h4 fw-bold text-darkred">
												冬日遊樂園Woo!吉蛇市<br />蓮藕大王
											</h3>
											<p class="card-text text-green h5 lh-md">
												01/25~26(六/日)<br />14:00~21:00<br />雄店×高雄流行音樂中心|市集二日<br />
												高雄流行音樂中心<br />鯨魚堤岸/海豚步道
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col wow bounceInLeft" data-wow-delay="0.5s">
							<div class="card mb-3 border-0 bg-transparent rounded-0">
								<div class="row g-0 align-items-center">
									<div class="col-md-5">
										<img
											src="assets/images/activity2.jpg"
											class="img-fluid"
											alt="餐車活動圖" />
									</div>
									<div class="col-md-7">
										<div class="card-body">
											<h3 class="card-title h4 fw-bold text-darkred">
												水韻春暉 有里尚水<br />蓮藕大王
											</h3>
											<p class="card-text text-green h5 lh-md">
												01/19(日)
												<br />10:00~17:00<br />新春嘉年華暨珍愛水資料宣傳活動<br />瀰力親水運動公園<br />905屏東縣里港鄉瀰力路6號
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col wow bounceInRight" data-wow-delay="0.5s">
							<div class="card mb-3 border-0 bg-transparent rounded-0">
								<div class="row g-0 align-items-center">
									<div class="col-md-5">
										<img
											src="assets/images/activity3.jpg"
											class="img-fluid"
											alt="餐車活動圖" />
									</div>
									<div class="col-md-7">
										<div class="card-body">
											<h3 class="card-title h4 fw-bold text-darkred">
												玉竹屋台街市集<br />蓮藕大王
											</h3>
											<p class="card-text text-green h5 lh-md">
												01/11~12(六/日)
												<br />14:00~21:00<br />雄店x大統百貨五福店|市集二日<br />新堀江<br />高雄市新興區五福二路262號
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col wow bounceInRight" data-wow-delay="0.5s">
							<div class="card mb-3 border-0 bg-transparent rounded-0">
								<div class="row g-0 align-items-center">
									<div class="col-md-5">
										<img
											src="assets/images/activity4.jpg"
											class="img-fluid"
											alt="餐車活動圖" />
									</div>
									<div class="col-md-7">
										<div class="card-body">
											<h3 class="card-title h4 fw-bold text-darkred">
												蛇來蛇去大吉市集<br />蓮藕大王
											</h3>
											<p class="card-text text-green h5 lh-md">
												01/04(六)
												<br />14:00~17:00<br />華友聯NEXT21建案包車活動<br />NEXT21接待會館前<br />高雄市左營區啟文路7號
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
	<!-- 休假公告 -->
	<article id="holiday" class="py-7 bgc-lotus-a">
		<div class="container">
			<!-- 區塊標題 -->
			<div class="text-center section-title mb-5">
				<h2>最新消息</h2>
				<p>休假公告</p>
			</div>
			<!-- 內容 -->
			<div class="row row-cols-1 row-cols-md-2 row-clos-xl-3 g-4 row-cols-lg-3">
				<div class="col">
					<div class="card h-100 bg-transparent border-3">
						<!-- <div class="overflow-hidden img-box"> -->
						<div class="overflow-hidden col-8 mx-auto">
							<img
								src="assets/images/holidays.png"
								class="card-img-top object-fit-cover"
								alt="2025年休假公告"
								title="2025年休假公告" />
						</div>
						<div class="card-body">
							<h3 class="card-title h5 text-darkred">
								2025年休假公告
								<a
									class="text-darkred"
									href="https://www.facebook.com/100057580893808/videos/387185077786745"
									title="前往2025年休假公告頁[另開新視窗]"
									target="_blank">
									<i class="bi bi-box-arrow-up-right text-darkred"></i>
								</a>
							</h3>
							<ul class="list-unstyled d-flex align-items-center small">
								<!-- 日期 -->
								<li class="me-3 text-darkred">
									<i class="bi bi-calendar-date text-darkred"></i>
									<span class="ms-1">2025/1/24</span>
								</li>
								<li class="px-2">|</li>
								<!-- 官網 -->
								<li>
									<a
										href="https://www.facebook.com/蓮藕大王鼎中店正哥美式行動餐車-396313804322166"
										title="前往蓮藕大王(正哥)[另開新視窗]"
										class="text-darkred">
										<i class="bi bi-house-door-fill"></i>
										<span class="ms-1">蓮藕大王鼎中店(正哥)</span>
									</a>
								</li>
							</ul>
							<div class="card-text text-green">
								<p>2025年過年公告，請詳情查看連結。</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 bg-transparent border-3">
						<!-- <div class="overflow-hidden img-box"> -->
						<div class="overflow-hidden col-8 mx-auto">
							<img
								src="assets/images/typhoon.png"
								class="card-img-top object-fit-cover"
								alt="2024年10月1日颱風休假公告"
								title="2024年10月1日颱風休假公告" />
						</div>
						<div class="card-body">
							<h3 class="card-title h5 text-darkred">
								2024年颱風休假公告
								<a
									class="text-darkred"
									href="https://www.facebook.com/share/p/14sK2Vb7w3/"
									title="前往2024年10月1日颱風休假公告頁[另開新視窗]"
									target="_blank">
									<i class="bi bi-box-arrow-up-right text-darkred"></i>
								</a>
							</h3>
							<ul class="list-unstyled d-flex align-items-center small">
								<!-- 日期 -->
								<li class="me-3 text-darkred">
									<i class="bi bi-calendar-date text-darkred"></i>
									<span class="ms-1">2024/9/30</span>
								</li>
								<li class="px-2">|</li>
								<!-- 官網 -->
								<li>
									<a
										href="https://www.facebook.com/蓮藕大王鼎中店正哥美式行動餐車-396313804322166"
										title="前往蓮藕大王(正哥)[另開新視窗]"
										class="text-darkred">
										<i class="bi bi-house-door-fill"></i>
										<span class="ms-1">蓮藕大王鼎中店(正哥)</span>
									</a>
								</li>
							</ul>
							<div class="card-text text-green">
								<p>2024年10月1日颱風休假公告，請詳情查看連結。</p>
								<!-- 也可以使用ol包li或ul包li就會是有項目或是數字 -->
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 bg-transparent border-3">
						<!-- <div class="overflow-hidden img-box"> -->
						<div class="overflow-hidden col-8 mx-auto">
							<!-- 加div overflow-hidden如果圖有超出去就藏起來以及在img class裡面加object-fit-cover圖片高度相同 -->
							<img
								src="assets/images/holidays.png"
								class="card-img-top object-fit-cover"
								alt="2023年休假公告"
								title="2023年休假公告" />
						</div>
						<div class="card-body">
							<h3 class="card-title h5 text-darkred">
								2023年休假公告
								<a
									class="text-darkred"
									href="https://www.facebook.com/share/p/19zRkxfqid/"
									title="前往2023年休假公告頁[另開新視窗]"
									target="_blank">
									<i class="bi bi-box-arrow-up-right text-darkred"></i>
								</a>
							</h3>
							<ul class="list-unstyled d-flex align-items-center small">
								<!-- 日期 -->
								<li class="me-3 text-darkred">
									<i class="bi bi-calendar-date text-darkred"></i>
									<span class="ms-1">2023/1/10</span>
								</li>
								<li class="px-2">|</li>
								<!-- 官網 -->
								<li>
									<a
										href="https://www.facebook.com/蓮藕大王鼎中店正哥美式行動餐車-396313804322166"
										title="前往蓮藕大王(正哥)[另開新視窗]"
										class="text-darkred">
										<i class="bi bi-house-door-fill"></i>
										<span class="ms-1">蓮藕大王鼎中店(正哥)</span>
									</a>
								</li>
							</ul>
							<div class="card-text text-green">
								<p>2023年過年公告，請詳情查看連結。</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
	<!-- 最新商品 -->
	<article id="new-product" class="py-7 bgc-pearl-a">
		<div class="container">
			<!-- 區塊標題 -->
			<div class="text-center section-title mb-5">
				<h2>最新商品</h2>
				<p>我們用心堅持每一個細節，致力於將健康與美味傳遞</p>
			</div>
			<!-- 商品列 -->
			<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4 g-4">
				<div class="col">
					<div class="card h-100">
						<div class="position-relative overflow-hidden">
							<img src="{{ asset('storage/' . $products->image_url) }}" class="card-img-top" alt="手熬薏仁湯" />
							<span
								class="position-absolute top-0 end-0 bg-warning px-3 mt-2 me-2 rounded-pill text-uppercase"
								>sale</span
							>
							<!-- 英文大寫text-uppercase -->
							<!-- 收藏、加入購物車、連結詳情頁 -->
							<ul
								class="list-unstyled d-flex align-items-center justify-content-between position-absolute start-0 end-0 mt-3 ms-3 me-3 bg-secondary bg-opacity-75 rounded-start-pill rounded-end-pill">
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
								<li
									class="border-start border-end border-dark py-1 col-6 text-center">
									<a
										href="javascript:;"
										title="點擊加入購物車"
										class="text-green fs-5">
										<i class="bi bi-cart-plus"></i>
										<span class="d-none">加入購物車</span>
									</a>
								</li>
								<li class="col text-center">
									<a href="#" title="點擊前往商品說明頁" class="text-green fs-5 pt-1">
										<i class="bi bi-info-circle-fill"></i>
										<span class="d-none">商品說明頁</span>
									</a>
								</li>
							</ul>
							<!-- rounded-pill圓角 -->
						</div>
						<div class="card-body text-darkred text-center">
							<h3 class="card-title h5">{{$products->product_name}}</h3>
							<div class="card-text fst-italic">
								<span class="sale fs-4 p-2 text-green">{{$products->price}}</span>
								<!-- <del>55</del> del標籤刪除線 -->
								<!-- <span class="text-decoration-line-through p-2">55</span> -->
								<!-- text-decoration-line-through 刪除線 -->
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- 連結 -->
			<div class="mt-3 text-center">
				<a
					href="onlineshop.html"
					class="tn btn-lotus text-darkred rounded-pill px-3"
					title="前往最新商品列">
					<span class="fw-bold">更多</span>
					<i class="bi bi-arrow-right"></i>
				</a>
			</div>
		</div>
	</article>
	<!-- 訂閱電子報 -->
	<article
		id="subscribe"
		class="py-5 bg-img"
		style="background-image: url(assets//images/back1.jpg)">
		<div class="container bgc-pearl-aa py-5 position-relative">
			<!-- <div class="row row-cols-1 row-cols-xl-2 g-3 justify-content-between"> -->
			<div
				class="d-flex align-items-center justify-content-between flex-md-row flex-column">
				<!-- 區塊標題 -->
				<div class="col-xl-3 col-md-5 mb-md-0 mb-4">
					<div class="text-center section-title">
						<h2>訂閱電子報</h2>
						<p>訂閱蓮藕大王最新通知</p>
					</div>
				</div>
				<!-- 訂閱表單 -->
				<div class="col-md-7 pe-md-4">
					<form action="#" method="post">
						<div class="input-group mb-3">
							<label for="subscribe" class="position-absolute z-100"
								>請輸入您的電子信箱</label
							>
							<input
								type="email"
								class="form-control rounded-start-pill"
								placeholder="請輸入您的電子信箱"
								aria-label="請輸入您的電子信箱"
								aria-describedby="basic-addon2"
								id="subscribe" />
							<!-- <span class="input-group-text" id="basic-addon2">@example.com</span> -->
							<button type="submit" class="btn btn-lotus-a rounded-end-pill">
								訂閱
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="position-absolute start-0">
				<div class="logo-s col-2">
					<img src="assets/images/Logo.svg" alt="蓮藕大王鼎中店(正哥)Logo" />
				</div>
			</div>
		</div>
	</article>
	<!-- 聯絡 -->
	<article id="contact-us" class="py-7 bgc-lotus-a">
		<div class="container">
			<div class="d-flex align-items-center flex-lg-row flex-column">
				<!-- 聯絡表單 -->
				<div class="col-lg-5 col-12 mb-lg-0 mb-4">
					<!-- 區塊標題 -->
					<div class="text-center section-title mb-5">
						<h2>聯絡我們</h2>
						<p>有問題歡迎來信詢問</p>
					</div>
					<form action="#">
						<div class="row g-3">
							<!-- 姓名 -->
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input
										type="text"
										class="form-control border-0 border-bottom border-green border-5 rounded-5"
										id="for-name"
										placeholder="真實姓名"
										required />
									<label for="for-name" class="text-darkred">姓名</label>
								</div>
							</div>
							<!-- 行動電話 -->
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input
										type="tel"
										class="form-control border-0 border-bottom border-green border-5 rounded-5"
										id="for-tel"
										placeholder="行動電話"
										pattern="[0-9]{2}-[0-9]{2}-[0-9]{3}-[0-9]{3}"
										required />
									<label for="for-tel" class="text-darkred">行動電話</label>
								</div>
							</div>
							<!-- 信箱 -->
							<div class="col-md-12">
								<div class="form-floating mb-3">
									<input
										type="email"
										class="form-control border-0 border-bottom border-green border-5 rounded-5"
										id="for-email"
										placeholder="常用信箱" />
									<label for="for-email" class="text-darkred">信箱</label>
								</div>
							</div>
							<!-- 留言 -->
							<div class="col-12">
								<div class="form-floating">
									<textarea
										class="form-control border-0 border-bottom border-green border-5 rounded-5"
										placeholder="請留言"
										required
										id="for-message"></textarea>
									<label for="for-message" class="text-darkred">留言</label>
								</div>
							</div>
							<!-- 按鈕 -->
							<div class="col-12 mt-3">
								<button class="btn btn-green-a text-darkred px-4" type="submit">
									送出
								</button>
								<button class="btn btn-green-a text-darkred px-4" type="reset">
									重填
								</button>
							</div>
						</div>
					</form>
				</div>
				<!-- 地圖 -->
				<div class="map col-lg-7 col-12 ps-lg-5">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.6597504202896!2d120.31663997475982!3d22.666471229524326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e0580018a4dcb%3A0x9ef10c203f167d81!2z6JOu6JeV5aSn546L6byO5Lit5bqX77yI5q2j5ZOl77yJL-e-juW8j-ihjOWLlemkkOi7ig!5e0!3m2!1szh-TW!2stw!4v1738554522912!5m2!1szh-TW!2stw"
						width="600"
						height="450"
						style="border: 0"
						allowfullscreen=""
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</article>
</main>
@endsection

