@extends('layout.main')

@section('content')
<!-- 主要內容 -->
<article id="success-order-page" class="py-7">
	<div class="container">
		<!-- 區塊標題 -->
		<div class="text-center section-title mb-5">
			<h2>訂單明細</h2>
		</div>
		<!-- 內容 -->
		<div class="col col-xl-10 mx-auto">
			<form action="" method="post" id="success-order-form">
				<table class="table text-center">
					<thead class="text-center">
						<tr>
							<th scope="col" class="col-5">商品資料</th>
							<th scope="col" class="col-1">規格</th>
							<th scope="col" class="col-1">甜度</th>
							<th scope="col" class="col-1">數量</th>
							<th scope="col" class="col-1">小計</th>
							<th scope="col" class="col-1">到貨狀況</th>
						</tr>
					</thead>
					<tbody>
						<!-- 1 -->
						<tr>
							<!-- 品名 -->
							<td
								class="align-middle d-flex flex-column flex-md-row">
								<a
									class="d-flex align-items-center flex-md-row"
									href="#"
									title="前往商品詳細說明頁">
									<!-- 商品圖 -->
									<div
										class="col-md-3 col-4 me-md-2 mb-2 mb-md-0">
										<img
											src="{{ asset('assets/images/drink1.jpg') }}"
											alt="手熬薏仁湯圖"
											class="img-fluid rounded" />
									</div>
									<!-- 商品名稱 -->
									<h3
										class="fs-6 text-darkred text-start lh-base m-0 text-center text-md-start">
										手熬薏仁湯
									</h3>
								</a>
							</td>
							<!-- 規格 -->
							<td class="align-middle text-center text-md-center">
								<span class="text-darkred success-spec">大</span>
							</td>
							<!-- 甜度 -->
							<td class="align-middle text-center text-md-center">
								<span class="text-darkred success-swe">固定</span>
							</td>
							<!-- 數量 -->
							<td class="align-middle text-center text-md-center">
								<span class="text-darkred success-num">1</span>
							</td>
							<!-- 小計 -->
							<td class="align-middle text-center">
								<span
									class="text-darkred success-money-text"
									value="55">55</span>
							</td>
							<!-- 到貨狀況 -->
							<td class="align-middle text-center">
								<span class="badge bg-success">已出貨</span>
							</td>
						</tr>
						<!-- 2 -->
						<tr>
							<!-- 品名 -->
							<td
								class="align-middle d-flex flex-column flex-md-row">
								<a
									class="d-flex align-items-center flex-md-row"
									href="#"
									title="前往商品詳細說明頁">
									<!-- 商品圖 -->
									<div
										class="col-md-3 col-4 me-md-2 mb-2 mb-md-0">
										<img
											src="{{ asset('assets/images/drink1.jpg') }}"
											alt="手熬薏仁湯圖"
											class="img-fluid rounded" />
									</div>
									<!-- 商品名稱 -->
									<h3
										class="fs-6 text-darkred text-start lh-base m-0 text-center text-md-start">
										手熬薏仁湯
									</h3>
								</a>
							</td>
							<!-- 規格 -->
							<td class="align-middle text-center text-md-center">
								<span class="text-darkred success-spec">大</span>
							</td>
							<!-- 甜度 -->
							<td class="align-middle text-center text-md-center">
								<span class="text-darkred success-swe">固定</span>
							</td>
							<!-- 數量 -->
							<td class="align-middle text-center text-md-center">
								<span class="text-darkred success-num">1</span>
							</td>
							<!-- 小計 -->
							<td class="align-middle text-center">
								<span
									class="text-darkred success-money-text"
									value="55">55</span>
							</td>
							<!-- 到貨狀況 -->
							<td class="align-middle text-center">
								<span class="badge bg-success">已出貨</span>
							</td>
						</tr>
						<!-- 3 -->
						<tr>
							<!-- 品名 -->
							<td
								class="align-middle d-flex flex-column flex-md-row">
								<a
									class="d-flex align-items-center flex-md-row"
									href="#"
									title="前往商品詳細說明頁">
									<!-- 商品圖 -->
									<div
										class="col-md-3 col-4 me-md-2 mb-2 mb-md-0">
										<img
											src="{{ asset('assets/images/drink1.jpg') }}"
											alt="手熬薏仁湯圖"
											class="img-fluid rounded" />
									</div>
									<!-- 商品名稱 -->
									<h3
										class="fs-6 text-darkred text-start lh-base m-0 text-center text-md-start">
										手熬薏仁湯
									</h3>
								</a>
							</td>
							<!-- 規格 -->
							<td class="align-middle text-center text-md-center">
								<span class="text-darkred success-spec">大</span>
							</td>
							<!-- 甜度 -->
							<td class="align-middle text-center text-md-center">
								<span class="text-darkred success-swe">固定</span>
							</td>
							<!-- 數量 -->
							<td class="align-middle text-center text-md-center">
								<span class="text-darkred success-num">1</span>
							</td>
							<!-- 小計 -->
							<td class="align-middle text-center">
								<span
									class="text-darkred success-money-text"
									value="55">55</span>
							</td>
							<!-- 到貨狀況 -->
							<td class="align-middle text-center">
								<span class="badge bg-danger">尚未出貨</span>
							</td>
						</tr>
					</tbody>
				</table>
				<!-- 訂單金額-->
				<div
					class="d-flex align-items-center justify-content-end bgc-lotus-a p-md-3 p-3">
					<div>
						<span class="text-darkred">購物車金額</span>
						<span class="text-darkred fs-4">115</span>
						<span class="text-darkred">+</span>
						<span class="text-darkred">運費</span>
						<span class="text-darkred fs-4">120</span>
						<span class="text-darkred">=</span>
						<span class="text-darkred me-3">總金額</span>
						<span class="text-darkred fs-4 card-money-text">235</span>
					</div>
				</div>
			</form>

			<!-- 訂單資訊 -->
			<div class="order-info my-5 border p-3 rounded">
				<div class="container">
					<div class="col col-xl-12 mx-auto">
						<table class="table text-start table-borderless">
							<thead>
								<tr>
									<th
										scope="col"
										class="fs-3 col-12 col-md-3 text-darkred">
										訂單資訊
									</th>
									<th
										scope="col"
										class="fs-3 col-12 col-md-4 text-darkred d-none d-md-table-cell">
										訂購人
									</th>
								</tr>
							</thead>
							<tbody>
								<tr
									class="align-middle text-center text-md-start">
									<td class="fw-bold">
										訂單編號：<span>2025092400029</span>
									</td>
									<td class="fw-bold">
										姓名： <span>林小銘</span>
									</td>
								</tr>
								<tr
									class="align-middle text-center text-md-start">
									<td class="fw-bold">
										訂購時間：<span>2025/09/24 22：00：17</span>
									</td>
									<td class="fw-bold">
										手機：<span>09</span>
									</td>
								</tr>
								<tr
									class="align-middle text-center text-md-start">
									<td class="fw-bold">
										訂單狀態：<span>訂單成立</span>
									</td>
									<td class="fw-bold">
										信箱：<span>@gmail.com</span>
									</td>
								</tr>
								<tr
									class="align-middle text-center text-md-start">
									<td class="fw-bold">
										付款方式：<span>LINE Pay</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr />
					<!-- 收件資訊 -->
					<div class="recipient-info my-5">
						<div class="col col-xl-12 mx-auto">
							<table class="table text-start table-borderless">
								<thead>
									<tr>
										<th
											scope="col"
											class="fs-3 col-12 col-md-3 text-darkred">
											收件方式
										</th>
									</tr>
								</thead>
								<tbody>
									<tr
										class="align-middle text-center text-md-start">
										<td class="fw-bold">
											收件方式：<span>宅配</span>
										</td>
									</tr>
									<tr
										class="align-middle text-center text-md-start">
										<td class="fw-bold">
											郵遞區號：<span>000</span>
										</td>
									</tr>
									<tr
										class="align-middle text-center text-md-start">
										<td class="fw-bold">
											地址：<span>高雄市三民區xxxxx</span>
										</td>
									</tr>
									<tr
										class="align-middle text-center text-md-start">
										<td class="fw-bold">
											收件人：<span>林小銘</span>
										</td>
									</tr>
									<tr
										class="align-middle text-center text-md-start">
										<td class="fw-bold">
											聯絡電話：<span>09</span>
										</td>
									</tr>
									<tr
										class="align-middle text-center text-md-start">
										<td class="fw-bold">
											配送狀態：<span>
												2025-09-27 新竹物流 000008196
												<a href="#">查詢</a>
											</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>
@endsection