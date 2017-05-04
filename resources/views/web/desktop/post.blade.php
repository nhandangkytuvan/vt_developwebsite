@extends('layout.desktop')
@section('title')
	<title>{{ $data['post']->post_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_post',['data'=>$data])
@endsection('keyword')
@php $term = $data['post']->term;@endphp
@section('css')
<link rel="canonical" href="{{ MyAPI::getUrlPostObj($data['post']) }}" />
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/font/post-detail-css.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-post.css') }}">
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
								<div class="flex justify-content-center align-items-center">
									<i class="fa fa-home"></i>
								</div>
								<div class="flex justify-content-center align-items-center">
									<a href="{{ url('/') }}">Trang chủ</a> > 
								</div>
								<div class="flex justify-content-center align-items-center">
									<a href="{{ MyAPI::getUrlTermObj($term) }}">{{ $term->term_name }}</a>
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
		</div>
	</div>
</div>
<main class="container term post">
	<div class="flex flex0 justify-content-between">
		<div class="flex0col1">
			<h1 class="text-uppercase"><i></i> {{ $data['post']->post_name }}</h1>
			<div class="post-description">
			</div>
			<div class="post-detail">
				{!! $data['post']->post_detail !!}
			</div>
			<div class="post-footer">
				<div class="order2">
					<p><strong>Tình trạng hiện tại của bạn là gì?</strong></p>
					<div class="flex flex1 flex-wrap-wrap">
						<div class="flex1col1 flex justify-content-center align-items-center" onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<div class="text-center"><i class="bg bg1"></i></div>
								<div class="text-center">Xuất hiện triệu chứng</div>
								<div class="text-center">Tìm phương pháp giải quyết phiền phức</div>
								<div class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></div>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center active"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<div class="text-center"><i class="bg bg2"></i></div>
								<div class="text-center">Muốn đến thăm khám</div>
								<div class="text-center">Hi vọng tìm được nguyên nhân gây bệnh</div>
								<div class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></div>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<div class="text-center"><i class="bg bg3"></i></div>
								<div class="text-center">Đã được chẩn đoán</div>
								<div class="text-center">Tìm phương án điều trị nhanh, chính xác</div>
								<div class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></div>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<div class="text-center"><i class="bg bg4"></i></div>
								<div class="text-center">Tìm hiểu chi phí</div>
								<div class="text-center">Muốn tìm hiểu chi phí để yên tâm điều trị</div>
								<div class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></div>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<div class="text-center"><i class="bg bg5"></i></div>
								<div class="text-center">Tư vấn tham khảo</div>
								<div class="text-center">Trao đổi trực tuyến riêng với bác sĩ nam khoa</div>
								<div class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></div>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<div class="text-center"><i class="bg bg6"></i></div>
								<div class="text-center">Xếp số khám ngay</div>
								<div class="text-center">Hưởng dịch vụ an toàn đơn giản không cần xếp hàng</div>
								<div class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="post-related">
				@php  
					$term = $data['post']->term;
					$posts = $term->post()->where('id','<>',$data['post']->id)->limit(6)->get();
				@endphp
				<div class="flex justify-content-between flex2">
					<div class="flex2col1">
						<ul>
							@foreach($posts as $key => $post)
							<li>
								<h5>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a>
								</h5>
							</li>
							@php 
								unset($posts[$key]);
								if($key==2) break;
							@endphp
							@endforeach
						</ul>
					</div>
					<div class="flex2col1">
						<ul>
							@foreach($posts as $key => $post)
							<li>
								<h5>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a>
								</h5>
							</li>
							@php unset($posts[$key]) @endphp
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="post-number">
				<p><strong>Hôm nay đã có</strong></p>
				<div>
					<div class="flex flex3 justify-content-between">
						<div class="flex3col1">
							<p>
								@php 
									$web_tuvan = $setting->web_tuvan;
									$web_tuvan = str_split($web_tuvan);
					                if(count($web_tuvan)==1){
					                    array_unshift($web_tuvan,'0','0');
					                }
					                if(count($web_tuvan)==2){
					                    array_unshift($web_tuvan,'0');
					                }
								@endphp
								@foreach($web_tuvan as $value)
								<span>{{ $value }}</span>
								@endforeach
								người tư vấn
							</p>
						</div>
						<div class="flex3col2">
							<div class="flex">
								<div class="flex4col1">
									<form action="{{ url('/search') }}">
										{{ csrf_field() }}
										<input type="text" name="keyword" placeholder="Nhập triệu chứng của bạn để được tư vấn">
									</form>
								</div>
								<div class="flex4col2 flex justify-content-center align-items-center">
									<div>
										<div class="text-center">
											<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/icon-13.png') }}" class="center-block"></a>
										</div>
										<div class="text-center">
											<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
											Tư vấn trực tuyến</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tool-facebook">
				<div class="fb-like" data-href="" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
				<div class="fb-comments" data-href="{{ MyAPI::getUrlPostObj($data['post']) }}" data-numposts="5" data-width="100%"></div>
			</div>
			<script>
				$(document).ready(function() {
					setTimeout(function(){
						toastr8.windows({
							message:'Việc tìm kiếm sẽ nhanh hơn khi bạn trò chuyện với <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">bác sĩ tư vấn</a> !', 
							title:"Mẹo nhỏ",
							iconClass: "fa fa-user-md",
							imgURI: ["{{ asset('public/images/desktop/logo-footer.png') }}"],
							timeOut:0,
							positionClass:'toast8-bottom-left',
						});
					}, 60000);
				});
			</script>
		</div>
		<div class="flex0col2">
			@include('web.desktop.slidebar')
		</div>
	</div>
</main>
@endsection('content')