<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="classification" content="hospital" />
	<meta name="distribution" content="Global" />
	<meta name="rating" content="General" />
	<meta name="robots" content="index, follow" />
	<meta name="creator" content="Phòng khám Nam Khang" />
	<meta name="publisher" content="Phòng khám Nam Khang" />
    <meta name="author" content="{{ $setting->web_name }}">
    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- facebook -->
    <meta property="og:site_name" content="Phòng Khám Nam Khang" />
	<meta property="og:type" content="article" />
    <meta property="og:locale " content="vi_VN">
    <!-- link rss,sitemap -->
    
    <!-- link icon -->
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    @yield('title')
    @yield('keyword')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/glyphicon-bootstrap/glyphicon-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
	@yield('js')
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-85212676-10', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body>
	<header>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex flex1col1">
					<div class="flex2col1">
						<div><a href="{{ url('/') }}"><img src="{{ asset('public/images/mobile/logo.png') }}" class="center-block"></a></div>
					</div>
					<div class="flex flex2col2">
						<div class="box-center">
							@if(Request::url()==url('/'))
							<h1 class="text-uppercase">phòng khám chuyên khoa nam khang</h1>
							@else
							<div class="h3 text-uppercase">phòng khám chuyên khoa nam khang</div>
							@endif
							<div class="web-address text-uppercase">số 193C1 bà triệu - hai bà trưng - hà nội</div>
						</div>
					</div>
				</div>
				<div class="flex flex1col2">
					<div class="flex4col1">
						<div class="h4">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<img src="{{ asset('public/images/mobile/icon-0.png') }}" class="center-block img-responsive">
							</a>
						</div>
					</div>
					<div class="flex flex4col2">
						<div class="box-center">
							<div class="h6">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									Bác sĩ đang trực tuyến
								</a>
							</div>
							<div class="h5">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-uppercase">
									Tư vấn ngay
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="banner container">
		<div class="slick-home">
			<div>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<img src="{{ asset('public/images/mobile/slide-1.png') }}" alt="" class="center-block img-responsive">
				</a>
			</div>
		</div>
		<script>
			$('.slick-home').slick({
				autoplay: true,
				autoplaySpeed: 5000,
			});
		</script>
	</div>
	@yield('content')	
	<footer>
		<div class="container">
			<p>Điện thoại tư vấn đặt hẹn: <a href="tel:18006181">1800 6181</a> - <a href="tel:0439.656.999">0439.656.999</a></p>
			<p>Thời gian mở cửa: <a href="tel:18006181">8:00 - 20:00</a></p>
			<p>Địa chỉ phòng khám: <a href="tel:18006181">193C1 BÀ TRIỆU – HAI BÀ TRƯNG – HÀ NỘI</a></p>
		</div>
		@yield('toolbar')	
	</footer>
	<script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
	<div id="my_popup">
	    <p>Bác sỹ đang yêu cầu được chát với bạn</p>
	    <p class="dis-none">Sẽ nhanh hơn khi bạn trò chuyện với bác sĩ tư vấn</p>
	    <a class="my_popup_close btn-cancel">Từ chối</a>
	    <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="btn-agree">Đồng ý</a>
	</div>
</body>
</html>