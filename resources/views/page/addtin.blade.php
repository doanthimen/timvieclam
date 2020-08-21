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
            <li><a href="{{ route('thongtinnhatuyendung') }}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Thông tin nhà tuyển dụng</a></li>
            <li class="active"><a href="{{ route('themtintuyendung') }}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Tạo tin tuyển dụng</a></li>
            <li role="presentation" class="divider"></li>
        </ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<center><h1 style="color :#00008b;" class="page-header">Nhập đầy đủ thông tin tuyển dụng </h1></center>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div  class="col-xs-12 col-md-12 col-lg-12">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="panel panel-body">
					@csrf
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                               
                            </div>
                        @endif
					<h1 style="color :#bf3eff;" class="panel-body">Thông tin tuyển dụng</h1>					 <h4 style="color :red;"" font-family: sans-serif; font-weight: bold">@if (Session::has('them'))
                                      <div class="alert alert-success">
                                      {{ Session::get('them') }}
                                      </div>
                                      @endif</h4>
					<div class="panel-body">
					    <form action="{{route('themtintuyendung')}}" method="post" enctype="multipart/form-data">
					    	<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
                                      <div class="form-group" >
                                        <label style="color :blue;">Tiêu đề tuyển dụng*</label>
                                        <input required type="text" name="tieude" class="form-control">
                                    </div>
									<div class="form-group" >
										<label style="color :blue;">Công việc tuyển dụng*</label>
										<input required type="text" name="congviectuyen"required class="form-control">
										<p class="clear mar_top6 width_520"><b style="color :red;">Lưu ý :</b></br>
										- Bạn nên đặt tên vị trí/chức danh phổ biến, đơn giản như “Trưởng phòng kinh doanh”, “Nhân viên kinh doanh”.</br>- Đây là yếu tố quan trọng thu hút các ứng viên ứng tuyển và chúng tôi gợi ý các hồ sơ phù hợp.
										</p>
									</div>
                                  
                                    <div class="form-group" >
                                        <label style="color :blue;">Mã công việc*</label>
                                        <input required type="text" name="macongviec" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                        <label style="color :blue;">Mô tả công việc*</label>
                                        <div class="fl_left" style="width:530px;" id="div_jobdesc">
                                	<textarea cols="80" rows="5" id="job_desc" name="motacongviec" class="editor"></textarea>
                                    <p class="clear note2 mar_top2">Nhỏ hơn 10 000 kí tự</p>
                                     </div>
                                    </div>
                                    <div class="form-group" >
                                        <label style="color :blue;">Yêu cầu công việc*</label>
                                        <div class="fl_left" style="width:530px;" id="div_jobdesc">
                                	<textarea cols="80" rows="5" id="job_desc" name="yeucaucongviec" class="editor"></textarea>
                                    <p class="clear note2 mar_top2">Nhỏ hơn 10 000 kí tự</p>
                                     </div>
                                    </div>
                                    									<div class="form-group" >
										<label style="color :blue;">Ngành Nghề*</label>
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
										<label style="color :blue;">Khu vực*</label>
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
										<label style="color :blue;">Mức lương*</label>
									 <div class="fl_left width_530">
                                     <span class="mar_leftright8 fl_left">Tối Thiểu <span class="red">*</span></span>
                                    <input class="width_75" size="12" name="luongmin" id="salary_from"  maxlength="12" value="" onblur="checkAlertSalary();" />
                                    <span class="mar_leftright8 fl_left">Tối Đa <span class="red">*</span></span>
                                    <input class="width_75" size="12" name="luongmax" id="salary_to" maxlength="12"  value="" onblur="checkAlertSalary();" />
                                    <div class="display_ads">
                                    	<label>
                                        	<input class="input_margin" type="checkbox" name="congkhai" value="0" checked="checked" />
                                            <span>“Hiển thị thông tin lương” trên vị trí đăng tuyển</span>
                                        </label>
                                        <div class="fl_left mar_top10">
                                            <p class="width_62 fl_left"><b style="color :red;">Lưu ý:</b></p>
                              
                                        	</br>- 72% ứng viên chia sẻ rằng thông tin lương ảnh hưởng đến quyết định ứng tuyển của họ.
                                                                        </br>- Bạn có thể quyết định “hiển thị thông tin lương” để thu hút thêm nhiều hồ sơ ứng tuyển vào vị trí tuyển dụng.
        <p style="color:black ; font-weight: bold;">- Bạn nên nhập cả hai mức lương tối thiểu và tối đa cho vị trí cần đăng tuyển.</p>
                                        </div>
                                    </div>
									</div>
									<div class="form-group" >
										<label style="color :blue;">Hình thức*</label>
										<div class="fl_left">
                                    <label class="width_160">
                                        <input type="checkbox" class="require-one-job-type input_margin"  id="job_type1"  name="hinhthuc" value="1" />
                                        <span style="color :#6495ed;">Nhân viên chính thức</span>
                                    </label>
                                    <label class="width_135">
                                        <input type="checkbox" class="require-one-job-type input_margin" id="job_type2"  name="hinhthuc" value="1"  />
                                        <span style="color :#6495ed;">Bán thời gian</span>
                                    </label>
                                    <label class="width_100">
                                        <input type="checkbox" class="require-one-job-type input_margin" id="job_type3"  name="hinhthuc" value="1"  />
                                        <span style="color :#6495ed;">Thời vụ - Nghề tự do </span>
                                    </label>
                                    <label class="width_100" id="last_jobtype">
                                        <input type="checkbox" class="require-one-job-type input_margin" id="job_type4"  name="hinhthuc" value="1"  />
                                        <span style="color :#6495ed;">Thực tập</span>
                                    </label>
                                </div>
									</div>
									<div class="form-group" >
                                        <label style="color :#ee3b3b;">Hạn nhận hồ sơ:</label>
                                        <br></br>
                                        <label style="color :#8b4789;">Ngày bắt đầu*</label>
                                        <input type="date" name="ngaybatdautuyendung"required class="form-control">
                                        <label style="color :#8b4789;">Ngày kết thúc*</label>
                                        <input type="date" name="ngayketthuctuyendung"required class="form-control">
                                    
                                </div>
                                <div class="form-group" >
                                        <label style="color :blue;">Số lượng tuyển*</label>
                                      <input required type="text" name="soluongtuyen" class="form-control">
                                </div>
                                <div class="form-group" >
                                        <label style="color :blue;">Phúc lợi*</label>
                                       
                                       <div class="pContent">
							           <div class="cpbody manage-benefits">
									   <div class="item">
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_2" name="quyenloi" value="2" >
										<span><i class="fa fa-medkit"></i> Chế độ bảo hiểm</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_3" name="quyenloi" value="3" >
										<span><i class="fa fa-plane"></i> Du Lịch</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_8" name="quyenloi" value="8" >
										<span><i class="fa fa-usd"></i> Chế độ thưởng</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_9" name="quyenloi" value="9" >
										<span><i class="fa fa-user-md"></i> Chăm sóc sức khỏe</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_10" name="quyenloi" value="10" >
										<span><i class="fa fa-graduation-cap"></i> Đào tạo</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_11" name="quyenloi" value="11" >
										<span><i class="fa fa-line-chart"></i> Tăng lương</span>
									</label>
																		</div><div class="item bonus">									<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_1" name="quyenloi" value="1" >
										<span><i class="fa fa-laptop"></i> Laptop</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_4" name="quyenloi" value="4" >
										<span><i class="fa fa-money"></i> Phụ cấp</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_5" name="quyenloi" value="5" >
										<span><i class="fa fa-taxi"></i> Xe đưa đón</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_6" name="quyenloi" value="6" >
										<span><i class="fa fa-fighter-jet"></i> Du lịch nước ngoài</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_7" name="quyenloi" value="7" >
										<span><i class="fa fa-black-tie"></i> Đồng phục</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_12" name="quyenloi" value="12" >
										<span><i class="fa fa-credit-card"></i> Công tác phí</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_13" name="quyenloi" value="13" >
										<span><i class="fa fa-money"></i> Phụ cấp thâm niên</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_14" name="quyenloi" value="14" >
										<span><i class="fa fa-briefcase"></i> Nghỉ phép năm</span>
									</label>
																											<label>
										<input type="checkbox" class="input_margin" id="BENEFIT_ID_15" name="quyenloi" value="15" >
										<span><i class="fa fa-heartbeat"></i> CLB thể thao</span>
									</label>
									</div>
							
							        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-group" >
									<center>	<h1 style="color :#cd69c9">YÊU CẦU CHUNG</h1></center>

									</div>
									<div class="form-group" >
                                        <label style="color :blue">Giới tính:  </label>
                                     <label class="width_82">
												<input type="radio" class="input_margin" id="rnamnu" name="gioitinh" value="Cả nam và nữ" checked="checked" />
												<span>Nam/Nữ</span>
											</label>
											<label class="width_82">
												<input type="radio" class="input_margin" id="rnam" name="gioitinh" value="Nam"  />
												<span>Nam</span>
											</label>
											<label class="width_82" name="gender">
												<input type="radio" class="input_margin" id="rnu" name="gioitinh" value="Nữ"  />
												<span>Nữ</span>
											</label>
                                </div>
                                <div class="form-group" >
										<label style="color :blue">Số năm kinh nghiệm*</label>
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
                                        <label style="color :blue">Cấp bậc*</label>
                                        <select class="width_202" name="capbac" id="LEVEL_ID">
                                    <option value="">Chọn Cấp bậc</option>
                                    <option value="1" >Sinh viên/ Thực tập sinh</option>
                                    <option value="2" >Mới tốt nghiệp</option>                                                  
                                    <option value="3" >Nhân viên</option>                                                        <option value="4" >Trưởng nhóm / Giám sát</option>
                                    <option value="5" >Quản lý</option>
                                    <option value="6" >Phó Giám đốc</option>                                                     <option value="7" >Giám đốc </option>
                                    <option value="8" >Tổng giám đốc</option>                                                    <option value="9" >Chủ tịch / Phó Chủ tịch</option>                                                                                            </select>

                                    </div>
                                    <div class="form-group" >
										<label style="color :blue">Bằng cấp</label>
										<select required name="bangcap" class="form-control">
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
										<label style="color :blue">Ảnh đại diện cho nhà tuyển dụng*</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="source/backend/img/new_seo-10-512.png">
									</div>	                                                          
                                    <center><input type="submit" name="submit" value="Tạo tin tuyển dụng" class="btn btn-primary">
                                    

                                    <a href="{{route('themtintuyendung')}}" class="btn btn-danger">Hủy bỏ</a></center>
                                </div>
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

