<!DOCTYPE html>
<html lang="zh-tw">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>蓮藕大王鼎中店(正哥)</title>
		<!-- icon -->
		<link rel="stylesheet" href="{{ asset('assets/images/Logo.svg') }}" />
		<!-- css -->
		<link rel="stylesheet" href="{{ asset('assets/css/bs-533/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/fonts/icons-1.11.3/font/bootstrap-icons.css')}}" />
		<!-- 頁面動態 -->
		<link rel="stylesheet" href="{{ asset('assets/css/js/WOW-master/css/libs/animate.css')}}" />
		<!-- 進度條 -->
		<link
			rel="stylesheet"
			href="assets/js/LineProgressbar-master/jquery.lineProgressbar.css" />
		<!-- 燈箱 -->
		<link rel="stylesheet" href="{{ asset('assets/js/ui-main/dist/fancybox/fancybox.css')}}" />
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/media.css') }}" />
	</head>
	<body>
        @include("layout.header")
		<!-- 主要內容 -->
		<main>
            @yield("content")
        </main>
        @include("layout.login_modal")
        @include("layout.logic_modal")
        @include("layout.footer")
		<!-- js -->
		<script src="{{ asset('/assets/css/bs-533/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('/assets/js/jquery-3.7.1.js') }}"></script>
		<script src="{{ asset('/assets/js/WOW-master/dist/wow.min.js') }}"></script>
		<script src="{{ asset('/assets/js/LineProgressbar-master/jquery.lineProgressbar.js') }}"></script>
		<script src="{{ asset('/assets/js/ui-main/dist/fancybox/fancybox.umd.js') }}"></script>
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
		<!-- 分類、過濾 -->
		<script src="{{ asset('/assets/js/filterizr-master/dist/jquery.filterizr.min.js') }}"></script>
		<script>
			$(".filter-area").filterizr();
			$(".filter-btn li").click(function () {
				$(this).addClass("active").siblings().removeClass("active");
			});
		</script>
		<!-- 編輯商品Modal -->
		<script>
			document.querySelectorAll(".edit-btn").forEach(button => {
				button.addEventListener("click", function() {
					//取得商品資料 
					const productItem = this.closest(".edit_product_item");
					const productId =  productItem.dataset.id;
					const productProductName =  productItem.dataset.product_name;
					const productDescription =  productItem.dataset.description;
					const productPrice =  productItem.dataset.price;
					const productImageurl =  productItem.dataset.image_url;
					const productCategoryId =  productItem.dataset.category_id;
					const productHasSugar =  productItem.dataset.has_sugar;

					//填入商品資料到 Modal
					document.getElementById("edit_product_name").value = productProductName;
					document.getElementById("edit_description").value = productDescription;
					document.getElementById("edit_price").value = productPrice;
					document.getElementById("product_image_preview").src = productImageurl;
					document.getElementById("edit_category").value = productCategoryId;
					document.getElementById("edit_has_sugar").value = productHasSugar;
				})
			})
		</script>
		<!-- 購物車按鈕-->
		<script>
		$(document).ready(function() {
			//購物車按鈕
			$( "button > i.bi-cart-plus" ).on( "click", function() {
				$(this).toggleClass("bi-cart-plus bi-cart-plus-fill");
			} );
			$("#products li>i").on("click", function() {
				$(this).toggleClass("active");
			})
		});
		</script>
		<!--加入購物車-->
		<script>
			document.addEventListener("DOMContentLoaded", function () {
			const addToCartButtons = document.querySelectorAll(".add-to-cart");
			addToCartButtons.forEach(button => {
				button.addEventListener("click", function () {
					// 取得選項-從瀏覽頁加入的購物車
					const productItem = this.closest(".product-info");
					const userId = productItem.dataset.user_id;
					const productId = productItem.dataset.product_id; 
					const quantity = productItem.dataset.quantity;
					const sugar = productItem.dataset.sugar; 
					const size = productItem.dataset.size; 
					const price = productItem.dataset.price;  
					// 構建表單資料-從瀏覽頁加入的購物車
					const formDataDefault = {
						product_id: productId,
						user_id: userId,
						quantity: quantity,
						sugar_level: sugar,
						cup_size: size,
						price: price
					};

					// console.log(formData);

					// 發送請求到後端
					fetch("{{route('cart.add')}}", {
						method: "POST",
						headers: {
							"Content-Type": "application/json",
							"X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content, // 確保發送 CSRF token
						},
						body: JSON.stringify(formDataDefault)
					})
					.then(response => response.json())
					.then(data => {
						if (data.success) {
							alert("商品已成功加入購物車！");
						} else if (data.success === false) {
							alert(data.message);
						} else {
							alert(data.message);
						}
					})
					.catch(error => {
						console.error("錯誤:", error);
						alert("發生錯誤，請稍後再試！");
					});
					// fetch('/cart/add')
					// .then(response => response.text()) // 先用 text() 看看回傳什麼
					// .then(data => {
					// 	console.log(data); // 檢查回傳內容
					// 	try {
					// 	const jsonData = JSON.parse(data); // 如果確定是 JSON 再解析
					// 	console.log(jsonData);
					// 	} catch (error) {
					// 	console.error('解析 JSON 失敗:', error);
					// 	}
					// })
					// .catch(error => console.error('請求錯誤:', error));
					});
				});
			});
		</script>
		<!-- Navbar 顏色變化 -->
		<script>
			var menuUrl = "{{ route('menu') }}";  // 把路由 URL 存儲到變數中
			console.log(menuUrl);
		</script>
		<script>
			$(document).ready(function() {
				// 偵測滾動
				$(window).scroll(function() {
					var scrollPosition = $(document).scrollTop(); // 當前頁面的滾動位置
					var navbarHeight = $(".navbar").outerHeight(); // 獲取navbar的高度（可根據實際情況調整）

					// 遍歷每個section，根據滾動位置改變navbar顏色
					$("article").each(function() {
						var sectionOffset = $(this).offset().top; // 取得每個section的頂部位置
						var sectionHeight = $(this).outerHeight(); // 取得每個section的高度
						var sectionId = $(this).attr("id"); // 取得section的id，對應navbar的錨點

						if (scrollPosition + navbarHeight >= sectionOffset && scrollPosition + navbarHeight < sectionOffset + sectionHeight) { // 滾動位置進入該區域
							$('a[href="/#' + sectionId + '"]').addClass('active'); // 給navbar項目加上active類
						} else {
							$('a[href="/#' + sectionId + '"]').removeClass('active'); // 移除active類
						}
						// 檢查滾動位置是否進入該區域
						if (scrollPosition + navbarHeight >= sectionOffset && scrollPosition + navbarHeight < sectionOffset + sectionHeight) {
                		// 給對應的navbar項目加上active類
							$('a[href="' + menuUrl + ' "]').addClass('active'); 
						} else {
							// 移除active類
							$('a[href="' + menuUrl + '"]').removeClass('active'); 
						}
					});
				});
			});
		</script>
		<!-- google登入 -->
		@if(session('success_message'))
		<script>
			alert("{{ session('success_message') }}")
		</script>
		@endif
	</body>
</html>

