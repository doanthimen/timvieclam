@extends('master')
@section('content')
<main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="source/assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <p data-animation="fadeInLeft" data-delay=".4s">Chào mừng bạn đến với trang timvieclamnhanh.tk</p>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s" >Bạn muốn tìm kiếm công việc cho bản thân</h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="{{route('signin')}}" class="btn hero-btn">Bấm vào đây đăng kí tài khoản tìm việc</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height d-flex align-items-center" data-background="source/assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <p data-animation="fadeInLeft" data-delay=".4s">Chào mừng bạn đến với trang timvieclamnhanh.tk</p>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s" >Đăng ký tài khoản dành cho nhà tuyển dụng tại đây</h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="{{route('tuyendung')}}" class="btn hero-btn">Đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Team-profile Start --> 
   
        <div class="team-profile team-padding">
            <div class="container">
                <h1 style="color :red;">Tin tuyển dụng mới nhất:</h1>
                <p class="pull-left">Tìm Thấy {{count($new_tintuyendung)}} tin tuyển</p>
                <div class="row">
                     @foreach($new_tintuyendung as $new)

                    <div class="col-xl-4 col-lg-4 col-md-6">

                        <div class="single-profile mb-30">

                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    
                                    <img src="source/image/congty/{{$new->img}}" alt="" height="250px">
                                </div>
                                <div class="profile-caption">
                                    <h4><a href="{{route('chitietcongviec',$new->idTinTuyenDung)}}">{{$new->tieude}}</a></h4>
                                     <h6>Công việc:{{$new->congviectuyen}}</h6>
                                <p>Số lượng tuyển:{{$new->soluongtuyen}}</p>
                                <p>Mức lương:{{$new->luongmin}}Triệu-{{$new->luongmax}}Triệu</p>
                                </div>
                            </div>

                    </div>

                        </div>
                         @endforeach
                     </div>
                               <div class="row" >{{$new_tintuyendung->links()}}
                    </div>

  <div class="team-profile team-padding">
            <div class="container">
                <h1 style="color :#00FFFF;">Tin tuyển dụng:</h1>
                <p class="pull-left">Tìm Thấy {{count($tintuyendung)}} tin tuyển</p>
                <div class="row">
                     @foreach($tintuyendung as $tin)

                    <div class="col-xl-4 col-lg-4 col-md-6">

                        <div class="single-profile mb-30">

                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="source/image/congty/{{$tin->img}}" alt="" height="250px">
                                </div>
                                <div class="profile-caption">
                                    <h4><a href="{{route('chitietcongviec',$new->idTinTuyenDung)}}">{{$tin->tieude}}</a></h4>
                                     <h6>Công việc:{{$tin->congviectuyen}}</h6>
                                <p>Số lượng tuyển:{{$tin->soluongtuyen}}</p>
                                <p>Mức lương:{{$tin->luongmin}}Triệu-{{$tin->luongmax}}Triệu</p>
                                </div>
                            </div>

                    </div>

                        </div>
                         @endforeach
                     </div>
                               <div class="row" >{{$new_tintuyendung->links()}}
                    </div>

                     
                    
                  
        <!-- Team-profile End-->

     

        <!-- services Area Start-->
        <div class="services-area section-padding2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-icon">
                                <span class="flaticon-checklist"></span>
                            </div>
                            <div class="services-caption">
                                <h4>Strategic Planning</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-icon">
                                <span class="flaticon-audit"></span>
                            </div>
                            <div class="services-caption">
                                <h4>Trades & stocks</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-icon">
                                <span class="flaticon-checklist-1"></span>
                            </div>
                            <div class="services-caption">
                                <h4>Audit & Assurance</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- button -->
                <div class="row justify-content-center">
                    <div class="room-btn pt-50">
                        <a href="services.html" class="border-btn">More Services</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- services Area End-->
        
        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container-fluid">
                <div class="row">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3>Completed Cases</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali
                                quUt enim ad minim veniam.
                                quis nostrud exercitation ullamco laboris 
                                nierci si ut.</p>
                            <a href="gallery.html" class="border-btn border-btn2">See more</a>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class=" completed-active owl-carousel"> 
                            <div class="single-cases-img">
                                <img src="source/assets/img/service/completed_case_1.png" alt="">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                    <h4><a href="case_details.html">Marketing Strategy</a></h4>
                                    <p>Completely impact synergistic mindshare whereas premium services.</p>
                                    <span>Advisory</span>
                               </div>
                            </div>
                            <div class="single-cases-img">
                                <img src="source/assets/img/service/completed_case_2.png" alt="">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                   <h4><a href="case_details.html">Marketing Strategy</a></h4>
                                    <p>Completely impact synergistic mindshare whereas premium services.</p>
                                    <span>Advisory</span>
                               </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Completed Cases end -->

        <!-- Testimonial Start -->
        <div class="testimonial-area fix">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="source/assets/img/logo/testimonial.png" class="ani-btn " alt="">
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>You can’t succeed if you just do what others do and 
                                        follow the well-worn path. You need to create a new and 
                                        original path for yourself. </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="source/assets/img/logo/testimonial.png"  class="ani-btn" alt="">
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>You can’t succeed if you just do what others do and 
                                        follow the well-worn path. You need to create a new and 
                                        original path for yourself. </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <div class="recent-area section-paddingt">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Recent News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="source/assets/img/recent/rcent_1.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Business planing</span>
                                <h4><a href="single-blog.html">Amazing Places To Visit In Summer</a></h4>
                                <p>Nov 30, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="source/assets/img/recent/rcent_2.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Audit</span>
                                <h4><a href="single-blog.html">Amazing Places To Visit In Summer</a></h4>
                                <p>Nov 30, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="source/assets/img/recent/rcent_3.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Business planing</span>
                                <h4><a href="single-blog.html">Amazing Places To Visit In Summer</a></h4>
                                <p>Nov 30, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Area End-->

        <!-- Request Back Start -->
        <div class="request-back-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="request-content">
                            <h3>Request for  Call Back</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <!-- Contact form Start -->
                        <div class="form-wrapper">
                            <form id="contact-form" action="#" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box  mb-30">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box mb-30">
                                            <input type="text" name="email" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 mb-30">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">Services</option>
                                                <option value="">Services-1</option>
                                                <option value="">Services-2</option>
                                                <option value="">Services-3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <button type="submit" class="send-btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>     <!-- Contact form End -->
                </div>
            </div>
        </div>
        <!-- Request Back End -->   
    <!-- JS here -->      
    
</html>

@endsection