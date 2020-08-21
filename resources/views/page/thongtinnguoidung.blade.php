<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tạo hồ sơ xin việc</title>
<link href="source/backend/css/bootstrap.min.css" rel="stylesheet">
<link href="source/backend/css/datepicker3.css" rel="stylesheet">
<link href="source/backend/css/styles.css" rel="stylesheet">
<script type="text/javascript" src="source/backend/ckeditor/ckeditor.js"></script>
<script src="source/backend/js/lumino.glyphs.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Người xin việc đăng nhập</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>{{Auth::user()->name}}<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('logout') }}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li role="presentation" class="divider"></li>
            <li><a style="color :black;" href="{{ route('nguoidung') }}"><i class="fa fa-file"></i> Trang Chủ</a></li>
            <li  class="active"><a style="color :black;" href="{{ route('thongtinnguoidung')}}"><i class="fa fa-file"></i> Tạo Hồ Sơ</a></li>
             
              @foreach($taohoso as $tt)
            <li><a style="color :black;" href="{{route('xemthongtin',$tt->id)}}"><i class="fa fa-file"></i> Xem Hồ Sơ</a></li>
             @endforeach
        </ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tạo hồ sơ dành cho người xin việc</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="panel panel-primary">
					@csrf
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                               
                            </div>
                        @endif
                          <h4 style="color: red; font-family: sans-serif; font-weight: bold">@if (Session::has('them'))
                                      <div class="alert alert-success">
                                      {{ Session::get('them') }}
                                      </div>
                                      @endif</h4>
                                      </center>

					<div class="panel-heading">Điền đầy đủ thông tin thực của bạn vào hồ sơ dưới đây</div>
					<div class="panel-body">
					    <form action="{{route('thongtinnguoidung')}}" method="post" enctype="multipart/form-data">
					    	<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Họ Và Tên*</label>
										<input required type="text" name="name"required class="form-control">
									</div>
								   <div class="form-group" >
										<label>Ngày sinh*</label>
										<input type="date" name="date"required class="form-control">
									</div>


									<div class="form-group" >
										<label>Email  liên hệ*</label>
										<input required type="text" name="email" class="form-control">
									</div>

									<div class="form-group" >
										<label>Ảnh cá nhân*</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="source/backend/img/new_seo-10-512.png">
									</div>
									<div class="form-group" >
										<label>Ngành Nghề*</label>
										<select name="nganhnghe" class="form-control">
											<option value="96" >Nhân viên kinh doanh</option>
                                                <option value="38" >Hành chính-Văn phòng</option>
                                                <option value="63" >Bán hàng </option>
                                                <option value="37" >Tư vấn</option>
                                                <option value="16" >Kỹ thuật</option>
                                                <option value="30" >Kế toán-Kiểm toán</option>
                                                <option value="41" >Xây dựng</option>
                                                <option value="8" >Điện-Điện tử-Điện lạnh</option>
                                                <option value="53" >Marketing-PR</option>
                                                <option value="94" >An ninh-Bảo vệ</option>
                                                <option value="49" >Báo chí-Truyền hình</option>
                                                <option value="1" >Bảo hiểm</option>
                                                <option value="79" >Biên-Phiên dịch</option>
                                                <option value="2" >Bưu chính</option>
                                                <option value="101" >Chứng khoán- Vàng</option>
                                                <option value="4" >Cơ khí-Chế tạo</option>
                                                <option value="88" >Công nghệ cao</option>
                                                <option value="90" >Công nghiệp</option>
                                                <option value="6" >Dầu khí-Hóa chất</option>
                                                <option value="50" >Dệt may - Da giày</option>
                                                <option value="7" >Dịch vụ</option>
                                                <option value="9" >Du lịch</option>
                                                <option value="54" >Điện tử viễn thông</option>
                                                <option value="76" >Game</option>
                                                <option value="10" >Giáo dục-Đào tạo</option>
                                                <option value="85" >Hàng gia dụng</option>
                                                <option value="57" >Hàng hải</option>
                                                <option value="55" >Hàng không</option>
                                                <option value="87" >Hoá học-Sinh học</option>
                                                <option value="93" >Hoạch định-Dự án</option>
                                                <option value="12" >In ấn-Xuất bản</option>
                                                <option value="5" >IT phần cứng/mạng</option>
                                                <option value="74" >IT phần mềm</option>
                                                <option value="81" >KD bất động sản</option>
                                                <option value="84" >Khách sạn-Nhà hàng</option>
                                                <option value="40" >Kho vận-Vật tư</option>
                                                <option value="15" >Kiến trúc-TK nội thất</option>
                                                <option value="61" >Kỹ thuật ứng dụng</option>
                                                <option value="48" >Làm bán thời gian</option>
                                                <option value="26" >Lao động phổ thông</option>
                                                <option value="22" >Ngân hàng</option>
                                                <option value="44" >Ngành nghề khác</option>
                                                <option value="62" >Nghệ thuật - Điện ảnh</option>
                                                <option value="42" >Ngoại thương-Xuất nhập khẩu</option>
                                                <option value="78" >Người giúp việc</option>
                                                <option value="59" >Nhân sự</option>
                                                <option value="17" >Nông-Lâm-Ngư nghiệp</option>
                                                <option value="65" >NV trông quán Internet</option>
                                                <option value="89" >Ô tô - Xe máy</option>
                                                <option value="18" >Pháp lý-Luật</option>
                                                <option value="92" >Promotion Girl &#40;PG&#41;</option>
                                                <option value="28" >Quan hệ đối ngoại</option>
                                                <option value="14" >Quản trị kinh doanh</option>
                                                <option value="46" >Sinh viên làm thêm</option>
                                                <option value="20" >Spa-Mỹ phẩm-Trang sức</option>
                                                <option value="80" >Tài chính-Đầu tư</option>
                                                <option value="75" >Thiết kế đồ hoạ web</option>
                                                <option value="32" >Thiết kế-Mỹ thuật</option>
                                                <option value="86" >Thời trang</option>
                                                <option value="33" >Thủ công mỹ nghệ</option>
                                                <option value="91" >Thư ký-Trợ lý</option>
                                                <option value="34" >Thực phẩm-Đồ uống</option>
                                                <option value="52" >Thực tập</option>
                                                <option value="77" >Thương mại điện tử</option>
                                                <option value="36" >Tiếp thị-Quảng cáo</option>
                                                <option value="83" >Tổ chức sự kiện-Quà tặng</option>
                                                <option value="39" >Vận tải</option>
                                                <option value="43" >Y tế-Dược</option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Khu vực*</label>
										<select name="khuvuc" class="form-control">
											<option  value="1">TP.HCM</option>
                                                                <option  value="2">Hà Nội</option>
                                                                <option  value="52">An Giang</option>
                                                                <option  value="53">Bà Rịa - Vũng Tàu</option>
                                                                <option  value="91">Bắc Giang</option>
                                                                <option  value="92">Bắc Kạn</option>
                                                                <option  value="93">Bạc Liêu</option>
                                                                <option  value="32">Bắc Ninh</option>
                                                                <option  value="90">Bến Tre</option>
                                                                <option  value="89">Bình Định</option>
                                                                <option  value="9">Bình Dương</option>
                                                                <option  value="88">Bình Phước</option>
                                                                <option  value="87">Bình Thuận</option>
                                                                <option  value="86">Cà Mau</option>
                                                                <option  value="21">Cần Thơ</option>
                                                                <option  value="85">Cao Bằng</option>
                                                                <option  value="23">Đà Nẵng</option>
                                                                <option  value="83">Đắc Lắc</option>
                                                                <option  value="82">Đắc Nông</option>
                                                                <option  value="81">Điện Biên</option>
                                                                <option  value="19">Đồng Nai</option>
                                                                <option  value="80">Đồng Tháp</option>
                                                                <option  value="79">Gia Lai</option>
                                                                <option  value="78">Hà Giang</option>
                                                                <option  value="77">Hà Nam</option>
                                                                <option  value="76">Hà Tĩnh</option>
                                                                <option  value="27">Hải Dương</option>
                                                                <option  value="22">Hải Phòng</option>
                                                                <option  value="75">Hậu Giang</option>
                                                                <option  value="74">Hòa Bình</option>
                                                                <option  value="26">Hưng Yên</option>
                                                                <option  value="73">Khánh Hòa</option>
                                                                <option  value="72">Kiên Giang</option>
                                                                <option  value="71">Kon Tum</option>
                                                                <option  value="70">Lai Châu</option>
                                                                <option  value="67">Lâm Đồng</option>
                                                                <option  value="69">Lạng Sơn</option>
                                                                <option  value="68">Lào Cai</option>
                                                                <option  value="66">Long An</option>
                                                                <option  value="65">Nam Định</option>
                                                                <option  value="64">Nghệ An</option>
                                                                <option  value="63">Ninh Bình</option>
                                                                <option  value="62">Ninh Thuận</option>
                                                                <option  value="99">Nước ngoài</option>
                                                                <option  value="61">Phú Thọ</option>
                                                                <option  value="60">Phú Yên</option>
                                                                <option  value="59">Quảng Bình</option>
                                                                <option  value="58">Quảng Nam</option>
                                                                <option  value="30">Quảng Ngãi</option>
                                                                <option  value="57">Quảng Ninh</option>
                                                                <option  value="56">Quảng Trị</option>
                                                                <option  value="55">Sóc Trăng</option>
                                                                <option  value="54">Sơn La</option>
                                                                <option  value="51">Tây Ninh</option>
                                                                <option  value="50">Thái Bình</option>
                                                                <option  value="49">Thái Nguyên</option>
                                                                <option  value="48">Thanh Hóa</option>
                                                                <option  value="94">Thừa Thiên Huế</option>
                                                                <option  value="47">Tiền Giang</option>
                                                                <option  value="95">Toàn quốc</option>
                                                                <option  value="46">Trà Vinh</option>
                                                                <option  value="45">Tuyên Quang</option>
                                                                <option  value="44">Vĩnh Long</option>
                                                                <option  value="43">Vĩnh Phúc</option>
                                                                <option  value="42">Yên Bái</option>
					                    </select>
									</div>
										<div class="form-group" >
										<label>Hôn nhân*</label>
										<select required name="honnhan" class="form-control">
											<option value="1">Độc thân</option>
											<option value="0">Đã kết hôn</option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Trình độ</label>
										<select required name="trinhdo" class="form-control">
											<option selected="selected" value="">Chọn trình độ*</option>
											<option value="6">Đại học</option>
											<option value="5">Cao đẳng</option>
											<option value="4">Trung cấp</option>
											<option value="7">Cao học</option>
											<option value="3">Trung học</option>
											<option value="2">Chứng chỉ</option>
											<option value="1">Lao động phổ thông</option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Số năm kinh nghiệm*</label>
										<select required name="kinhnghiem" class="form-control">
											<option selected="selected" value="100">Chọn kinh nghiệm</option>
											<option value="0">Chưa có kinh nghiệm</option>
											<option value="7">Dưới 1 năm</option>
											<option value="1">1 năm</option>
											<option value="2">2 năm</option>
											<option value="3">3 năm</option>
											<option value="4">4 năm</option>
											<option value="5">5 năm</option>
											<option value="6">Trên 5 năm</option>
					                    </select>

									</div>
                                    
									<div class="form-group" >
										 <label><b>Nội dung (*)</b></label>
										 <br>
										</br>
										 <textarea name="noidung" cols="50" rows="9"></textarea>
								    </div>
									<div class="form-group" >
                                        <label>Cho phép nhà tuyển dụng nhìn thấy thông tin của bạn:</label><br>
                                        Có: <input type="radio" name="hienthi" value="1">
                                        Không: <input type="radio" checked name="hienthi" value="0">
                                    </div>
									<center><input type="submit" name="submit" value="Tạo hồ sơ" class="btn btn-primary">


							</div>
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<script src="source/backend/js/jquery-1.11.1.min.js"></script>
	<script src="source/backend/js/bootstrap.min.js"></script>
	<script src="source/backend/js/chart.min.js"></script>
	<script src="source/backend/js/chart-data.js"></script>
	<script src="source/backend/js/easypiechart.js"></script>
	<script src="source/backend/js/easypiechart-data.js"></script>
	<script src="source/backend/js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});
		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		});
		function changeImg(input){
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		        var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#img').click();
		    });
		});
	</script>	
</body>

</html>
