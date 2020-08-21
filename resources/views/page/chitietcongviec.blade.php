<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tìm việc làm nhanh </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}/source/assets/img/favicon.ico">

        <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('')}}/source/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="{{asset('')}}/source/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="{{asset('')}}/source/assets/css/flaticon.css">
            <link rel="stylesheet" href="{{asset('')}}/source/assets/css/slicknav.css">
            <link rel="stylesheet" href="{{asset('')}}/source/assets/css/animate.min.css">
            <link rel="stylesheet" href="{{asset('')}}/source/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="{{asset('')}}/source/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="{{asset('')}}/source/assets/css/themify-icons.css">
            <link rel="stylesheet" href="{{asset('')}}/source/assets/css/slick.css">
            <link rel="stylesheet" href="{{asset('')}}/source/assets/css/nice-select.css">
            <link rel="stylesheet" href="{{asset('')}}/source/assets/css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('')}}/source/chitiet/fonts/icomoon/style.css">

  <link rel="stylesheet" href="{{asset('')}}/source/chitiet/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('')}}/source/chitiet/css/jquery-ui.css">
  <link rel="stylesheet" href="{{asset('')}}/source/chitiet/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{asset('')}}/source/chitiet/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{asset('')}}/source/chitiet/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="{{asset('')}}/source/chitiet/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="{{asset('')}}/source/chitiet/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="{{asset('')}}/source/chitiet/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="{{asset('')}}/source/chitiet/css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{asset('')}}/source/chitiet/css/style.css">
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('')}}/source/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
      <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li><i class="fas fa-map-marker-alt"></i>06 Đông Hồ P4 Quận 8</li>
                                        <li><i class="fas fa-envelope"></i>mendoan.7395@gmail.com</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                       <div class="header-info-left">
                                        <h4><a style="color :#9400D3;"><i class="fa fa-search"></i> Tìm kiếm</a></h4>
                        <form role="search" method="get" id="searchform" action="/">
                            <input  type="text" value="" name="s" id="s" placeholder="Nhập công việc cần tìm" />

                            <button style="color :#000000;"><i></i>Tìm</button>
                        </form>
                        
                    </div>

                                       
                                    </ul>
                                </div>

                            </div>
                       </div>
                   </div>
                </div>

               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="index.html"><img src="{{asset('')}}/source/assets/img/logo/logotrangchu.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                                            <li><a href="about.html">Giới Thiệu</a></li>
                                            <li><a href="{{route('vieclam')}}">Việc Làm</a></li>
                                            <li><a href="cases.html">Công ty</a></li>
                                        
                                            <li><a href="#">Đăng Kí</a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('signin')}}">Người tìm việc</a></li>
                                                    <li><a href="{{route('tuyendung')}}">Nhà tuyển dụng đăng kí</a></
                                                </ul>

                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                             
                            <div class="col-xl-2 col-lg-3 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                <li style="border: none;">
                                    <button style="margin-top: 4px; margin-left: 4px;" type="button" class="btn btn-info" onclick="event.preventDefault();
                                    document.getElementById('signup-form').submit();">Đăng Nhập
                                    </button>
                                </li>    
                                <form id="signup-form" action="{{ route('login') }}" method="GET" style="display: none;">
                                    
                                </form>
                                   
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
<script src="{{asset('')}}/source/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{asset('')}}/source/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{asset('')}}/source/assets/js/popper.min.js"></script>
        <script src="{{asset('')}}/source/assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{asset('')}}/source/assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('')}}/source/assets/js/owl.carousel.min.js"></script>
        <script src="{{asset('')}}/source/assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="{{asset('')}}/source/assets/js/gijgo.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="{{asset('')}}/source/assets/js/wow.min.js"></script>
        <script src="{{asset('')}}/source/assets/js/animated.headline.js"></script>
        <script src="{{asset('')}}/source/assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('')}}/source/assets/js/jquery.scrollUp.min.js"></script>
        <script src="{{asset('')}}/source/assets/js/jquery.nice-select.min.js"></script>
        <script src="{{asset('')}}/source/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="{{asset('')}}/source/assets/js/contact.js"></script>
        <script src="{{asset('')}}/source/assets/js/jquery.form.js"></script>
        <script src="{{asset('')}}/source/assets/js/jquery.validate.min.js"></script>
        <script src="{{asset('')}}/source/assets/js/mail-script.js"></script>
        <script src="{{asset('')}}/source/assets/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="{{asset('')}}/source/assets/js/plugins.js"></script>
        <script src="{{asset('')}}/source/assets/js/main.js"></script>
             <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

            <script src="{{asset('')}}/source/chitiet/js/jquery-3.3.1.min.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/jquery-migrate-3.0.1.min.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/jquery-ui.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/popper.min.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/bootstrap.min.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/owl.carousel.min.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/jquery.stellar.min.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/jquery.countdown.min.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/bootstrap-datepicker.min.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/jquery.easing.1.3.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/aos.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/jquery.fancybox.min.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/jquery.sticky.js"></script>
            <script src="{{asset('')}}/source/chitiet/js/jquery.mb.YTPlayer.min.js"></script>




            <script src="{{asset('')}}/source/chitiet/js/main.js"></script>
            </body>
    <main>

         <div  class="intro-section small" style="background-image : url('{{asset('')}}/source/chitiet/images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
              <div class="intro">
              <h1>Chi tiết tuyển dụng</h1>
              
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
             <center> <img src="{{asset('')}}/source/image/congty/{{$congviec->img}}" alt="Image" height="500" width="500"class="img-fluid"></center>
            </div>
            <div class="col-lg-5 ml-auto">
              <span class="caption">Thông tin tuyển:</span>
              <h2 class="title-with-line">{{$congviec->tieude}}</h2>

                <p class="mb-4">Mô tả công việc:</p>
              <p class="mb-4">{{$congviec->motacongviec}}.</p>
               <p class="mb-4">Yêu cầu công việc:</p>
                <p class="mb-4">{{$congviec->yeucaucongviec}}</p>


              <div class="row">
                <div class="col-md-6">
                  <ul class="list-unstyled ul-arrow">
                    <li></li>
                     <li style="color: blue" >Công việc tuyển:</li>
                     <li style="color: black" >{{$congviec->congviectuyen}}</li>
                     <li style="color: blue" >Giới tính:</li>
                     <li style="color: black" >{{$congviec->gioitinh}}</li>
                     <li style="color: blue" >Số lượng tuyển dụng:</li>
                      <li style="color: black" >{{$congviec->soluongtuyen}}</li>
                    <li style="color: blue" >Ngày bắt đầu:</li>
                    <li style="color: black" >{{$congviec->ngaybatdautuyendung}}</li>
                    <li style="color: blue" >Ngày kết thúc tuyển:</li>
                    <li style="color: black" >{{$congviec->ngayketthuctuyendung}}</li>
                  </ul>

                </div>
                <div class="col-md-6">
                  <ul class="list-unstyled ul-arrow float-left">
                    <li style="color: blue" >Mức lương:</li>
                    <li style="color: black" >{{$congviec->luongmin}}triệu-{{$congviec->luongmax}}triệu</li>
                    <li style="color: blue" >Bằng cấp:</li>
                    <li style="color: black" >{{$congviec->bangcap}}</li>
                    <li style="color: blue" >Cấp bậc:</li>
                    <li style="color: black" >{{$congviec->capbac}}</li>
                    
                  </ul>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
        <!-- Services Details End -->
    </main>


    </html>