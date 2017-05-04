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
    <link rel="canonical" href="{{ url('/') }}" />
    <!-- link icon -->
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    @yield('title')
    @yield('keyword')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/toastr8/dist/css/toastr8.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-header2.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/toastr8/dist/js/toastr8.min.js') }}"></script>
	@yield('js')
	<script type="text/javascript" src="{{ asset('public/js/desktop/desktop.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/desktop/right.js') }}"></script>
	<!-- <script type="text/javascript" src="{{ asset('public/js/desktop/swt.js') }}"></script> -->
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
				<div class="flex1col1 flex2 flex justify-content-between">
					<div class="flex2col1 flex align-items-center justify-content-center">
						<div>
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/images/desktop/logo-header.png') }}" alt="">
							</a>
						</div>
					</div>
					<div class="flex2col2 flex align-items-center justify-content-center">
						<div>
							@if(Request::url()==url('/'))
							<h1 class="text-uppercase"><a href="{{ url('ve-chung-toi') }}">Phòng khám chuyên khoa Nam Khang</a></h1>
							@else
							<div class="text-uppercase web-name"><a href="{{ url('ve-chung-toi') }}">Phòng khám chuyên khoa Nam Khang</a></div>
							@endif
							<div class="text-uppercase web-address"><a href="{{ url('dia-chi-phong-kham') }}">Số 193C1 Bà Triệu - Hai Bà Trưng - Hà Nội</a></div>
						</div>
					</div>
				</div>
				<div class="flex1col1 flex justify-content-center align-items-center">
					<div class="thoigian-lamviec">
						<div class="text-left">Thời gian làm việc</div>
						<div class="text-center">8:00 - 20:00</div>
						<div class="text-right">(làm việc cả chủ nhật, ngày lễ)</div>
					</div>
				</div>
				<div class="flex1col1 flex flex3 justify-content-between">
					<div class="flex3col1 flex justify-content-center align-items-center">
						<a href="tel:1800 6181">
							<img src="{{ asset('public/images/desktop/header-4.png') }}" alt="">
						</a>
					</div>
					<div class="flex3col2 flex justify-content-center align-items-center">
						<div>
							<div class="text-uppercase">Đường dây nóng khẩn cấp</div>
							<div class="text-center"><a href="tel:043-9656999">043 - 9656999</a></div>
							<div class="text-center"><a href="tel:1800 - 6181">1800 - 6181</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
    <menu>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 chidanbenh flex align-items-center justify-content-center">
					<div>
						<div class="dm-benh text-uppercase"><a href="#"  class="text-container-center">Danh mục bệnh</a></div>
						<div class="menu-items">
							<div>
								<div class="bg bg1">Bệnh về tuyến tiền liệt</div>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(3) }}">Viêm tuyến tiền liệt</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(4) }}">U nang tuyến tiền liệt</a></div>
									</div>
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(5) }}">Tăng sinh tuyến tiền liệt</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(6) }}">Phì đại tuyến tiền liệt</a></div>
									</div>
								</div>
							</div>
							<div>
								<div class="bg bg2">Rối loạn chức năng sinh dục</div>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(8) }}">Liệt dương</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(35) }}">Yếu sinh lý</a></div>
									</div>
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(10) }}">Xuất tinh sớm</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(9) }}">Rối loạn cương dương</a></div>
									</div>
								</div>
							</div>
							<div>
								<div class="bg bg3">Chỉnh hình cơ quan sinh dục</div>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(13) }}">Dài bao quy đầu</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(14) }}">Kéo dài dương vật</a></div>
									</div>
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(15) }}">Hẹp bao quy đầu</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(16) }}">Tăng kích thước dương vật</a></div>
									</div>
								</div>
							</div>
							<div>
								<div class="bg bg4">Viêm nhiễm hệ thống sinh dục</div>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(18) }}">Viêm quy đầu</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(19) }}">Viêm bàng quang</a></div>
									</div>
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(20) }}">Viêm niệu đạo</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(21) }}">Viêm tinh hoàn</a></div>
									</div>
								</div>
							</div>
							<div>
								<div class="bg bg5">Vô sinh nam</div>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(23) }}">Tinh trùng ít</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(24) }}">Xuất tinh ra máu</a></div>
									</div>
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(25) }}">Không có tinh trùng</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(26) }}">Tinh trùng yếu</a></div>
									</div>
								</div>
							</div>
							<div>
								<div class="bg bg6">Bệnh xã hội</div>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(28) }}">Sùi mào gà</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(29) }}">Giang mai</a></div>
									</div>
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(30) }}">Bệnh lậu</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(31) }}">Mụn rộp sinh dục</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ url('/') }}" class="text-container-center hvr-fade">Trang chủ</a></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div>
						<a href="{{ url('ve-chung-toi') }}" class="text-container-center hvr-fade">Giới thiệu<br>phòng khám</a>
					</div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ MyAPI::getUrlTermID(32) }}" class="text-container-center hvr-fade" >Kỹ thuật<br>điều trị</a></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ MyAPI::getUrlTermID(33) }}" class="text-container-center hvr-fade">Thiết bị<br>tiên tiến</a></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ MyAPI::getUrlTermID(34) }}" class="text-container-center hvr-fade">Bệnh án<br>điển hình</a></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ url('/dia-chi-phong-kham') }}" class="text-container-center hvr-fade">Địa chỉ <br>phòng khám</a></div>
				</div>
			</div>
		</div>
	</menu>
	@yield('content')
	<footer>
		<div class="row1">
			<div class="container">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1">
						<div>
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/images/desktop/logo-header.png') }}" class="center-block">
							</a>
						</div>
						<div class="text-center text-uppercase web-name">
							<a href="{{ url('/') }}">Phòng khám chuyên khoa Nam Khang</a>
						</div>
						<div class="text-center text-uppercase web-slogan">_____PHÒNG KHÁM UY TÍN Ở HÀ NỘI_____</div>
					</div>
					<div class="flex1col2">
						<div class="">
							<h4 class="text-uppercase">Trung tâm uy tín</h4>
						</div>
						<div>
							<h5 class="text-uppercase"><a href="{{ MyAPI::getUrlTermID(32) }}">Kĩ thuật điều trị</a></h5>
						</div>
						<div>
							<h5 class="text-uppercase"><a href="{{ MyAPI::getUrlTermID(33) }}">Thiết bị tiên tiến</a></h5>
						</div>
						<div>
							<h5 class="text-uppercase"><a href="{{ MyAPI::getUrlTermID(34) }}">Bệnh án điển hình</a></h5>
						</div>
						<div>
							<h5 class="text-uppercase"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">TƯ VẤN CHI PHÍ</a></h5>
						</div>
						<div>
							<h5 class="text-uppercase"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">LIÊN HỆ VỚI CHÚNG TÔI</a></h5>
						</div>
						<div>
							<h5 class="text-uppercase"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">ĐẶT HẸN TRỰC TUYẾN</a></h5>
						</div>
					</div>
					<div class="flex1col3">
						<div class="">
							<h4 class="text-uppercase">Liên hệ với chúng tôi</h4>
							<div class="flex2 flex justify-content-between">
								<div class="flex2col1">
									<div class="flex flex3">
										<div class="flex3col1 flex align-items-center justify-content-center">
											<div class="">
												<i class="bg1"></i>
											</div>
										</div>
										<div class="flex3col2 flex align-items-center justify-content-center">
											<div>
												<p class="text-uppercase">ĐIỆN THOẠI TƯ VẤN MIỄN PHÍ</p>
												<p class="call"><a href="tel:18006181">1800-6181</a></p>
											</div>
										</div>
									</div>
								</div>
								<div class="flex2col2">
									<div class="flex flex3">
										<div class="flex3col1 flex align-items-center justify-content-center">
											<div class="">
												<i class="bg2"></i>
											</div>
										</div>
										<div class="flex3col2 flex align-items-center justify-content-center">
											<div>
												<p class="text-uppercase">TƯ VẤN</p>
												<p class="call"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">SKYPE</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="flex4 flex justify-content-between">
								<div class="flex4col1">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center dis-block width-100 justify-content-around active hvr-push">
										<span class="flex align-items-center justify-content-center">
											<i class="bg3"></i>
										</span>
										<span class="flex align-items-center justify-content-center">Hỏi bệnh tình</span>
									</a>
								</div>
								<div class="flex4col1">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center dis-block width-100 justify-content-around hvr-push">
										<span class="flex align-items-center justify-content-center">
											<i class="bg4"></i>
										</span>
										<span class="flex align-items-center justify-content-center">Hỏi bệnh tình</span>
									</a>
								</div>
								<div class="flex4col1">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center dis-block width-100 justify-content-around hvr-push">
										<span class="flex align-items-center justify-content-center">
											<i class="bg5"></i>
										</span>
										<span class="flex align-items-center justify-content-center">Hỏi bệnh tình</span>
									</a>
								</div>
							</div>
							<p class="address"><a href="{{ url('dia-chi-phong-kham') }}">Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row2">
		</div>
	</footer>
	<script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
	<div id="popup-desktop">
		<div class="pos-relative">
			<a class="dis-inline-block pos-absolute popup-desktop_close"></a>
			<a class="dis-inline-block pos-absolute tuvan1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
			<a class="dis-inline-block pos-absolute tuvan2" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"></a>
		</div>
	</div>
</body>
</html>
