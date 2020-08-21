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
                                  <a href="index.html"><img src="source/assets/img/logo/logotrangchu.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                                            <li><a href="{{route('men')}}">Giới Thiệu</a></li>
                                            <li><a href="{{route('men')}}">Việc Làm</a></li>
                                            <li><a href="{{route('men')}}">Công ty</a></li>
                                        
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
