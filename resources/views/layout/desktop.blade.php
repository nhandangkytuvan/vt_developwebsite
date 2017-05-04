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
    <meta property="fb:app_id" content="217371985432377">
    <meta property="fb:admins" content="https://www.facebook.com/truong321989">
    <!-- link rss,sitemap -->
    <!-- link icon -->
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    @yield('title')
    @yield('keyword')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/toastr8/dist/css/toastr8.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.min.js') }}"></script>
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
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=217371985432377";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
    <header>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex2 flex justify-content-between">
					<div class="flex2col1 flex align-items-center justify-content-center">
						<div>
							<a href="{{ url('/') }}" title="Phòng khám chuyên khoa Nam Khang">
								<img src="{{ asset('public/images/desktop/logo-header.png') }}" alt="logo">
							</a>
						</div>
					</div>
					<div class="flex2col2 flex align-items-center justify-content-center">
						<div>
							@if(Request::url()==url('/'))
							<h1 class="text-uppercase"><a href="{{ url('ve-chung-toi') }}" title="{{ $setting->web_name }}">Phòng khám chuyên khoa Nam Khang</a></h1>
							@else
							<div class="text-uppercase web-name"><a href="{{ url('ve-chung-toi') }}" title="{{ $setting->web_name }}">Phòng khám chuyên khoa Nam Khang</a></div>
							@endif
							<div class="text-uppercase web-address"><a href="{{ url('dia-chi-phong-kham') }}" title="Số 193C1 Bà Triệu - Hai Bà Trưng - Hà Nội">Số 193C1 Bà Triệu - Hai Bà Trưng - Hà Nội</a></div>
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
						<a href="tel:1800 6181" title="1800 6181">
							<img src="{{ asset('public/images/desktop/header-4.png') }}" alt="1800 6181">
						</a>
					</div>
					<div class="flex3col2 flex justify-content-center align-items-center">
						<div>
							<div class="text-uppercase">Đường dây nóng khẩn cấp</div>
							<div class="text-center"><a href="tel:043-9656999" title="043-9656999">043 - 9656999</a></div>
							<div class="text-center"><a href="tel:1800 - 6181" title="1800 - 6181">1800 - 6181</a></div>
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
						<div class="dm-benh text-uppercase"><a href="#" title="Danh mục bệnh" class="text-container-center">Danh mục bệnh</a></div>
						<div class="menu-items">
							<div>
								<div class="bg bg1">Bệnh về tuyến tiền liệt</div>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(3) }}" title="Viêm tuyến tiền liệt">Viêm tuyến tiền liệt</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(4) }}" title="U nang tuyến tiền liệt">U nang tuyến tiền liệt</a></div>
									</div>
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(5) }}" title="Tăng sinh tuyến tiền liệt">Tăng sinh tuyến tiền liệt</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(6) }}" title="Phì đại tuyến tiền liệt">Phì đại tuyến tiền liệt</a></div>
									</div>
								</div>
							</div>
							<div>
								<div class="bg bg2">Rối loạn chức năng sinh dục</div>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(8) }}" title="Liệt dương">Liệt dương</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(35) }}" title="Yếu sinh lý">Yếu sinh lý</a></div>
									</div>
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(10) }}" title="Xuất tinh sớm">Xuất tinh sớm</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(9) }}" title="Rối loạn cương dương">Rối loạn cương dương</a></div>
									</div>
								</div>
							</div>
							<div>
								<div class="bg bg3">Chỉnh hình cơ quan sinh dục</div>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(13) }}" title="Dài bao quy đầu">Dài bao quy đầu</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(14) }}" title="Kéo dài dương vật">Kéo dài dương vật</a></div>
									</div>
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(15) }}" title="Hẹp bao quy đầu">Hẹp bao quy đầu</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(16) }}" title="Tăng kích thước dương vật">Tăng kích thước dương vật</a></div>
									</div>
								</div>
							</div>
							<div>
								<div class="bg bg4">Viêm nhiễm hệ thống sinh dục</div>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(18) }}" title="Viêm quy đầu">Viêm quy đầu</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(19) }}" title="Viêm bàng quang">Viêm bàng quang</a></div>
									</div>
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(20) }}" title="Viêm niệu đạo">Viêm niệu đạo</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(21) }}" title="Viêm tinh hoàn">Viêm tinh hoàn</a></div>
									</div>
								</div>
							</div>
							<div>
								<div class="bg bg5">Vô sinh nam</div>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(23) }}" title="Tinh trùng ít">Tinh trùng ít</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(24) }}" title="Xuất tinh ra máu">Xuất tinh ra máu</a></div>
									</div>
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(25) }}" title="Không có tinh trùng">Không có tinh trùng</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(26) }}" title="Tinh trùng yếu">Tinh trùng yếu</a></div>
									</div>
								</div>
							</div>
							<div>
								<div class="bg bg6">Bệnh xã hội</div>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(28) }}" title="Sùi mào gà">Sùi mào gà</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(29) }}" title="Giang mai">Giang mai</a></div>
									</div>
									<div class="flex2col1">
										<div><a href="{{ MyAPI::getUrlTermID(30) }}" title="Bệnh lậu">Bệnh lậu</a></div>
										<div><a href="{{ MyAPI::getUrlTermID(31) }}" title="Mụn rộp sinh dục">Mụn rộp sinh dục</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ url('/') }}" class="text-container-center hvr-fade" title="Trang chủ">Trang chủ</a></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div>
						<a href="{{ url('ve-chung-toi') }}" class="text-container-center hvr-fade" title="Giới thiệu phòng khám">Giới thiệu<br>phòng khám</a>
					</div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ MyAPI::getUrlTermID(32) }}" class="text-container-center hvr-fade" title="Kỹ thuật điều trị">Kỹ thuật<br>điều trị</a></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ MyAPI::getUrlTermID(33) }}" class="text-container-center hvr-fade" title="Kỹ thuật tiên tiến">Thiết bị<br>tiên tiến</a></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ MyAPI::getUrlTermID(34) }}" class="text-container-center hvr-fade" title="Bệnh án điển hình">Bệnh án<br>điển hình</a></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><a href="{{ url('/dia-chi-phong-kham') }}" class="text-container-center hvr-fade" title="Địa chỉ phòng khám">Địa chỉ <br>phòng khám</a></div>
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
							<a href="{{ url('/') }}" title="logo">
								<img src="{{ asset('public/images/desktop/logo-header.png') }}" class="center-block" alt="logo">
							</a>
						</div>
						<div class="text-center text-uppercase web-name">
							<a href="{{ url('/') }}" title="Phòng khám chuyên khoa Nam Khang">Phòng khám chuyên khoa Nam Khang</a>
						</div>
						<div class="text-center text-uppercase web-slogan">_____PHÒNG KHÁM UY TÍN Ở HÀ NỘI_____</div>
					</div>
					<div class="flex1col2">
						<div class="text-uppercase">Trung tâm uy tín</div>
						<div class="text-uppercase">
							<a href="{{ MyAPI::getUrlTermID(32) }}" title="Kĩ thuật điều trị">Kĩ thuật điều trị</a>
						</div>
						<div class="text-uppercase">
							<a href="{{ MyAPI::getUrlTermID(33) }}" title="Thiết bị tiên tiến">Thiết bị tiên tiến</a>
						</div>
						<div class="text-uppercase">
							<a href="{{ MyAPI::getUrlTermID(34) }}" title="Bệnh án điển hình">Bệnh án điển hình</a>
						</div>
						<div  class="text-uppercase">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="TƯ VẤN CHI PHÍ">TƯ VẤN CHI PHÍ</a>
						</div>
						<div class="text-uppercase">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="LIÊN HỆ VỚI CHÚNG TÔI">LIÊN HỆ VỚI CHÚNG TÔI</a>
						</div>
						<div class="text-uppercase">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="ĐẶT HẸN TRỰC TUYẾN">ĐẶT HẸN TRỰC TUYẾN</a>
						</div>
					</div>
					<div class="flex1col3">
						<div class="">
							<div class="text-uppercase web-contact">Liên hệ với chúng tôi</div>
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
												<div class="text-uppercases">ĐIỆN THOẠI TƯ VẤN MIỄN PHÍ</div>
												<div class="call"><a href="tel:18006181" title="1800-6181">1800-6181</a></div>
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
												<div class="text-uppercase">TƯ VẤN</div>
												<div class="call">
													<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="SKYPE">SKYPE</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="flex4 flex justify-content-between">
								<div class="flex4col1">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center dis-block width-100 justify-content-around active hvr-push" title="Hỏi bệnh tình">
										<span class="flex align-items-center justify-content-center">
											<i class="bg3"></i>
										</span>
										<span class="flex align-items-center justify-content-center">Hỏi bệnh tình</span>
									</a>
								</div>
								<div class="flex4col1">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center dis-block width-100 justify-content-around hvr-push" title="Hỏi điều trị">
										<span class="flex align-items-center justify-content-center">
											<i class="bg4"></i>
										</span>
										<span class="flex align-items-center justify-content-center">Hỏi điều trị</span>
									</a>
								</div>
								<div class="flex4col1">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="flex align-items-center dis-block width-100 justify-content-around hvr-push" title="Hỏi chi phí">
										<span class="flex align-items-center justify-content-center">
											<i class="bg5"></i>
										</span>
										<span class="flex align-items-center justify-content-center">Hỏi chi phí</span>
									</a>
								</div>
							</div>
							<div class="web-address"><a href="{{ url('dia-chi-phong-kham') }}" title="Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội">Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội</a></div>
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
			<a class="dis-inline-block pos-absolute tuvan1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn"></a>
			<a class="dis-inline-block pos-absolute tuvan2" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Đặt hẹn"></a>
		</div>
	</div>
</body>
</html>
