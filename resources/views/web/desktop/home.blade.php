@extends('layout.desktop')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
@section('css')
	<link rel="canonical" href="{{ url('/') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-home.css') }}">
@endsection('css')
@section('content')
	<div class="baner">
		<div class="slick-home">
			<div>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<img src="{{ asset('public/images/desktop/addslide2.png') }}" alt="Nam khang - Bảo vệ sức khỏe nam giới" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<img src="{{ asset('public/images/desktop/addslide3.png') }}" alt="Nam khang - Kỹ thuật điều trị" class="center-block">
				</a>
			</div>
		</div>
		<script>
			$('.slick-home').slick({
			  	slidesToShow: 1,
			  	slidesToScroll: 1,
			  	autoplay: true,
			  	autoplaySpeed: 2000,
			});	
		</script>
	</div>
	<main class="home">
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
												<input name="keyword" type="text" placeholder="Nhập từ khóa">
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
		<div class="row2">
			<div class="container">
				<div class="title1 container">
					<div class="flex flex1">
						<div><span class="text-uppercase color1">về chúng tôi</span></div>
						<div><span class="text-uppercase color2">about us</span></div>
					</div>
					<div class="h5">Sức khỏe của bạn là món quà tuyệt với nhất đối với chúng tôi</div>
				</div>
				<div class="flex flex2 justify-content-between">
					<div class="flex2col1">
						<p class="text-justify">
							&nbsp;&nbsp;&nbsp;&nbsp;Phòng khám Nam Khang Hà Nội là 1 trong những cơ sở y tế hàng đầu chuyên điều trị các bệnh nam khoa tại Hà Nội. Phòng khám chuyên điều trị tất cả các bệnh: viêm tuyến tiền liệt, tăng sinh tuyến tiền liệt, u nang tuyến tiền liệt, phì đại tuyến tiền liệt, liệt dương, xuất tinh sớm, yếu sinh lý, rối loạn cương dương, dài bao quy đầu, hẹp bao quy đầu, kéo dài dương vật, tăng kích thước dương vật, viêm quy đầu, viêm niệu đạo, viêm bàng quang, viêm tinh hoàn, tinh trùng ít, không có tinh trùng, xuất tinh ra máu, tinh trùng yếu, sùi mào gà, bệnh lậu, giang mai, mụn rộp sinh dục.
						</p>
						<p>
   							&nbsp;&nbsp;&nbsp;&nbsp;Phòng khám đạt chuẩn y tế JCI quốc tế, tại đây hội tụ đội ngũ chuyên gia hàng đầu trong và ngoài nước,
   							với chất lượng dịch vụ tốt nhất đạt tiêu chuẩn 5 sao. Đây được xem là phòng khám điều trị các bệnh nam khoa đỉnh cao số 1 tại Hà 	Nội. Uy tín, trách nhiệm sức khỏe người bệnh luôn được đặt lên hàng đầu. 
						</p>
					</div>
					<div class="flex2col2">
						<img src="{{ asset('public/images/desktop/sua-1.png') }}" class="center-block" alt="Phòng khám Nam Khang">
					</div>
				</div>
				<div class="">
					<a href="{{ url('ve-chung-toi') }}" title="Tìm hiểu chi tiết">TÌM HIỂU CHI TIẾT</a>
				</div>
			</div>
		</div>
		<div class="row3">
			<div class="container">
				<div class="global2">
					<div class="flex">
						<div class="col1"><i class="bg1"></i></div>
						<div class="col2">N</div>
						<div class="col3 flex justify-content-center align-items-center">
							<div>
								<div class="text-uppercase">Đội ngũ y bác sỹ</div>
								<div>anjian doctor</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex2 justify-content-between">
					<div class="flex2col1">
						<div class="text-center h3">Đội ngũ bác sỹ khám chữa bệnh nam khoa<br>chuyên nghiệp tại Hà Nội</div>
						<p class="text-justify">
							Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh nghiệm thăm khám lâm sàng, trong đó có những bác sỹ nước ngoài, vô cùng chuyên nghiệp trong lĩnh vực điều trị nam khoa.
						</p>
					</div>
					<div class="flex2col1">
						<div class="text-center h3">Có kinh nghiệm phong phú trong điều trị<br>các bệnh nam khoa</div>
						<p class="text-justify">
							Dựa vào đội ngũ y bác sỹ nhiều năm kinh nghiệm lâm sàng, đã điều trị thành công cho rất nhiều ca bệnh phức tạp. Hợp tác với nhiều bác sỹ chuyên khoa, đã cứu chữa khỏi cho rất nhiều bệnh nhân mắc bệnh nguy hiểm.
						</p>
					</div>
				</div>
				<div class="img1">
					<img src="{{ asset('public/images/desktop/home-4.png') }}" class="center-block" alt="Đội ngũ bác sỹ khám chữa bệnh nam khoa">
				</div>
			</div>
		</div>
		<div class="row4">
			<div class="container">
				<div class="global2">
					<div class="flex">
						<div class="col1"><i class="bg1"></i></div>
						<div class="col2">A</div>
						<div class="col3 flex justify-content-center align-items-center">
							<div>
								<div class="text-uppercase">Kỹ thuật nam khoa</div>
								<div>ndrology technology</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex2 justify-content-between">
					<div class="flex2col1 active">
						<div class="">
							<div class="img1">
								<div>
									<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" 
										title="Điều trị xuất tinh sớm">
										<img src="{{ asset('public/images/desktop/home-5.png') }}" class="center-block" alt="Điều trị xuất tinh sớm">
									</a>
								</div>
							</div>
							<div class="img2" style="display: none;">
								<div><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="4 Đặc sắc lớn của kỹ thuật điều trị">
									<img src="{{ asset('public/images/desktop/home-9.png') }}" class="center-block" alt="4 Đặc sắc lớn của kỹ thuật điều trị"></a></div>
							</div>
						</div>
					</div>
					<div class="flex2col1">
						<div class="">
							<div class="img1">
								<div>
									<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Điều trị sùi mào gà">
										<img src="{{ asset('public/images/desktop/home-6.png') }}" class="center-block" alt="Điều trị sùi mào gà">
									</a>
								</div>
							</div>
							<div class="img2" style="display: none;">
								<div>
									<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Liệu pháp quang động IRA">
										<img src="{{ asset('public/images/desktop/home-10.png') }}" class="center-block" alt="Liệu pháp quang động IRA">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex2col1">
						<div class="">
							<div class="img1">
								<div>
									<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Điều trị yếu sinh lý">
										<img src="{{ asset('public/images/desktop/home-7.png') }}" class="center-block" alt="Điều trị yếu sinh lý">
									</a>
								</div>
							</div>
							<div class="img2" style="display: none;">
								<div>
									<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Hệ thống phục hồi chức năng sinh lý DEA">
										<img src="{{ asset('public/images/desktop/home-11.png') }}" class="center-block" alt="Hệ thống phục hồi chức năng sinh lý DEA">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex2col1">
						<div class="">
							<div class="img1">
								<div>
									<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Thủ thuật bao quy đầu">
										<img src="{{ asset('public/images/desktop/home-8.png') }}" class="center-block" alt="Thủ thuật bao quy đầu">
									</a>
								</div>
							</div>
							<div class="img2" style="display: none;">
								<div>
									<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Thủ thuật cắt bao quy đầu công nghệ Hàn quốc">
										<img src="{{ asset('public/images/desktop/home-12.png') }}" class="center-block" alt="Thủ thuật cắt bao quy đầu công nghệ Hàn quốc">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex3 justify-content-between">
					<div class="flex3col1 flex align-items-center justify-content-center">
						<div class="">
							<div class="text-uppercase text-center h3">Nhiều kỹ thuật hơn</div>
							<div class="text-uppercase text-center h4">MORE TECHNOLOGY</div>
						</div>
					</div>
					<div class="flex3col2">
						<div>
							<div class="panel-heading flex justify-content-center align-items-center">
								<h4 class="text-center">Thủ thuật chỉnh hình cơ quan sinh dục</h4>
							</div>
							<div class="panel-body flex">
								<div class="flex justify-content-center align-items-center">
									<div>
										<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(3) }}" title="Thủ thuật kéo dài dương vật định vị CF">Thủ thuật kéo dài dương vật định vị CF</a><i class="fa fa-play-circle"></i></h5>
										<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(10) }}" title="Thủ thuật cắt bao quy đầu Hàn Quốc">Thủ thuật cắt bao quy đầu Hàn Quốc</a><i class="fa fa-play-circle"></i></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="flex3col2">
						<div>
							<div class="panel-heading flex justify-content-center align-items-center">
								<h4 class="text-center">Điều trị bệnh lý tuyến tiền liệt</h4>
							</div>
							<div class="panel-body flex">
								<div class="flex justify-content-center align-items-center">
									<div>
										<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(11) }}" title="Kỹ thuật can thiệp cắt bỏ tuyến tiền liệt">Kỹ thuật can thiệp cắt bỏ tuyến tiền liệt</a><i class="fa fa-play-circle"></i></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="flex3col2">
						<div class="flex flex4">
							<div class="flex4col1 flex justify-content-start align-items-center">
								<h4>Điều trị vô sinh nam giới</h4>
							</div>
							<div class="flex4col2 flex justify-content-start align-items-center">
								<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(4) }}" title="Liệu pháp lập thể 4 hạng mục">Liệu pháp lập thể 4 hạng mục</a><i class="fa fa-play-circle"></i></h5>
							</div>
						</div>
						<div class="flex flex4">
							<div class="flex4col1 flex justify-content-start align-items-center">
								<h4>Điều trị bệnh lậu</h4>
							</div>
							<div class="flex4col2 flex justify-content-start align-items-center">
								<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(5) }}" title="Liệu pháp DHA">Liệu pháp DHA</a><i class="fa fa-play-circle"></i></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row5">
			<div class="container">
				<div class="global2">
					<div class="flex">
						<div class="col1"><i class="bg1"></i></div>
						<div class="col2">S</div>
						<div class="col3 flex justify-content-center align-items-center">
							<div>
								<div class="text-uppercase">Trung tâm phục hồi chức năng sinh lý</div>
								<div>exual function rehabilitation center</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex2 justify-content-between">
					<div class="flex2col1 flex flex-wrap-wrap justify-content-between">
						<div class="news width-100">
							<div class="width-100 text-center"><span class="text-center"><i></i>Tin tức phòng khám</span></div>
							<div class="width-100">
								<ul>
									@php 
										$term_test = MyAPI::getTermID(1);
										$posts = $term_test->post()->latest()->limit(5)->get();
									@endphp
									@foreach($posts as $post)
									<li>
										<h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h5>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="width-100 flex flex3 flex-wrap-wrap justify-content-between align-content-between">
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<i></i>
									</div>
									<div class="flex justify-content-center align-items-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Hỏi nguyên nhân gây bệnh">
										Hỏi nguyên nhân gây bệnh
										</a>
									</div>
								</div>
							</div>
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<i></i>
									</div>
									<div class="flex justify-content-center align-items-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Hỏi triệu chứng">Hỏi triệu chứng</a>
									</div>
								</div>
							</div>
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<i></i>
									</div>
									<div class="flex justify-content-center align-items-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Hỏi chi phí">Hỏi chi phí</a>
									</div>
								</div>
							</div>
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<i></i>
									</div>
									<div class="flex justify-content-center align-items-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Hỏi nguy hại">Hỏi nguy hại</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="flex2col2 flex align-content-between flex-wrap-wrap">
						<div class="tabs-buttons-1 flex flex4 justify-content-between width-100">
							<div class="flex4col1">
								<div><h2 class="text-center"><a class="active flex align-items-center justify-content-center">Liệt dương</a></h2></div>
							</div>
							<div class="flex4col1">
								<div><h2 class="text-center"><a class="flex align-items-center justify-content-center">Xuất tinh sớm</a></h2></div>
							</div>
							<div class="flex4col1">
								<div><h2 class="text-center"><a  class="flex align-items-center justify-content-center">Rối loạn cương dương</a></h2></div>
							</div>
							<div class="flex4col1">
								<div><h2 class="text-center"><a class="flex align-items-center justify-content-center">Yếu sinh lý</a></h2></div>
							</div>
						</div>
						<div class="tabs-contents-1 width-100">
							<div class="active">
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php
											$term = MyAPI::getTermID(8);
											$posts =  $term->post()->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<div class="text-uppercase text-center post-name">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="{{ $posts[0]->post_name }}">{{ $posts[0]->post_name }}</a>
											</div>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="chi tiết">chi tiết</a>
											</p>
										</div>
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $key => $post)
												@if($key==0) @continue @endif
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Cương cứng kém">Cương cứng kém</a>
												</h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Không thể cương cứng được">Không thể cương cứng được</a>
												</h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Cương cứng khó khăn">Cương cứng khó khăn</a>
												</h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Quy đầu không cương cứng">Quy đầu không cương cứng</a>
												</h3>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex align-items-center justify-content-center">
										<div>
											@if(count($posts))
											<img src="{{ asset('public/img/'.$posts[0]->post_avatar) }}" style="width: 232px;height: 193px;">
											@endif
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php
											$term = MyAPI::getTermID(10);
											$posts =  $term->post()->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<div class="text-uppercase text-center post-name">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="$posts[0]->post_name">{{ $posts[0]->post_name }}</a>
											</div>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="chi tiết">chi tiết</a>
											</p>
										</div>
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $key => $post)
												@if($key==0) @continue @endif
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Quy đầu mẫn cảm">Quy đầu mẫn cảm</a>
												</h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="xuất tinh sớm">xuất tinh sớm</a>
												</h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="quan hệ thời gian ngắn">quan hệ thời gian ngắn</a>
												</h3>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex align-items-center justify-content-center">
										<div>
											@if(count($posts))
											<img src="{{ asset('public/img/'.$posts[0]->post_avatar) }}" style="width: 232px;height: 193px;">
											@endif
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php
											$term = MyAPI::getTermID(9);
											$posts =  $term->post()->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<div class="text-uppercase text-center post-name">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="{{ $posts[0]->post_name }}">{{ $posts[0]->post_name }}</a>
											</div>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="chi tiết">chi tiết</a>
											</p>
										</div>
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $key => $post)
												@if($key==0) @continue @endif
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Liệt dương">Liệt dương</a></h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="cương cứng kém">cương cứng kém</a></h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Không cương cứng được">Không cương cứng được</a></h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Thời gian cương cứng ngắn">Thời gian cương cứng ngắn</a></h3>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex align-items-center justify-content-center">
										<div>
											@if(count($posts))
											<img src="{{ asset('public/img/'.$posts[0]->post_avatar) }}" style="width: 232px;height: 193px;">
											@endif
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php
											$term = MyAPI::getTermID(35);
											$posts =  $term->post()->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<div class="text-uppercase text-center post-name">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="{{ $posts[0]->post_name }}">{{ $posts[0]->post_name }}</a>
											</div>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="chi tiết">chi tiết</a>
											</p>
										</div>
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $key => $post)
												@if($key==0) @continue @endif
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Lãnh cảm">Lãnh cảm</a></h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="không thể cương cứng">không thể cương cứng</a></h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="thời gian quan hệ ngắn">thời gian quan hệ ngắn</a></h3>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex align-items-center justify-content-center">
										<div>
											@if(count($posts))
											<img src="{{ asset('public/img/'.$posts[0]->post_avatar) }}" style="width: 232px;height: 193px;">
											@endif
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="img1">
					<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" class="hvr-shadow">
						<img src="{{ asset('public/images/desktop/home-15.png') }}" class="center-block" alt="Cơ sở y tế điều trị nam khoa tốt nhất khu vực">
					</a>
				</div>
				<div class="global2">
					<div class="flex">
						<div class="col1"><i class="bg1"></i></div>
						<div class="col2">S</div>
						<div class="col3 flex justify-content-center align-items-center">
							<div>
								<div class="text-uppercase">Trung tâm phục hồi chức năng sinh lý</div>
								<div>exual function rehabilitation center</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex2 justify-content-between">
					<div class="flex2col1 flex flex-wrap-wrap justify-content-between">
						<div class="news width-100">
							<div class="width-100 text-center"><span class="text-center"><i></i>Tin tức phòng khám</span></div>
							<div class="width-100">
								<ul>
									@php 
										$term_test = MyAPI::getTermID(1);
										$posts = $term_test->post()->latest()->offset(5)->limit(5)->get();
									@endphp
									@foreach($posts as $post)
									<li>
										<h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h5>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="width-100 flex flex3 flex-wrap-wrap justify-content-between align-content-between">
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<i></i>
									</div>
									<div class="flex justify-content-center align-items-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Hỏi nguyên nhân gây bệnh">
										Hỏi nguyên nhân gây bệnh
										</a>
									</div>
								</div>
							</div>
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<i></i>
									</div>
									<div class="flex justify-content-center align-items-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Hỏi triệu chứng">Hỏi triệu chứng</a>
									</div>
								</div>
							</div>
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<i></i>
									</div>
									<div class="flex justify-content-center align-items-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Hỏi chi phí">Hỏi chi phí</a>
									</div>
								</div>
							</div>
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<i></i>
									</div>
									<div class="flex justify-content-center align-items-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Hỏi nguy hại">Hỏi nguy hại</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="flex2col2 flex align-content-between flex-wrap-wrap">
						<div class="tabs-buttons-2 flex flex4 justify-content-between width-100">
							<div class="flex4col1">
								<div>
									<h2 class="text-center">
										<a class="active flex align-items-center justify-content-center">Bệnh lý tuyến tiền liệt</a>
									</h2>
								</div>
							</div>
							<div class="flex4col1">
								<div>
									<h2 class="text-center">
										<a class="flex align-items-center justify-content-center">Chỉnh hình cơ quan sinh dục</a>
									</h2>
								</div>
							</div>
							<div class="flex4col1">
								<div>
									<h2 class="text-center">
										<a class="flex align-items-center justify-content-center">Bệnh xã hội</a>
									</h2>
								</div>
							</div>
							<div class="flex4col1">
								<div>
									<h2 class="text-center">
										<a class="flex align-items-center justify-content-center">Viêm nhiễm niệu đạo</a>
									</h2>
								</div>
							</div>
							<div class="flex4col1">
								<div>
									<h2 class="text-center">
										<a class="flex align-items-center justify-content-center">Vô sinh nam</a>
									</h2>
								</div>
							</div>
						</div>
						<div class="tabs-contents-2 width-100">
							<div class="active">
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php 
											$term = MyAPI::getTermID(2);
											$term_childs = $term->children()->pluck('id')->toArray();
											$posts = App\Post::whereIn('term_id',$term_childs)->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<div class="text-uppercase text-center post-name">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="{{ $posts[0]->post_name }}">{{ $posts[0]->post_name }}</a>
											</div>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="chi tiết">chi tiết</a>
											</p>
										</div>
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $key => $post)
												@if($key==0) @continue @endif
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(3) }}" title="Viêm tuyến tiền liệt">Viêm tuyến tiền liệt</a>
												</h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(5) }}" title="Tăng sinh tuyến tiền liệt">Tăng sinh tuyến tiền liệt</a>
												</h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(4) }}" title="U nang tuyến tiền liệt">U nang tuyến tiền liệt</a>
												</h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(6) }}" title="Phì đại tuyến tiền liệt">Phì đại tuyến tiền liệt</a>
												</h3>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex align-items-center justify-content-center">
										<div>
											@if(count($posts))
											<img src="{{ asset('public/img/'.$posts[0]->post_avatar) }}" style="width: 232px;height: 193px;">
											@endif
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php 
											$term = MyAPI::getTermID(12);
											$term_childs = $term->children()->pluck('id')->toArray();
											$posts = App\Post::whereIn('term_id',$term_childs)->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<div class="text-uppercase text-center post-name">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="{{ $posts[0]->post_name }}">{{ $posts[0]->post_name }}</a>
											</div>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="chi tiết">chi tiết</a>
											</p>
										</div>
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $key => $post)
												@if($key==0) @continue @endif
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(13) }}" title="Dài bao quy đầu">Dài bao quy đầu</a>
												</h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(15) }}" title="Hẹp bao quy đầu">Hẹp bao quy đầu</a>
												</h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(14) }}" title="Kéo dài dương vật">Kéo dài dương vật </a>
												</h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(16) }}" title="Tăng kích thước dương vật">Tăng kích thước dương vật</a>
												</h3>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex align-items-center justify-content-center">
										<div>
											@if(count($posts))
											<img src="{{ asset('public/img/'.$posts[0]->post_avatar) }}" style="width: 232px;height: 193px;">
											@endif
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php 
											$term = MyAPI::getTermID(27);
											$term_childs = $term->children()->pluck('id')->toArray();
											$posts = App\Post::whereIn('term_id',$term_childs)->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<div class="text-uppercase text-center post-name">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="{{ $posts[0]->post_name }}">{{ $posts[0]->post_name }}</a>
											</div>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="chi tiết">chi tiết</a>
											</p>
										</div>
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $key => $post)
												@if($key==0) @continue @endif
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(28) }}" title="Sùi mào gà">Sùi mào gà</a></h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(31) }}" title="Mụn rộp sinh dục">Mụn rộp sinh dục</a></h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(29) }}" title="Giang mai">Giang mai</a></h3>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(30) }}" title="Bệnh lậu">Bệnh lậu</a></h3>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex align-items-center justify-content-center">
										<div>
											@if(count($posts))
											<img src="{{ asset('public/img/'.$posts[0]->post_avatar) }}" style="width: 232px;height: 193px;">
											@endif
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
									@php 
										$term = MyAPI::getTermID(17);
										$term_childs = $term->children()->pluck('id')->toArray();
										$posts = App\Post::whereIn('term_id',$term_childs)->limit(6)->latest()->get();
									@endphp
									@if(count($posts))
									<div class="width-100">
										<div class="text-uppercase text-center post-name">
											<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="{{ $posts[0]->post_name }}">{{ $posts[0]->post_name }}</a>
										</div>
									</div>
									<div class="width-100">
										<p class="text-justify">
											{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
											<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="chi tiết">chi tiết</a>
										</p>
									</div>
									@endif
									<div class="width-100">
										<ul>
											@foreach($posts as $key => $post)
											@if($key==0) @continue @endif
											<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h5></li>
											@endforeach
										</ul>
									</div>
									<div class="flex flex6 width-100">
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(18) }}" title="Viêm quy đầu">Viêm quy đầu</a></h3>
										</div>
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(20) }}" title="Viêm niệu đạo">Viêm niệu đạo</a></h3>
										</div>
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(19) }}" title="Viêm bàng quang">Viêm bàng quang</a></h3>
										</div>
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(21) }}" title="Viêm tinh hoàn">Viêm tinh hoàn</a></h3>
										</div>
									</div>
									</div>
									<div class="flex5col2 flex align-items-center justify-content-center">
										<div>
											@if(count($posts))
											<img src="{{ asset('public/img/'.$posts[0]->post_avatar) }}" style="width: 232px;height: 193px;">
											@endif
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
									@php 
										$term = MyAPI::getTermID(22);
										$term_childs = $term->children()->pluck('id')->toArray();
										$posts = App\Post::whereIn('term_id',$term_childs)->limit(6)->latest()->get();
									@endphp
									@if(count($posts))
									<div class="width-100">
										<div class="text-uppercase text-center post-name">
											<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="{{ $posts[0]->post_name }}">{{ $posts[0]->post_name }}</a>
										</div>
									</div>
									<div class="width-100">
										<p class="text-justify">
											{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
											<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}" title="chi tiết">chi tiết</a>
										</p>
									</div>
									@endif
									<div class="width-100">
										<ul>
											@foreach($posts as $key => $post)
											@if($key==0) @continue @endif
											<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h5></li>
											@endforeach
										</ul>
									</div>
									<div class="flex flex6 width-100">
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(23) }}" title="Tinh trùng ít">Tinh trùng ít</a></h3>
										</div>
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(25) }}" title="Không có tinh trùng">Không có tinh trùng</a></h3>
										</div>
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(24) }}" title="Xuất tinh ra máu">Xuất tinh ra máu</a></h3>
										</div>
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h3 class="text-center"><a href="{{ MyAPI::getUrlTermID(26) }}" title="Tinh trùng yếu">Tinh trùng yếu</a></h3>
										</div>
									</div>
									</div>
									<div class="flex5col2 flex align-items-center justify-content-center">
										<div>
											@if(count($posts))
											<img src="{{ asset('public/img/'.$posts[0]->post_avatar) }}" style="width: 232px;height: 193px;">
											@endif
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row6">
			<div class="container">
				<div class="global2">
					<div class="flex">
						<div class="col1"><i class="bg1"></i></div>
						<div class="col2">R</div>
						<div class="col3 flex justify-content-center align-items-center">
							<div>
								<div class="text-uppercase">Ví dụ trường hợp hồi phục</div>
								<div>ehabilitation case centre</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slick-hp">
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-1.png') }}" class="center-block width-100" alt="Anh Đoàn">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Bệnh nhân</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Anh Đoàn</span>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Triệu trứng</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Viêm tuyến tiền liệt</span>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<div class="text-center color1 post-name">
									Thanh niên ưu tú nơi làm việc và “cuộc chạm trán” với <span class="color2">viêm tuyến tiền liệt</span>
								</div>
								<p class="text-justify">
									Bệnh viêm tuyến tiền liệt của tôi cuối cùng cũng đã điều trị khỏi rồi!” Anh Đoàn năm nay 29 tuổi, là giám đốc bộ phận của một công ty, cuối năm công việc bận rộn, thường xuyên phải làm thêm, ở cơ quan thì ngồi cả ngày, rất ít khi vận động, cả ngày bận rộn ở cơ quan, sau khi về nhà thì anh thích uống chút bia rượu để giải tỏa áp lực... 
									<a href="{{ MyAPI::getUrlPostID(13) }}" title="chi tiết">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(13) }}" title="Xem chi tiết hơn">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-2.png') }}" class="center-block width-100" alt="Anh Quân">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Bệnh nhân</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Anh Quân</span>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Triệu trứng</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Viêm quy đầu</span>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<div class="text-center color1 post-name">
									Phòng khám nam khang Hà Nội cứu chữa bệnh <span class="color2">viêm quy đầu</span> của tôi
								</div>
								<p class="text-justify">
									Như hiện nay, có rất nhiều người đã nhầm lẫn và điều trị bệnh viêm bao quy đầu như các bệnh xã hội khác, trung quy cũng vì bản thân họ không có những kiến thức đầy đủ về bệnh xã hội. Anh Quân chính là một bệnh nhân như vậy...
									<a href="{{ MyAPI::getUrlPostID(18) }}" title="chi tiết">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(18) }}" title="Xem chi tiết hơn">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-3.png') }}" class="center-block width-100" alt="Anh Đạt">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Bệnh nhân</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Anh Đạt</span>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Triệu trứng</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Tiểu ra máu</span>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<div class="text-center color1 post-name">
									<span class="color2">Tiểu máu</span> ảnh hưởng nghiêm trọng cuộc sống và công việc của anh ấy
								</div>
								<p class="text-justify">
									Anh Đạt, năm nay 38 tuổi, khỏe mạnh, đang trong giai đoạn sự nghiệp tương đối thành công. Với đặc trưng của công việc anh ngồi cả ngày, công việc cuối năm lại rất bận rộn, thường xuyên làm thêm và đi ra ngoài tiếp khách hàng. Anh Đạt xuất hiện đi tiểu gấp, thỉnh thoảng có cảm giác đau buốt...
									<a href="{{ MyAPI::getUrlPostID(20) }}" title="chi tiết">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(20) }}" title="Xem chi tiết hơn">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-4.png') }}" class="center-block width-100" alt="Anh Tuấn">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Bệnh nhân</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Anh Tuấn</span>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Triệu trứng</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Xuất tinh sớm</span>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<div class="text-center color1 post-name">
									<span class="color2">Xuất tinh sớm</span> có thể tự khỏi được không? Trường hợp phục hồi chức năng xuất tinh sớm giải đáp thắc mắc của bạn.
								</div>
								<p class="text-justify">
									Xuất tinh sớm có thể tự khỏi được không? Có rất nhiều nam giới lên trên trang tư vấn trực tuyến của phòng khám Nam Khang Hà Nội có thắc mắc về vấn đề xuất tinh sớm này. Xuất tinh sớm có tự khỏi được không? Xuất tinh sớm uống thuốc gì tốt....
									<a href="{{ MyAPI::getUrlPostID(17) }}" title="chi tiết">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(17) }}" title="Xem chi tiết hơn">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-5.png') }}" class="center-block width-100" alt="Anh Trưởng">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Bệnh nhân</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Anh Trưởng</span>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Triệu trứng</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Liệt dương</span>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<div class="text-center color1 post-name">
									<span class="color2">Bất lực</span> trở thành một chất xúc tác cho việc ly hôn, anh ấy gần như suy sụp
								</div>
								<p class="text-justify">
									Anh Trưởng năm nay 31 tuổi, đã lấy vợ đã 5 năm. Vốn có cuộc sống hạnh phúc, nhưng những năm gần đây vợ chồng anh rất ít khi nói chuyện với nhau. Nguyên nhân là do những năm gần đây, Anh Trưởng vì lo cho công việc và cuộc sống, thời gian làm thêm và tiếp xúc khách hàng cũng nhiều hơn...
									<a href="{{ MyAPI::getUrlPostID(21) }}" title="chi tiết">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(21) }}" title="Xem chi tiết hơn">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-6.png') }}" class="center-block width-100" alt="Anh Phong">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Bệnh nhân</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Anh Phong</span>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Triệu trứng</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Sùi mào gà</span>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<div class="text-center color1 post-name">
									Cảnh báo: bệnh nhân bị <span class="color2">sùi mào gà</span>
								</div>
								<p class="text-justify">
									Bệnh sử: Tháng 5 năm 2016 anh Phong có quan hệ tình dục với một cô gái ở trung tâm massage, sau đó xuất hiện những biểu hiện bất thường, tháng 6 anh đi kiểm tra phát hiện bị mắc bệnh sùi mào gà, ngay sau đó anh đã điều trị và khỏi bệnh....
									<a href="{{ MyAPI::getUrlPostID(15) }}" title="chi tiết">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(15) }}" title="Xem chi tiết hơn">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến<">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-7.png') }}" class="center-block width-100" alt="Anh Toàn">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Bệnh nhân</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Anh Toàn</span>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Triệu trứng</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Mụn rộp sinh dục</span>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<div class="text-center color1 post-name">
									<span class="color2">Vượt qua mụn rộp</span>, xây dựng lại gia đình hạnh phúc
								</div>
								<p class="text-justify">
									Anh Toàn, 38 tuổi, bản thân anh vốn là một người khỏe mạnh, luôn đầy sức sống, có một gia đình hạnh phúc và tự mở công ty để kinh doanh.Vì điều trị mụn rộp sinh dục, một gia đinh giàu có cũng phải điêu đứng....
									<a href="{{ MyAPI::getUrlPostID(16) }}" title="chi tiết">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(16) }}" title="Xem chi tiết hơn">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-8.png') }}" class="center-block width-100" alt="Anh Lâm">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Bệnh nhân</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Anh Lâm</span>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Triệu trứng</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Vô sinh nam</span>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<div class="text-center color1 post-name">
									Điều trị khỏi chứng <span class="color2">tinh trùng yếu</span>, vợ mang thai.
								</div>
								<p class="text-justify">
									 Chuyên gia phòng khám Nam Khang Hà Nội kiểm tra lần đầu cho thấy, bộ phận sinh dục của anh Lâm phát triển bình thường, tinh hoàn không có bất thường, “Phòng thí nghiệm nam khoa” phân tích tinh dịch: màu trắng đục, lượng tinh dịch 3.5ml, độ nhày (++)...
									<a href="{{ MyAPI::getUrlPostID(14) }}" title="chi tiết">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(14) }}" title="Xem chi tiết hơn">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-9.png') }}" class="center-block width-100" alt="Anh Vũ">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Bệnh nhân</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Anh Vũ</span>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<span>Triệu trứng</span>
										</div>
										<div class="flex align-items-center justify-content-center">
											<span>Dài bao quy đầu</span>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<div class="text-center color1 post-name">
									Vợ bị mắc bệnh viêm phụ khoa, thủ phạm thực sự lại chính là do <span class="color2">dài bao quy đầu</span>
								</div>
								<p class="text-justify">
									Bệnh nhân Vũ, giới tình nam, 28 tuổi. Anh Vũ và vợ là bạn học thời đại học, sau khi tốt nghiệp họ đã cùng nhau đi đến hôn nhân. Trong cuộc sống và công việc họ luôn hỗ trợ lẫn nhau, cuộc sống hôn nhân của họ đang hạnh phúc như vậy, nhưng nửa năm gần đây anh Vũ lại phát hiện ra vợ mình trở nên chán nản...
									<a href="{{ MyAPI::getUrlPostID(19) }}" title="chi tiết">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(19) }}" title="Xem chi tiết hơn">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script>
					$('.slick-hp').slick({
					  	slidesToShow: 1,
					  	slidesToScroll: 1,
					  	autoplay: true,
					  	autoplaySpeed: 2000,
					});	
				</script>
			</div>
		</div>
		<div class="row7">
			<div class="container">
				<div class="global2">
					<div class="flex">
						<div class="col1"><i class="bg1"></i></div>
						<div class="col2">B</div>
						<div class="col3 flex justify-content-center align-items-center">
							<div>
								<div class="text-uppercase">Bảo đảm thương hiệu thực lực</div>
								<div>rand and strength guarantee</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1 active">
						<div>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow">
								<img src="{{ asset('public/images/desktop/sua-2.png') }}" class="center-block" alt="Bảo đảm thương hiệu thực lực">
							</a>
						</div>
						<div class="slickmy slick-th1">
							<div>
								<img src="{{ asset('public/images/desktop/th1.png') }}" class="center-block"  alt="Bảo đảm thương hiệu thực lực">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th2.png') }}" class="center-block"  alt="Bảo đảm thương hiệu thực lực">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th3.png') }}" class="center-block"  alt="Bảo đảm thương hiệu thực lực">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th4.png') }}" class="center-block"  alt="Bảo đảm thương hiệu thực lực">
							</div>
						</div>
						<script>
							$('.slick-th1').slick({
							  	//slidesToShow: 1,
							  	//slidesToScroll: 1,
							  	// autoplay: true,
							  	// autoplaySpeed: 2000,
							});	
						</script>
					</div>
					<div class="flex1col2">
						<div>
							<a href="{{ MyAPI::getUrlTermID(33) }}" class="hvr-glow">
								<img src="{{ asset('public/images/desktop/sua-3.png') }}" class="center-block" alt="Thiết bị tiên tiến">
							</a>
						</div>
						<div class="slickmy slick-th2">
							<div>
								<img src="{{ asset('public/images/desktop/th5.png') }}" class="center-block" alt="Thiết bị tiên tiến">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th6.png') }}" class="center-block" alt="Thiết bị tiên tiến">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th7.png') }}" class="center-block" alt="Thiết bị tiên tiến">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th8.png') }}" class="center-block" alt="Thiết bị tiên tiến">
							</div>
						</div>
						<script>
							$('.slick-th2').slick({
							  	//slidesToShow: 1,
							  	//slidesToScroll: 1,
							  	// autoplay: true,
							  	// autoplaySpeed: 2000,
							});	
						</script>
					</div>
					<div class="flex1col3">
						<div>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow">
								<img src="{{ asset('public/images/desktop/sua-4.png') }}" class="center-block" alt="Môi trường phòng khám">
							</a>
						</div>
						<div class="slickmy slick-th3">
							<div>
								<img src="{{ asset('public/images/desktop/th9.png') }}" class="center-block" alt="Môi trường phòng khám">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th10.png') }}" class="center-block" alt="Môi trường phòng khám">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th11.png') }}" class="center-block" alt="Môi trường phòng khám">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th12.png') }}" class="center-block" alt="Môi trường phòng khám">
							</div>
						</div>
						<script>
							$('.slick-th3').slick({
							  	//slidesToShow: 1,
							  	//slidesToScroll: 1,
							  	// autoplay: true,
							  	// autoplaySpeed: 2000,
							});	
						</script>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection('content')