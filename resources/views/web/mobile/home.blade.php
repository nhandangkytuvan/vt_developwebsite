@extends('layout.mobile')
@section('title')
    <title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
@section('css')
	<link rel="canonical" href="{{ url('/') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-home.css') }}">
@endsection('css')
@section('content')
	<menu class="container">
		<div class="search">
			<div class="">
				<div class="flex1col1">
					<form action="{{ url('/search') }}">
						{{ csrf_field() }}
						<input type="text" placeholder="Hãy nhập từ khóa" name="keyword">
						<button type="submit">Tìm kiếm</button>
					</form>
				</div>
			</div>
		</div>
		<div class="menu">
			<div class="flex flex2 flex-wrap-wrap justify-content-around align-content-around">
				<div class="flex2col1">
					<div class="flex">
						<div class="box-center">
							<div class="text-center h3"><a href="{{ url('/ve-chung-toi') }}"><i class="bg bg1"></i></a></div>
							<div class="text-uppercase text-center h4"><a href="{{ url('/ve-chung-toi') }}">Giới thiệu phòng khám</a></div>
							<div class="text-center h5"><a href="{{ url('/ve-chung-toi') }}">Năng lực, phẩm chất</a></div>
						</div>
					</div>
				</div>
				<div class="flex2col1">
					<div class="flex">
						<div class="box-center">
							<div class="text-center h3">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<i class="bg bg2"></i>
								</a>
							</div>
							<div class="text-uppercase text-center h4">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Đặt hẹn nhanh</a>
							</div>
							<div class="text-center h5">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Mã số khám bệnh ưu tiên</a>
							</div>
						</div>
					</div>
				</div>
				<div class="flex2col1">
					<div class="flex">
						<div class="box-center">
							<div class="text-center h3"><a href="{{ url('/dia-chi-phong-kham') }}"><i class="bg bg3"></i></a></div>
							<div class="text-uppercase text-center h4"><a href="{{ url('/dia-chi-phong-kham') }}">Bản đồ</a></div>
							<div class="text-center h5"><a href="{{ url('/dia-chi-phong-kham') }}">Ô tô xe máy, xe bus</a></div>
						</div>
					</div>
				</div>
				<div class="flex2col1">
					<div class="flex">
						<div class="box-center">
							<div class="text-center h3">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<i class="bg bg4"></i>
								</a>
							</div>
							<div class="text-uppercase text-center h4">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hỏi bác sĩ</a>
							</div>
							<div class="text-center h5">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chi phí, điều trị</a>
							</div>
						</div>
					</div>
				</div>
				<div class="flex2col1">
					<div class="flex">
						<div class="box-center">
							<div class="text-center h3"><a href="{{ MyAPI::getUrlTermID(32) }}"><i class="bg bg5"></i></a></div>
							<div class="text-uppercase text-center h4"><a href="{{ MyAPI::getUrlTermID(32) }}">Liệu pháp điều trị</a></div>
							<div class="text-center h5"><a href="{{ MyAPI::getUrlTermID(32) }}">Tiên tiến, an toàn</a></div>
						</div>
					</div>
				</div>
				<div class="flex2col1">
					<div class="flex">
						<div class="box-center">
							<div class="text-center h3"><a href="{{ MyAPI::getUrlTermID(34) }}"><i class="bg bg6"></i></a></div>
							<div class="text-uppercase text-center h4"><a href="{{ MyAPI::getUrlTermID(34) }}">Trường hợp hồi phục</a></div>
							<div class="text-center h5"><a href="{{ MyAPI::getUrlTermID(34) }}">Điển hình, thực tế</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</menu>
	<main class="container home">
		<div class="row1">
			<div class="headding">
				<div class="text-center text-uppercase h2">Danh mục bệnh</div>
			</div>
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1 order1 arrow_box align-items-center justify-content-center">
					<div class="">
						<h2 class="text-center text-uppercase">Rối loạn chức năng sinh dục</h2>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(8) }}">Liệt dương</a></h3>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(9) }}">Rối loạn cương dương</a></h3>
						</div>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(10) }}">Xuất tinh sớm</a></h3>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(35) }}">Yếu sinh lý</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1 order1 arrow_box align-items-center justify-content-center">
					<div class="">
						<h2 class="text-center text-uppercase">Chỉnh hình cơ quan sinh dục</h2>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(13) }}">Dài bao quy đầu</a></h3>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(15) }}">Thủ thuật hẹp bao quy đầu</a></h3>
						</div>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(14) }}">Kéo dài dương vật</a></h3>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(16) }}">Tăng kích cỡ dương vật</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1 order1 arrow_box align-items-center justify-content-center">
					<div class="">
						<h2 class="text-center text-uppercase">Bệnh về tuyến tiền liệt</h2>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(3) }}">Viêm tuyến tiền liệt</a></h3>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(6) }}">Phì đại tuyến tiền liệt</a></h3>
						</div>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(5) }}">Tăng sinh tuyến tiền liệt</a></h3>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(4) }}">U nang tuyến tiền liệt</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1 order1 arrow_box align-items-center justify-content-center">
					<div class="">
						<h2 class="text-center text-uppercase">Viêm nhiễm bộ phận sinh dục</h2>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(18) }}">Viêm quy đầu</a></h3>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(19) }}">Viêm bàng quang</a></h3>
						</div>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(20) }}">Viêm niệu đạo</a></h3>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(21) }}">Viêm tinh hoàn</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1 order1 arrow_box align-items-center justify-content-center">
					<div class="">
						<h2 class="text-center text-uppercase">Vô sinh nam</h2>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(23) }}">Ít tinh trùng</a></h3>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(24) }}">Xuất tinh ra máu</a></h3>
						</div>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(25) }}">Vô tinh</a></h3>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(26) }}">Tinh trùng yếu</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1 order1 arrow_box align-items-center justify-content-center">
					<div class="">
						<h2 class="text-center text-uppercase">Bệnh lây truyền qua đường tình dục</h2>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(28) }}">Sùi mào gà</a></h3>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(29) }}">Giang mai</a></h3>
						</div>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(30) }}">Bệnh lậu</a></h3>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(31) }}">Mụn rộp sinh dục</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row2">
			<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
				<img src="{{ asset('public/images/mobile/home-1.png') }}" class="center-block img-responsive">
			</a>
		</div>
		<div class="row3">
			<div class="headding">
				<div class="text-center text-uppercase h2">Phương pháp điều trị của Nam Khang</div>
			</div>
			<div class="flex flex1">
				<div class="flex flex1col1 active">
					<div class="box-center">
						<h3 class="text-center text-uppercase"><a href="javascript:;">xuất tinh sớm</a></h3>
						<h5 class="text-center"><a href="javascript:;">Thời gian quan hệ ngắn</a></h5>
					</div>
				</div>
				<div class="flex flex1col1">
					<div class="box-center">
						<h3 class="text-center text-uppercase"><a href="javascript:;">Cắt bao quy đầu</a></h3>
						<h5 class="text-center"><a href="javascript:;">Dài bao quy đầu</a></h5>
					</div>
				</div>
				<div class="flex flex1col1">
					<div class="box-center">
						<h3 class="text-center text-uppercase"><a href="javascript:;">Liệt dương</a></h3>
						<h5 class="text-center"><a href="javascript:;">Dương vật không đủ cương cứng</a></h5>
					</div>
				</div>
				<div class="flex flex1col1">
					<div class="box-center">
						<h3 class="text-center text-uppercase"><a href="javascript:;">Viêm tuyến tiền liệt</a></h3>
						<h5 class="text-center"><a href="javascript:;">Tiểu nhiều, tiểu buốt</a></h5>
					</div>
				</div>
			</div>
			<div class="tab-contents-1">
				<div class="active">
					<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/mobile/home-2.png') }}" class="img-responsive center-block"></a></div>
				</div>
				<div>
					<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/mobile/home-3.png') }}" class="img-responsive center-block"></a></div>
				</div>
				<div>
					<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/mobile/home-4.png') }}" class="img-responsive center-block"></a></div>
				</div>
				<div>
					<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/mobile/home-5.png') }}" class="img-responsive center-block"></a></div>
				</div>
			</div>
		</div>
		<div class="row4">
			<div class="headding">
				<div class="text-center text-uppercase h2">Khám nam khoa chọn Phòng khám Nam Khang Hà Nội</div>
				<div class="text-center h3">Chuyên chữa bệnh nam khoa khó điều trị, tái phát nhiều lần</div>
			</div>
			<div class="flex flex1 flex-wrap-wrap">
				<div class="flex1col1 flex">
					<div class="box-center">
						<div class="h3">Nhiều năm</div>
						<div class="h4">Thương hiệu chuyên nghiệp tại Hà Nội</div>
					</div>
				</div>
				<div class="flex1col1 flex">
					<div class="box-center">
						<div class="h3">30 năm</div>
						<div class="h4">Bác sĩ nhiều kinh nghiệm khám và điều trị</div>
					</div>
				</div>
				<div class="flex1col1 flex">
					<div class="box-center">
						<div class="h3">10 điểm lớn</div>
						<div class="h4">Hệ thống thăm khám điều trị tiên tiến</div>
					</div>
				</div>
				<div class="flex1col1 flex">
					<div class="box-center">
						<div class="h3">100%</div>
						<div class="h4">Cơ chế đảm bảo bảo mật</div>
					</div>
				</div>
				<div class="flex1col1 flex">
					<div class="box-center">
						<div class="h3">365 ngày</div>
						<div class="h4">Thăm khám cả năm không nghỉ ngày nào</div>
					</div>
				</div>
				<div class="flex1col1 flex">
					<div class="box-center">
						<div class="h3">24 giờ</div>
						<div class="h4">Đặt hẹn tư vấn trực tuyến</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection('content')
@section('toolbar')
	<div class="container footer-toolbar">
		<div class="flex flex1 justify-content-between">
			<div class="flex1col1">
				<div class="box-center">
					<div class="text-center h3"><a href="tel:18006181"><i class="glyphicon glyphicon-phone-alt"></i></a></div>
					<div class="text-center h4"><a href="tel:18006181">Gọi điện</a></div>
				</div>
			</div>
			<div class="flex1col1">
				<div class="box-center">
					<div class="text-center h3"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-calendar"></i></a></div>
					<div class="text-center h4"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Đặt hẹn</a></div>
				</div>
			</div>
			<div class="flex1col1">
				<div class="box-center">
					<div class="text-center h3"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-comment"></i></a></div>
					<div class="text-center h4"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn</a></div>
				</div>
			</div>
			<div class="flex1col1">
				<div class="box-center">
					<div class="text-center h3"><a href="{{ url('/dia-chi-phong-kham') }}"><i class="fa fa-map-marker"></i></a></div>
					<div class="text-center h4"><a href="{{ url('/dia-chi-phong-kham') }}">Địa chỉ</a></div>
				</div>
			</div>
		</div>
	</div>
@endsection('toolbar')