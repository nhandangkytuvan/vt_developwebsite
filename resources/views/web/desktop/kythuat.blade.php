@extends('layout.desktop')
@section('title')
	<title>{{ $data['term']->term_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_term',['data'=>$data])
@endsection('keyword')
@section('css')
	<link rel="canonical" href="{{ MyAPI::getUrlTermObj($data['term']) }}" />
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-pagination.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-term.css') }}">
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
<main class="container term">
	<div class="flex flex0 justify-content-between">
		<div class="flex0col1">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div>
						<a href="{{ MyAPI::getUrlTermObj($data['term']) }}" title="{{ $data['term']->term_name }}">
							@if($data['term']->term_avatar)
								<img src="{{ asset('public/img/'.$data['term']->term_avatar) }}" class="center-block" alt="{{ $data['term']->term_name }}">
							@else
								<img src="{{ asset('public/images/desktop/term-3.png') }}" class="center-block" alt="{{ $data['term']->term_name }}">
							@endif
						</a>
					</div>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between">
					<div class="term-name flex align-items-center">
						<div class="flex3 flex">
							<div class="flex3col1">
								<h1 class="text-uppercase">{{ $data['term']->term_name }}</h1>
							</div>
							<div class="flex3col2">
								
							</div>
						</div>
					</div>
					@php 
						$post_first = $data['term']->post()->orderBy('id','desc')->first();
						$posts = $data['term']->post()->where('id','<>',$post_first->id)->orderBy('id','desc')->paginate(6);
					@endphp
					@if($post_first)
					<div class="post-first">
						<h2 class="text-uppercase text-center">
							<a href="{{ MyAPI::getUrlPostObj($post_first) }}" title="{{ $post_first->post_name }}">{{ $post_first->post_name }}</a>
						</h2>
						<p>{{ MyAPI::getLimitWord($post_first->post_description,40) }} <a href="{{ MyAPI::getUrlPostObj($post_first) }}" title="chi tiết">Chi tiết</a></p>
					</div>
					<div class="flex flex2 flex-wrap-wrap justify-content-between align-content-between">
						<div class="flex2col1 flex align-items-center justify-content-center">
							<div class="width-100">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow" title="Triệu chứng">Triệu chứng</a>
							</div>
						</div>
						<div class="flex2col1 flex align-items-center justify-content-center">
							<div class="width-100">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow" title="Nguyên nhân">Nguyên nhân</a>
							</div>
						</div>
						<div class="flex2col1 flex align-items-center justify-content-center">
							<div class="width-100">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow" title="Nguy hại">Nguy hại</a>
							</div>
						</div>
						<div class="flex2col1 flex align-items-center justify-content-center">
							<div class="width-100">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow" title="Điều trị">Điều trị</a>
							</div>
						</div>
						<div class="flex2col1 flex align-items-center justify-content-center">
							<div class="width-100">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow" title="Chi phí">Chi phí</a>
							</div>
						</div>
						<div class="flex2col1 flex align-items-center justify-content-center">
							<div class="width-100">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow" title="Phòng khám">Phòng khám</a>
							</div>
						</div>
					</div>
					@php unset($posts[0]); @endphp
					@endif
				</div>
			</div>
			<div class="posts">
				@foreach($posts as $post)
				<div class="post">
					<div class="flex flex4 justify-content-between">
						<div class="flex4col1 flex align-items-center">
							<h3><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></h3>
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
				{{ $posts->links() }}
			</div>
			<div>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Nhắc nhở">
					<img src="{{ asset('public/images/desktop/term-6.png') }}" class="center-block">
				</a>
			</div>
		</div>
		<div class="flex0col2">
			@include('web.desktop.slidebar')
		</div>
	</div>
</main>
@endsection('content')