@extends('layout.desktop')
@section('title')
	<title>tìm thấy : {{ $data['posts']->total() }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
@section('css')
<link rel="canonical" href="{{ url('search') }}" />
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-pagination.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-term.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-search.css') }}">
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
									<span class="color1">Đang tìm kiếm về:</span>
								</div>
								<div>
									<span class="color2"><a href="">{{ Request::input('keyword') }}</a></span>
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
													<input type="text" name="keyword" placeholder="Nhập từ khóa">
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
<main class="container term">
	<h1 class="">tìm thấy : {{ $data['posts']->total() }}</h1>
	<div class="meo-nho">
		<h5><span>Mẹo nhỏ:</span> Việc tìm kiếm sẽ trở lên nhanh hơn khi bạn trò chuyện trực tiếp với bác sĩ tư vấn !</h5>
	</div>
	<div class="flex flex0 justify-content-between">
		<div class="flex0col1">
			<div class="posts">
				@foreach($data['posts'] as $post)
				<div class="post">
					<div class="flex flex4 justify-content-between">
						<div class="flex4col1 flex align-items-center">
							@php 
								if(Request::input('keyword')){
									$post_name = str_ireplace(Request::input('keyword'),'<i>'.Request::input('keyword').'</i>',$post->post_name);
								}else{
									$post_name = $post->post_name;
								}
							@endphp
							<h3><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{!! $post_name !!}</a></h3>
						</div>	
						<div class="flex4col2 flex align-items-center">
							<div class="flex flex5 justify-content-between">
								<div class="flex5col1 flex align-items-center justify-content-center">
									<a href="tel:1800 - 6181" title="1800 - 6181">
										<img src="{{ asset('public/images/desktop/term-5.png') }}" class="center-block" alt="1800 - 6181">
									</a>
								</div>
								<div class="flex5col2 flex align-items-center justify-content-center">
									<div><a href="tel:18006181" title="1800 - 6181">1800 - 6181</a></div>
								</div>
								<div class="flex5col3 flex align-items-center justify-content-center">
									<div>
										<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn">Tư vấn</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p>
						{{ MyAPI::getLimitWord($post->post_description,50) }}
						<a href="{{ MyAPI::getUrlPostObj($post) }}" title="Chi tiết">Chi tiết</a>
					</p>
				</div>
				@endforeach
			</div>
			<div class="my_pagination">
				{{ $data['posts']->links() }}
			</div>
		</div>
		<div class="flex0col2">
			<div class="row2">
				<div class="flex flex100 align-items-center">
					<div class="width-100 flex flex99">
						<div class="flex flex99col1 align-items-center"><img src="{{ asset('public/images/desktop/logo-header.png') }}" class="center-block img-responsive" alt="logo"></div>
						<div class="flex flex99col2 align-items-center">
							<div class="text-uppercase">chỉ nam thăm khám</div>
						</div>
					</div>
				</div>
				<div class="flex flex98 flex-wrap-wrap">
					<div class="flex98col1">
						<div class="flex97 flex align-items-center justify-content-center">
							<div>
								<div class="text-center">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">
										<i class="bg1"></i>
									</a>
								</div>
								<div class="text-center">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">Tư vấn<br>trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex98col1">
						<div class="flex97 flex align-items-center justify-content-center">
							<div>
								<div class="text-center">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Giải đáp triệu trứng">
										<i class="bg2"></i>
									</a>
								</div>
								<div class="text-center">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Giải đáp triệu trứng">Giải đáp<br>triệu chứng</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex98col1">
						<div class="flex97 flex align-items-center justify-content-center">
							<div>
								<div class="text-center">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn chi phí">
										<i class="bg3"></i>
									</a>
								</div>
								<div class="text-center">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn chi phí">Tư vấn<br>chi phí</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex98col1">
						<div class="flex97 flex align-items-center justify-content-center">
							<div>
								<div class="text-center">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Đặt hẹn kiểm tra">
										<i class="bg4"></i>
									</a>
								</div>
								<div class="text-center">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Đặt hẹn kiểm tra">Đặt hẹn<br>kiếm tra</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex98col1">
						<div class="flex97 flex align-items-center justify-content-center">
							<div>
								<div class="text-center">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn ưu đãi">
										<i class="bg5"></i>
									</a>
								</div>
								<div class="text-center">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn ưu đãi">
										Tư vấn<br>ưu đãi
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex98col1">
						<div class="flex97 flex align-items-center justify-content-center">
							<div>
								<div class="text-center">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Đặt hẹn trên mạng">
										<i class="bg6"></i>
									</a>
								</div>
								<div class="text-center">
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Đặt hẹn trên mạng">Đặt hẹn<br>trên mạng</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row3">
				<div class="flex flex96">
					<div class="flex96col1 flex justify-content-center align-items-center">
						<div><a href=""><img src="{{ asset('public/images/desktop/term-8.png') }}" class="center-block"></a></div>
					</div>
					<div class="flex96col2 flex justify-content-center align-items-center">
						<div>
							<div>Điện thoại tư vấn miễn phí</div>
							<div><a href="tel:18006181" title="1800 - 6181">1800 - 6181</a></div>
						</div>
					</div>
				</div>
				<div class="">Thời gian làm việc : 8:00 -20:00</div>
			</div>
		</div>
	</div>
</main>
@endsection('content')