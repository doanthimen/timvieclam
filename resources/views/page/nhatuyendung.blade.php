<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Nhà tuyển dụng đăng kí</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- MATERIAL DESIGN ICONIC FONT -->
        <link rel="stylesheet" href="source/dangky/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

        <!-- STYLE CSS -->
        <link rel="stylesheet" href="source/dangky/css/style.css">
    </head>

    <body>

        
            <div class="inner">
               
                <div class="inner">
                    <img src="source/dangky/images/12345.jpg" align="top" height="600" width="650" alt="">
                </div>

              <form action="{{route('tuyendung')}}" method="post" class="beta-form-checkout">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        @csrf
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                               
                            </div>
                        @endif
                      <h3 style="color: purple; font-family: sans-serif; font-weight: bold">ĐĂNG KÝ TÀI KHOẢN NHÀ TUYỂN DỤNG</h4>
                    
                             <div class="form-block">
                            <label style="margin-top: 10px;font-size: 20px; font-weight: 500" for="email">Email (bắt buộc)</label>
                            <input class="form-control" style="margin-top: 5px;" type="email" id="email" name="email" required>
                        </div>

                        <div class="form-block">
                            <label style="margin-top: 10px;font-size: 20px; font-weight: 500" for="your_last_name">Tên người dùng</label>
                            <input class="form-control" style="margin-top: 5px;" type="text" id="your_last_name" name="username" required>
                        </div>
                        
                        <div class="form-block">
                            <label style="margin-top: 10px;font-size: 20px; font-weight: 500" for="phone">Số điện thoại</label>
                            <input class="form-control" style="margin-top: 5px;" type="text" id="phone" name="phone" required>
                        </div>
                        <div class="form-block">
                            <label style="margin-top: 10px;font-size: 20px; font-weight: 500" for="phone">Mật khẩu</label>
                            <input class="form-control" style="margin-top: 5px;" type="password" id="phone" name="password" required>
                        </div>
                        <div class="form-block">
                            <label style="margin-top: 10px;font-size: 20px; font-weight: 500" for="phone">Xác nhận mật khẩu</label>
                            <input class="form-control" style="margin-top: 5px;" type="password" id="phone" name="password_confirmation" required>
                        </div>
                     
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Đăng kí</button>
                        </div>
                        <center>
                            <br>
                            <h4 style="color: red; font-family: sans-serif; font-weight: bold">@foreach($errors->all() as $er)
                         <br>

                                {{$er}}
                         @endforeach</h4>


                          <h4 style="color: blue; font-family: sans-serif; font-weight: bold">@if (Session::has('ok'))
                            <div class="alert alert-success">
                                {{ Session::get('ok') }}
                            </div>
                            <a class="txt2" href="{{route('dangnhap')}}">
                            Click
                        </a>
                        @endif</h4>

                           

                         
                         </center>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
        
    </body>
</html>

@section('script')
<!-- include js files -->

@endsection