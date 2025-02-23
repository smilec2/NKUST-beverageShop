@extends("layout.main")

@section("content")
<article id="product-description-page" class="py-7">

	<div class="container">
		<!-- top回連結 -->
		<div aria-label="breadcrumb" class="mb-4">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">

					<a href="{{route('product.onlineShop')}}" class="text-green"> 線上購物 </a>

				</li>
				<li class="breadcrumb-item">
					<a href="#" class="text-green"> 茶類 </a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
					<a href="#" class="text-lotus"> 手熬薏仁湯 </a>
				</li>
			</ol>
		</div>

		<!-- 內容 -->
		<form id="product_description_form">
			@csrf
			<div class="row flex-column flex-md-row">
				<div class="col-md-7 order-2 order-xl-1">
					<!-- 區塊標題 -->
					<div class="text-start section-title mx-4 my-4">
						<h2>{{$product->product_name}}</h2>
						<div class="text-start">
							<span class="text-green fs-4 product-description-money-text price-tag">
								{{$product->price}}
							</span>
						</div>
						<!-- 產品描述 -->
						<div class="mt-2">
							<span class="text-lotus">{{$product->description}}
						</div>
					</div>
					<!-- 埋入user_id，如果沒有就不能加入購物車 -->
					@if (session()->has('user_id'))
					<input type="hidden" name="user_id" value="{{ session('user_id') }}">
					@else
					<input type="hidden" name="user_id" value = 0>
					@endif
					<input type="hidden" name="product_id" value="{{ $product->id }}">
					<!-- 容量、數量 -->
					<div class="">
						<div class="row row-cols-3 mx-0 g-xl-5 g-3">
							<div class="col">
								<label class="me-3 text-darkred">容量</label>
								<select
									class="form-select border-1 bg-transition text-darkred rounded my-4"
									name="cup_size"
									aria-label="select-list">
									<option value="1">瓶</option>
									<option value="2" selected>大</option>
									<option value="3">中</option>
								</select>
							</div>
							@if ($product->has_sugar === 1)
							<div class="col">
								<label class="me-3 text-darkred">甜度</label>
								<select
									class="form-select border-1 bg-transition text-darkred rounded my-4"
									name="sweetness"
									aria-label="select-list">
									<option value="1">無</option>
									<option value="2">微</option>
									<option value="3">半</option>
									<option value="4" selected>正常</option>
								</select>
							</div>
							@else
							<div class="col">
								<label class="me-3 text-darkred">甜度</label>
								<select
									class="form-select border-1 bg-transition text-darkred rounded my-4"
									name="sweetness"
									aria-label="select-list"
									disabled>
									<option value="0" selected>固定</option>
								</select>
							</div>
							@endif
							<div class="col">
								<label class="me-2 text-darkred">數量</label>
								<div class="d-flex align-items-center">
									<button class="btn p-0 dash-btn" type="button">
										<i class="bi bi-dash-lg text-darkred"></i>
									</button>
									<select
										class="form-select text-center border-1 bg-transition text-darkred rounded my-4"
										name="quantity"
										aria-label="Default select example">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
									<button class="btn p-0 plus-btn" type="button">
										<i class="bi bi-plus-lg text-darkred"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
					<!-- 按鈕 -->
					<!-- 加入購物車 -->
					<div
						class="d-flex flex-column flex-md-row justify-content-md-center mx-4 my-4">
						<button
							class="btn btn-danger btn-lg text-center mx-3 my-2 my-md-0"
							type="submit">加入購物車
						</button>
						<!-- 立即購買 -->
						<a
							class="btn btn-success btn-lg text-center mx-3 my-2 my-md-0"
							href="#"
							role="button">立即購買</a>
					</div>
				</div>
				<!-- 圖片 -->
				<div class="col-md-5 text-center text-xl-start order-1 order-md-2">
					<a
						href="{{ asset('storage/' . $product->image_url) }}"
						title="點擊放大圖"
						data-fancybox="gallery"
						data-caption="手熬薏仁湯">
						<div class="card border-0">
							<img src="{{ asset('storage/' . $product->image_url) }}" class="card-img-top" alt="手熬薏仁湯" />
						</div>
					</a>
				</div>
			</div>
		</form>
	</div>
</article>
<script>
	document.addEventListener("DOMContentLoaded", function () {
        // 取得表單與輸入欄位
        const form = document.querySelector("#product_description_form");
        const userID = form.querySelector("input[name='user_id']");
        const productID = form.querySelector("input[name='product_id']");
		const price = form.querySelector(".price-tag").textContent.trim();;
		const size = form.querySelector("select[name='cup_size']");
		const sweetness = form.querySelector("select[name='sweetness']");
		const quantity = form.querySelector("select[name='quantity']");
        
		form.addEventListener("submit", function (event) {
			event.preventDefault(); // 阻止表單預設提交行為
			const formData = {
				user_id: userID.value,
				product_id: productID.value,
				cup_size: size.value,
				sugar_level: sweetness.value,
				quantity: quantity.value,
				price: price,
			}
			console.log(formData);

			fetch("{{ route('cart.add') }}",{
				method: "POST",
				headers: {
					"Content-Type": "application/json",
					"X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
				},
				body: JSON.stringify(formData)
			})
			.then(response => response.json())
			.then(data => {
				if (data.success) {
					alert("商品已成功加入購物車！");
				} else if (!data.success) {
					alert(data.message);
					console.log(data.message);
				} else {
					alert(data.message);
				}
			})
			.catch(error => {
				console.error("錯誤:", error);
				alert("發生錯誤，請稍後再試！");
			});
		});
	});
</script>

@endsection