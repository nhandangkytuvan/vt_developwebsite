@extends('layout.desktop')
@section('title')
	<title>{{ $data['term']->term_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_term',['data'=>$data])
@endsection('keyword')
@section('css')
<link rel="canonical" href="http://www.phongkhamnamkhang.com/thiet-bi-tien-tien-33" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-thietbi.css') }}">
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
<main class="thietbi">
	<div class="row1 row">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3><img src="{{ asset('public/images/desktop/tb-1-1.png') }}" class="center-block" alt="Hệ thống điều trị sóng ngắn ngoài thân thể ZD - 2001A"></h3>
				</div>
				<div class="flex1col2">
					<div class="tb-name">
						<h3 class="text-uppercase">Tên thiết bị</h3>
						<p>Hệ thống điều trị sóng ngắn ngoài thân thể ZD - 2001A</p>
					</div>
					<div class="tb-dieutri">
						<h3 class="text-uppercase">Phù hợp để điều trị các bệnh</h3>
						<p>
							Viêm tuyến tiền liệt mãn tính, Tăng sinh lành tính tuyến tiền liệt , viêm mào tinh hoàn, viêm túi tinh, viêm niệu đạo, rối loạn chức năng tình dục... 
						</p>
					</div>
					<div class="tb-nguyenly flex justify-content-between">
						<div class="col1 flex align-items-center justify-content-end">
							<div>
								<h5 class="text-center"><i></i>Nguyên <br>lý <br>hoạt <br>động</h5>
							</div>
						</div>
						<div class="col3 arrow_box"></div>
						<div class="col2 flex align-items-center justify-content-end">
							<div>
								<p class="text-justify">
									Áp dụng gia nhiệt cảm ứng cao tần 13.56MHz và hồng ngoại có tác dụng sản sinh quang động lực, tập trung vào các mô bệnh để sản xuất năng lượng, thông qua nhiều nhóm có tác dụng bảo vệ ống nghiệm điện dung điện cực, do vô cực quang và độ chính xác cao có thể nhìn được hệ thống định vị chính xác, tính sáng tạo mục tiêu ba chiều để năng lượng tần số cao được tập trung vào mô bệnh của con người, sản xuất cả điện trường xoay chiều lại có một từ trường xoay chiều "thu thập" năng lượng điện từ và quang phổ nhiệt.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row-footer">
				<h3 class="text-center">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block hvr-float-shadow"><i></i> Tìm hiểu kĩ lưỡng quá trình điều trị</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block hvr-float-shadow">Hỏi chuyên gia phải điều trị như thế nào <i></i></a>
				</h3>
			</div>
		</div>
	</div>
	<div class="row2 row">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3><img src="{{ asset('public/images/desktop/tb-2-1.png') }}" class="center-block" alt="Máy trị liệu đa chức năng tuyến tiền liệt ECO-100B"></h3>
				</div>
				<div class="flex1col2">
					<div class="tb-name">
						<h3 class="text-uppercase">Tên thiết bị</h3>
						<p>Máy trị liệu đa chức năng tuyến tiền liệt ECO-100B</p>
					</div>
					<div class="tb-dieutri">
						<h3 class="text-uppercase">Phù hợp để điều trị các bệnh</h3>
						<p>
							Các loại bệnh cấp mãn tính, vi khuẩn, viêm tuyến tiền liệt tính đặc biệt, và đi tiểu thường xuyên do tuyến tiền liệt, tiểu gấp, tiểu đau, tiểu khó, rối loạn chức năng tình dục, liệt dương, xuất tinh sớm, phình tầng sinh môn …
						</p>
					</div>
					<div class="tb-nguyenly flex justify-content-between">
						<div class="col1 flex align-items-center justify-content-end">
							<div>
								<h5 class="text-center"><i></i>Nguyên <br>lý <br>hoạt <br>động</h5>
							</div>
						</div>
						<div class="col3 arrow_box"></div>
						<div class="col2 flex align-items-center justify-content-end">
							<div>
								<p class="text-justify">
									<span>Hiệu ứng tính nóng chảy:</span> Có thể nhanh chóng xâm nhập vào lớp màng bọc của tuyến tiền liệt lipid, tăng cường tính thẩm thấu vào màng tế bào
								</p>
								<p class="text-justify">
									<span>Hiệu ứng năng lượng nhiệt cao:</span> Sự dẫn nhiệt cao truyền vào các tế bào bên trong của cơ thể, nhờ hiệu ứng nhiệt trên các mô bị bệnh.
								</p>
								<p class="text-justify">
									<span>Hiệu ứng của năng lượng cơ khí:</span> thông qua phân tử tế bào thay đổi hình thức chuyển động, thúc đẩy chức năng điều tiết thần kinh, hồi phục chức năng tình dục.
									Hiệu ứng từ tính: làm tăng cường hoạt động của tế bào bình thường, hoàn toàn ức chế các vi khuẩn tổng hợp sao chép DNA, nâng cao sức đề kháng của cơ thể với bệnh tật
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row-footer">
				<h3 class="text-center">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block hvr-float-shadow"><i></i> Tìm hiểu kĩ lưỡng quá trình điều trị</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block hvr-float-shadow">Hỏi chuyên gia phải điều trị như thế nào <i></i></a>
				</h3>
			</div>
		</div>
	</div>
	<div class="row3 row">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3><img src="{{ asset('public/images/desktop/tb-3-1.png') }}" class="center-block" alt="Thiết bị điều trị Wallman EASY-100A"></h3>
				</div>
				<div class="flex1col2">
					<div class="tb-name">
						<h3 class="text-uppercase">Tên thiết bị</h3>
						<p>Thiết bị điều trị Wallman EASY-100A</p>
					</div>
					<div class="tb-dieutri">
						<h3 class="text-uppercase">Phù hợp để điều trị các bệnh</h3>
						<p>
							Viêm tuyến tiền liệt cấp mãn tính, viêm tuyến tiền liệt điều trị lâu không khỏi, tăng sinh tuyến tiền liệt, phì đại tuyến tiền liệt, đau tuyến tiền liệt, viêm niệu đạo…đồng thời có hiệu quả rõ ràng với các triệu chứng lâm sàng như dương vật sưng đau, liệt dương, xuất tinh sớm, suy giảm ham muốn tình dục…
						</p>
					</div>
					<div class="tb-nguyenly flex justify-content-between">
						<div class="col1 flex align-items-center justify-content-end">
							<div>
								<h5 class="text-center"><i></i>Nguyên <br>lý <br>hoạt <br>động</h5>
							</div>
						</div>
						<div class="col3 arrow_box"></div>
						<div class="col2 flex align-items-center justify-content-end">
							<div>
								<p class="text-justify">
									<span>Kĩ thuật xoáy điện từ trường xuyên thấu :</span> Trực tiếp xâm nhập vào lớp màng tuyến tiền liệt, đưa thuốc trực tiếp đến ổ bệnh;
								</p>
								<p class="text-justify">
									<span>Hiệu ứng điện hóa:</span> Trong ổ bệnh giải phóng các ion dương và âm được sản xuất bằng điện phân, phá hủy môi trường sinh tồn của vi khuẩn gây bệnh.  
								</p>
								<p class="text-justify">
									<span>Hiệu ứng năng lượng từ tính sửa chữa tế bào:</span> năng lượng từ trường Gauss, thúc đẩy quá trình chuyển hóa tế bào, thiết lập hệ thống miễn dịch;
								</p>
								<p class="text-justify">
									<span>Chip thông minh dẫn đường dịch máu:</span> 10 phần tỉ của 1 gam hiệu ứng dao động tấm, chính xác bao phủ ổ bệnh tuyến tiền liệt.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row-footer">
				<h3 class="text-center">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block hvr-float-shadow" title="Tìm hiểu kĩ lưỡng quá trình điều trị"><i></i> Tìm hiểu kĩ lưỡng quá trình điều trị</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block hvr-float-shadow" title="Hỏi chuyên gia phải điều trị như thế nào">Hỏi chuyên gia phải điều trị như thế nào <i></i></a>
				</h3>
			</div>
		</div>
	</div>
	<div class="row4 row">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3><img src="{{ asset('public/images/desktop/tb-4-1.png') }}" class="center-block" alt="Hệ thống điều trị tuyến tiền liệt Prostate"></h3>
				</div>
				<div class="flex1col2">
					<div class="tb-name">
						<h3 class="text-uppercase">Tên thiết bị</h3>
						<p>Hệ thống điều trị tuyến tiền liệt Prostate</p>
					</div>
					<div class="tb-dieutri">
						<h3 class="text-uppercase">Phù hợp để điều trị các bệnh</h3>
						<p>
							Viêm tuyến tiệt liệt mãn tính, tăng sinh tuyến tiền liệt, viêm u nang tinh dẫn đến phì đại tuyến tiền tiệt, đau tuyến tiền liệt, rối loạn chức năng tình dục và các bệnh nam khoa khác.

						</p>
					</div>
					<div class="tb-nguyenly flex justify-content-between">
						<div class="col1 flex align-items-center justify-content-end">
							<div>
								<h5 class="text-center"><i></i>Nguyên <br>lý <br>hoạt <br>động</h5>
							</div>
						</div>
						<div class="col3 arrow_box"></div>
						<div class="col2 flex align-items-center justify-content-end">
							<div>
								<p class="text-justify">
									<span>Hiệu ứng nhiệt:</span> làn sóng năng lượng đồng đều có tác dụng tại bộ phận tuyến tiền liệt, liệu pháp nhiệt;
								</p>
								<p class="text-justify">
									<span>Hiệu ứng rung:</span> Massage rung động thoát chất dịch tuyến tiền liệt, loại bỏ chất gây viêm, thúc đẩy việc loại bỏ triệu chứng viêm;
								</p>
								<p class="text-justify">
									<span>Hiệu ứng sóng từ:</span> lưu thông máu, giảm đau chống viêm, có hiệu quả trong việc giảm thần kinh sinh dục, có lợi cho điều trị rối loạn chức năng tình dục.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row-footer">
				<h3 class="text-center">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block hvr-float-shadow" title="Tìm hiểu kĩ lưỡng quá trình điều trị"><i></i> Tìm hiểu kĩ lưỡng quá trình điều trị</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block hvr-float-shadow" title="Hỏi chuyên gia phải điều trị như thế nào">Hỏi chuyên gia phải điều trị như thế nào <i></i></a>
				</h3>
			</div>
		</div>
	</div>
	<div class="row5 row">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3><img src="{{ asset('public/images/desktop/tb-5-1.png') }}" class="center-block" alt="Thiết bị điều trị can thiệp khoang ZRL-II-A"></h3>
				</div>
				<div class="flex1col2">
					<div class="tb-name">
						<h3 class="text-uppercase">Tên thiết bị</h3>
						<p>Thiết bị điều trị can thiệp khoang ZRL-II-A</p>
					</div>
					<div class="tb-dieutri">
						<h3 class="text-uppercase">Phù hợp để điều trị các bệnh</h3>
						<p>
							Viêm tuyến tiền liệt mãn tính do nhiễm khuẩn, viêm bàng quang, tăng sinh tuyến tiền liệt, viêm tuyến tiền liệt mãn tính không phải do nhiễm khuẩn, đau tuyến tiền liệt, viêm niệu đạo, rối loạn chức năng tình dục …
						</p>
					</div>
					<div class="tb-nguyenly flex justify-content-between">
						<div class="col1 flex align-items-center justify-content-end">
							<div>
								<h5 class="text-center"><i></i>Nguyên <br>lý <br>hoạt <br>động</h5>
							</div>
						</div>
						<div class="col3 arrow_box"></div>
						<div class="col2 flex align-items-center justify-content-end">
							<div>
								<p class="text-justify">
									<span>Nguyên tắc tạo hiệu ứng nhiệt:</span> dưới tác dụng của điện dung từ trường cao, các điện từ trường khác có thể bị hấp thu và chuyển hóa thành nhiệt năng.
								</p>
								<p class="text-justify">
									<span>Nguyên tắc hiệu ứng nhiệt bên ngoài:</span> Điện dung tần số cao, làm tăng tốc độ sợi thần kinh tái sinh, tế bào bạch cầu làm tăng cường thực bào.
								</p>
								<p class="text-justify">
									<span>Nguyên tắc truyền dịch áp:</span> máu, lưu thông bạch huyết, mạch máu, tăng cường tính thấm của tế bào mô.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row-footer">
				<h3 class="text-center">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block hvr-float-shadow" title="Tìm hiểu kĩ lưỡng quá trình điều trị"><i></i> Tìm hiểu kĩ lưỡng quá trình điều trị</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block hvr-float-shadow" title="Hỏi chuyên gia phải điều trị như thế nào">Hỏi chuyên gia phải điều trị như thế nào <i></i></a>
				</h3>
			</div>
		</div>
	</div>
</main>
@endsection('content')