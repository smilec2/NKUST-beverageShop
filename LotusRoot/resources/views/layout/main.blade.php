<!DOCTYPE html>
<html lang="zh-tw">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
	</body>
</html>

