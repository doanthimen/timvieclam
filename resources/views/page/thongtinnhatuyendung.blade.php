<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Thông tin |Nhà tuyển dụng</title>
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
                <a class="navbar-brand" href="#">Nhà tuyển dụng đăng nhập</a>
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
            <li><a href="{{ route('nhatuyendung') }}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
            <li class="active"><a href="{{ route('thongtinnhatuyendung') }}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Thông tin nhà tuyển dụng</a></li>
            <li><a href="{{ route('themtintuyendung') }}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Tạo tin tuyển dụng</a></li>
            <li role="presentation" class="divider"></li>
        </ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Nhập thông tin nhà tuyển dụng</h1>
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
					<div class="panel-heading">Điền đầy đủ thông tin dưới đây</div>
					  <h4 style="color: blue; font-family: sans-serif; font-weight: bold">@if (Session::has('them'))
                                      <div class="alert alert-success">
                                      {{ Session::get('them') }}
                                      </div>
                                      @endif</h4>

					<div class="panel-body">
					    <form action="{{route('thongtinnhatuyendung')}}" method="post" enctype="multipart/form-data">
					    	<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên nhà tuyển dụng*</label>
										<input required type="text" name="name"required class="form-control">
									</div>
                                    <div class="form-group" >
                                        <label>Công ty*</label>
                                        <input required type="text" name="congty" class="form-control">
                                    </div>
								   	<div class="form-group" >
										<label>Email  liên hệ*</label>
										<input required type="text" name="email" class="form-control">
									</div>

									<div class="form-group" >
										<label>Ảnh đại diện cho nhà tuyển dụng*</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="source/backend/img/new_seo-10-512.png">
									</div>
									<div class="form-group" >
                                        <label>Địa chỉ*</label>
                                        <input required type="text" name="diachi" class="form-control">
                                    </div>
									<div class="form-group" >
										<label>Tỉnh thành phố*</label>
										<select name="tinhthanhpho" class="form-control">
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
                                								
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									

									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
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
