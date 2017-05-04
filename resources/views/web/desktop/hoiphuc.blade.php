@extends('layout.desktop')
@section('title')
	<title>{{ $data['term']->term_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_term',['data'=>$data])
@endsection('keyword')
@section('css')
<link rel="canonical" href="http://www.phongkhamnamkhang.com/benh-an-dien-hinh-34" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/imagehover/css/imagehover.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-hoiphuc.css') }}">
@endsection('css')
@section('js')
@endsection('js')
@section('content')
<div class="banner">
	<div class="container">
		<div class="home">
			<div class="row1">
				<div class="container">
					<div class="flex flex1 justify-content-between">
						<div class="flex1col1 flex justify-content-center align-items-center">
							<div class="flex">
								<div>
									<span class="color1">Từ khóa phổ biến:</span>
								</div>
								<div>
									<span class="color2"><a href="">Sinh dục giảm sút -</a></span>
								</div>
								<div>
									<span class="color2"><a href="">Thời gian quan hệ ngắn -</a></span>
								</div>
								<div>
									<span class="color2"><a href="">Xuất tinh nhanh</a></span>
								</div>
							</div>
						</div>
						<div class="flex1col2 flex justify-content-center align-items-center">
							<div class="flex">
								<div class="flex justify-content-center align-items-center">
									<i class="bg1 dis-inline-block"></i>
								</div>
								<div class="flex justify-content-center align-items-center">
									<span class="h5">Tìm kiếm nhiều hơn</span>
								</div>
								<div>
									<form action="{{ url('search') }}">
										<div class="flex justify-content-center align-items-center">
											<div class="flex">
												<div>
													<input type="text" placeholder="Nhập từ khóa">
												</div>
												<div>
													<button type="submit" class="text-center"><i class="fa fa-search"></i></button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<main class="container term hoiphuc">
	<div class="flex flex0 justify-content-between">
		<div class="flex0col1">
			<h1 class="text-uppercase"><i></i> {{ $data['term']->term_name }}</h1>
			<div class="flex flex1 justify-content-between flex-wrap-wrap">
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-1.png') }}" class="center-block" alt="Anh Đoàn  29 tuổi"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Đoàn  29 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Viêm tuyến tiền liệt</h5>
							      		<h5><span>Triệu chứng: </span>Tiểu nhiều, tiểu rắt, tiểu không hết</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPostID(13) }}" title="Viêm tuyến tiền liệt"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPostID(13) }}" title="Viêm tuyến tiền liệt">Viêm tuyến tiền liệt</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tìm hiểu tình trạng bệnh">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Chuyên gia tư vấn">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-2.png') }}" class="center-block" alt="Anh Quân 29 tuổi"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Quân 29 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Viêm quy đầu</h5>
							      		<h5><span>Triệu chứng: </span>Lột da bao quy đầu, có mùi hôi</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPostID(18) }}" title="Viêm quy đầu"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPostID(18) }}" title="Viêm quy đầu">Viêm quy đầu</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tìm hiểu tình trạng bệnh">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Chuyên gia tư vấn">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-3.png') }}" class="center-block" alt="Anh Đạt  38 tuổi"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Đạt  38 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Tiểu ra máu</h5>
							      		<h5><span>Triệu chứng: </span>Thường xuyên tiểu nhiều tiểu rắt, còn có cảm giác đau nhói, thậm chí xuất hiện tiểu ra máu</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPostID(20) }}" title="Tiểu ra máu"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPostID(20) }}" title="Tiểu ra máu">Tiểu ra máu</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tìm hiểu tình trạng bệnh">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Chuyên gia tư vấn">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-4.png') }}" class="center-block" alt="Anh Tuấn  29 tuổi"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Tuấn  29 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Xuất tinh sớm</h5>
							      		<h5><span>Triệu chứng: </span>Xuất tinh quá nhanh (5 phút), xuất tinh vô lực</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPostID(17) }}" title="Xuất tinh sớm"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPostID(17) }}" title="Xuất tinh sớm">Xuất tinh sớm</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tìm hiểu tình trạng bệnh">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Chuyên gia tư vấn">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-5.png') }}" class="center-block" alt="Anh Trưởng  31 tuổi"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Trưởng  31 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Liệt dương</h5>
							      		<h5><span>Triệu chứng: </span>Dương vật cương cứng kém, mệt mỏi sau quan hệ</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPostID(21) }}" title="Liệt dương"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPostID(21) }}" title="Liệt dương">Liệt dương</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tìm hiểu tình trạng bệnh">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Chuyên gia tư vấn">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-6.png') }}" class="center-block" alt="Anh Phong  34 tuổi"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Phong  34 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Sùi mào gà</h5>
							      		<h5><span>Triệu chứng: </span>Có các u nhú hình súp lơ kích thước như hạt đậu ở quy đầu trong thời gian dài</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPostID(15) }}" title="Sùi mào gà"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPostID(15) }}" title="Sùi mào gà">Sùi mào gà</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tìm hiểu tình trạng bệnh">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Chuyên gia tư vấn">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-7.png') }}" class="center-block" alt="Anh Toàn 38 tuổi"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Toàn 38 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Mụn rộp sinh dục</h5>
							      		<h5><span>Triệu chứng: </span>Có mụn nước trên cơ quan sinh dục, kèm hiện tượng đau đầu</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPostID(16) }}" title="Mụn rộp sinh dục"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPostID(16) }}" title="Mụn rộp sinh dục">Mụn rộp sinh dục</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tìm hiểu tình trạng bệnh">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Chuyên gia tư vấn">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-8.png') }}" class="center-block" alt="Anh Lâm 33 tuổi"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Lâm 33 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span>Yếu tinh trùng</h5>
							      		<h5><span>Triệu chứng: </span>Yếu tinh trùng, giãn tĩnh mạch thừng tinh</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPostID(14) }}" title="Yếu tinh trùng"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPostID(14) }}" title="Vô sinh nam">Vô sinh nam</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tìm hiểu tình trạng bệnh">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Chuyên gia tư vấn">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="border">
						<div class="pos-relative">
							<figure class="imghvr-slide-up width-100">
								<h3><img src="{{ asset('public/images/desktop/hp-9.png') }}" class="center-block" alt="Anh Vũ   28 tuổi"></h3>
						    	<figcaption class="flex justify-content-between align-items-center">
					    			<div>
							      		<h5><span>Thông tin cơ bản: </span>Anh Vũ   28 tuổi</h5>
							      		<h5><span>Mắc bệnh: </span> Dài bao quy đầu, hẹp bao quy đầu</h5>
							      		<h5><span>Triệu chứng: </span>Dài bao quy đầu, viêm quy đầu, làm bạn gái mắc viêm phụ khoa</h5>
					    			</div>
						      	</figcaption>
						      	<a href="{{ MyAPI::getUrlPostID(19) }}" title="Dài bao quy đầu, hẹp bao quy đầu"></a>
						    </figure>
							<h4 class="text-center pos-absolute width-100"><a href="{{ MyAPI::getUrlPostID(19) }}" title="Dài bao quy đầu">Dài bao quy đầu</a></h4>
						</div>
					</div>
					<div class="flex flex2 justify-content-between">
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tìm hiểu tình trạng bệnh">Tìm hiểu tình trạng bệnh</a></h5>
							</div>
						</div>
						<div class="flex flex2col1 justify-content-between align-items-center">
							<div>
								<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Chuyên gia tư vấn">Chuyên gia<br>tư vấn</a></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="flex0col2">
			@include('web.desktop.slidebar')
		</div>
	</div>
</main>
@endsection('content')