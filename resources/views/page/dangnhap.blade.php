
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập|Users</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="source/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="source/login/css/main.css">
<!--===============================================================================================-->

<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<h4><a style="color :blue;" href="{{ route('trang-chu') }}"><i class="fa fa-home"></i> Trang Chủ</a></h4>
						<h4><a style="color :red;" href="{{ route('signin') }}"><i class="fa fa-file"></i> Đăng ký</a></h4>
						<br>
					</ul>
				</div>
				
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
	</head>
	<div class="limiter">

		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form action="{{route('login')}}" method="post" class="login100-form validate-form">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				   @csrf     
                      

				
					<span class="login100-form-title p-b-26">
						<h4 style="color: violet; font-family: sans-serif; font-weight: bold">ĐĂNG NHẬP VỚI TƯ CÁCH NGƯỜI TÌM VIỆC</h4>
						<br>
						<label style="color: blue; margin-top: 5px;font-size: 20px; font-weight: 500" \\>
						@if (Session::has('message'))
						<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}
						</div>
						@endif</label>
							
			</span>

					<div class="wrap-input100 validate-input m-b-16">
							<label style="color: blue; margin-top: 5px;font-size: 20px; font-weight: 500" for="email">Email của bạn</label>
							<input style="margin-top: 5px;" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" name="email">
							<br>
							@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
						</div>
						<div class="wrap-input100 validate-input m-b-16">
							<label style="color: blue; margin-top: 5px;font-size: 20px; font-weight: 500" for="password">Mật khẩu</label>
							<input style="margin-top: 5px;" type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">
							 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror
						</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="container-login100-form-btn p-t-25"></div>
							<button type="submit" class="login100-form-btn">
								Đăng nhập
							</button>
						</div>
					</div>
					<div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1">
							Or login with
						</span>
					</div>

					<hr>
					<div class="form-group row mb-0">
					 <div class="col-md-8 offset-md-4">
					    <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
					</div>
					</div>
					

					<a href="#" class="btn-google m-b-10">
						<img src="source/login/images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>

					<div class="text-center p-t-115">
						<span style="color: black;" class="txt1">
							Bạn muốn đăng nhập bằng tài khoản nhà tuyển dụng
						</span>

						<a style="color: red;" class="txt2" href="{{route('dangnhap')}}">
							Click
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->	
	<script src="source/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="source/login/vendor/bootstrap/js/popper.js"></script>
	<script src="source/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="source/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="source/login/js/main.js"></script>

	

</body>
</html>
