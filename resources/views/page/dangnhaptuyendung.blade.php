
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="source/dangnhap/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/dangnhap/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/dangnhap/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/dangnhap/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/dangnhap/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="source/dangnhap/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/dangnhap/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/dangnhap/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="source/dangnhap/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/dangnhap/css/util.css">
	<link rel="stylesheet" type="text/css" href="source/dangnhap/css/main.css">
<!--===============================================================================================-->

<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<h4><a style="color :red;" href="{{ route('trang-chu') }}"><i class="fa fa-home"></i> Trang chu</a></h4>
						<li><a href=""><i class="fa fa-home"></i> 240 Phạm Hữu Lầu ,Phú Mỹ Quận 7</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 03675120xx</a></li>
					</ul>
				</div>
				
					</ul>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
	</head>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="{{route('dangnhap')}}" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				@csrf

				
					<span class="login100-form-title p-b-26">
						<h4 style="color: turquoise; font-family: sans-serif; font-weight: bold">ĐĂNG NHẬP VỚI TƯ CÁCH NHÀ TUYỂN DỤNG</h4>
						<br>
						<label style="color: red; margin-top: 5px;font-size: 20px; font-weight: 500">
			                @if (Session::has('message'))
							<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}
							</div>
						@endif</label>
							
					</span>

					<div class="form-block">
							<label style="color: gray; margin-top: 5px;font-size: 20px; font-weight: 500" for="email">Email của bạn</label>
							<input style="margin-top: 5px;" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" name="email">
							<br>
							@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
						</div>
						<div class="form-block">
							<label style="color: gray; margin-top: 5px;font-size: 20px; font-weight: 500" for="password">Mật khẩu</label>
							<input style="margin-top: 5px;" type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">
							 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror
						</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>

							<button type="submit" class="login100-form-btn">
								Đăng nhập
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Bạn muốn đăng nhập bằng tài khoản người dùng
						</span>

						<a class="txt2" href="{{route('login')}}">
							Click
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="source/dangnhap/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="source/dangnhap/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="source/dangnhap/vendor/bootstrap/js/popper.js"></script>
	<script src="source/dangnhap/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="source/dangnhap/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="source/dangnhap/vendor/daterangepicker/moment.min.js"></script>
	<script src="source/dangnhap/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="source/dangnhap/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="source/dangnhap/js/main.js"></script>

</body>
</html>
