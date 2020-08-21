<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>Xem hồ sơ </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('')}}source/hosonguoidung/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}source/hosonguoidung/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('')}}source/hosonguoidung/assets/css/style.css">
    
</head>



<body>

    <div id="home" class="container-fluid resume-container">

        <!--  ************************* Container Starts Here ************************** -->
          
          <div class="container">
              <div class="row">
                  <div class="col-xl-10 col-lg-12 resume-box">
                      <div class="row">
                          <div class="col-lg-4 col-md-12 basic-profile">
                            
                            <div class="row no-margin">
                                 <div class="col-lg-12 col-md-3 col-sm-3 col-12 no-padding">
                                     <img src="{{asset('')}}source/hosonguoidung/assets/images/{{$thongtin->hinhanh}}" alt="">
                                 </div>
                                 <div class="col-lg-12 col-md-9 col-sm-9 ccol-12 baci-cc no-padding">
                                     <div class="basic-detail no-padding">
                                           <h2>{{Auth::user()->name}}</h2>
                                            @foreach($nganhnghe as $nganh)

                                           <p>Ngành Nghề:{{$nganh->nganh}}</p>
                                          
                                           @endforeach
                                           <a style="color :#6495ED;" class="txt2" href="{{ route('nguoidung') }}">
                                            Quay lại
                                           </a>
                                           <br></br>
                                            <a style="color :#6495ED;" class="txt2" href="{{ route('logout') }}">
                                            Đăng xuất tài khoản
                                           </a>
                                      </div>
                                 </div>
                            </div>
                            
                              
                              
                          </div>
                          <div class="col-lg-8 col-md-12 detail-profile no-padding">
                             <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home" aria-selected="true">Thông tin cá nhân</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cập nhật thông tin</a>
                                  </li>
                                </ul>
                                
                                <div class="tab-content" id="myTabContent">
                                 
                                  <!--  ************************* Home Tab Starts Here ************************** -->
                                  <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                                      
                                      <div class="detal-jumbo">
                                          <h3>Giới thiệu</h3>
                                          <p>{{$thongtin->gioithieubanthan}}</p>
                                      </div>
                                     
                                      
                                      <div class="jumbo-address">
                                         <div class="row">
                                                  <div class="col-sm-6 no-padding">
                                              
                                                  <table class="addrss-list">
                                                      <tr>
                                                          <th>E-mail:</th>
                                                          <td>{{$thongtin->email}}</td>
                                                      </tr>
                                                      <tr>
                                                          <th>Ngày-sinh:</th>
                                                          <td>{{$thongtin->ngaysinh}}</td>
                                                      </tr>
                                                      
                                                      <tr>
                                                                                              
                                                        @foreach($khuvuc as $kv)

                                                          <th>Khu Vực:</th>
                                                          <td>{{$kv->khuvuc}}</td>
                                                      </tr>
                                                       @endforeach
                                                  </table>
                                                 
                                                     
                                          </div>
                                          <div class="col-sm-6 no-padding">
                                               <table class="addrss-list">
                                                      <tr>
                                                          <th>Hôn Nhân:</th>
                                                          <td>{{$thongtin->honnhan}}</td>
                                                      </tr>
                                                      <tr>
                                                          <th>Trình Độ:</th>
                                                          <td>{{$thongtin->trinhdo}}</td>
                                                      </tr>
                                                      <tr>
                                                          <th>Kinh Nghiệm:</th>
                                                          <td>{{$thongtin->kinhnghiem}}</td>
                                                      </tr>
                                                  </table>
                                          </div>
                                         </div>
                                     
                                      </div>
                                      
                                      
                                      
                                      
                                      
                                  </div>
                                  
                                  
                                     <!-- ######## Home Tab End ####### -->  
                                   
                                    <!--  ************************* Profile Tab Starts Here ************************** -->
                                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                      <div class="profile-desic">
                                          <p>Hello, I’m UI/UX Developer / Wordpress Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
                                      </div>
                                      <div class="sec-title">
                                          <h2>Services</h2>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-2 col-2 serv-logo">
                                              <i class="fab fa-delicious"></i>
                                          </div>
                                          <div class="col-sm-10 col-10">
                                              <h5>Graphic Design</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </div>
                                      <div class="service no-margin rit-serv row">
                                          
                                          <div class="col-sm-10 col-10">
                                              <h5>Website Design</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                          <div class="col-sm-2 col-2 serv-logo-right">
                                              <i class="fas fa-code"></i>
                                          </div>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-2 serv-logo">
                                             <i class="fab fa-chrome"></i>
                                          </div>
                                          <div class="col-sm-10 col-10">
                                              <h5>Web Development</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </div>
                                      <div class="service no-margin rit-serv row">
                                          
                                          <div class="col-sm-10 col-10">
                                              <h5>Android Development</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                          <div class="col-sm-2 col-2 serv-logo-right">
                                              <i class="fab fa-android"></i>
                                          </div>
                                      </div><div class="service no-margin row">
                                          <div class="col-sm-2 col-2 serv-logo">
                                             <i class="fab fa-app-store-ios"></i>
                                          </div>
                                          <div class="col-sm-10 col-10">
                                              <h5>IOS Design</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </div>
                                      <div class="service no-margin rit-serv row">
                                          
                                          <div class="col-sm-10 col-10">
                                              <h5>Ionic Development</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                          <div class="col-sm-2 col-2 serv-logo-right">
                                              <i class="fas fa-mobile-alt"></i>
                                          </div>
                                      </div>
                                  </div>
                                     <!-- ######## Profile Tab End ####### -->  
                                     
                                   <!--  ************************* Resume Tab Starts Here ************************** -->
                                  <div class="tab-pane fade" id="resume" role="tabpanel" aria-labelledby="contact-tab">
                                      <div class="sec-title">
                                          <h2>Education Details</h2>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-3 resume-dat serv-logo">
                                              <h6>2013-2015</h6>
                                            <p>Master Degree</p>
                                          </div>
                                          <div class="col-sm-9">
                                              <h5>Cambridg University</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-3 resume-dat serv-logo">
                                              <h6>2013-2015</h6>
                                            <p>Bacholers Degree</p>
                                          </div>
                                          <div class="col-sm-9">
                                              <h5>Anna University</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-3 resume-dat serv-logo">
                                              <h6>2013-2015</h6>
                                            <p>High School</p>
                                          </div>
                                          <div class="col-sm-9">
                                              <h5>A.M.H.S.S</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-3 resume-dat serv-logo">
                                              <h6>2013-2015</h6>
                                            <p>School</p>
                                          </div>
                                          <div class="col-sm-9">
                                              <h5>Anna University</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </div>
                                  </div>
                                   <!-- ######## Resume Tab End ####### -->  
                                 
                                   <!--  ************************* Portfolio Tab Starts Here ************************** -->
                                   <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="contact-tab">
                                      <div class="row no-margin gallery">
                                          <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_01.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_02.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_03.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_04.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_05.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_06.jpg" alt="">
                                          </div>
                                           <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_10.jpg" alt="">
                                          </div>
                                           <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_08.jpg" alt="">
                                          </div>
                                           <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_09.jpg" alt="">
                                          </div>
                                          
                                      </div>
                                  </div>
                                   <!-- ######## Portfolio Tab End ####### -->  
                                   
                                   <!--  ************************* Contact Tab Starts Here ************************** -->
                                   <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                      <div class="row no-margin map">
                                          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2202878.234882144!2d-9.006530870300464!3d28.238959706292626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1530157241008"  frameborder="0" style="border:0" allowfullscreen></iframe>
                                      </div>
                                      
                                      <div class="jumbo-address">
                                         <div class="row">
                                                  <div class="col-sm-6 no-padding">
                                              
                                                  <table class="addrss-list">
                                                      <tr>
                                                          <th>E-mail</th>
                                                          <td>info@yourdomain.com</td>
                                                      </tr>
                                                      <tr>
                                                          <th>Phone</th>
                                                          <td>+9878676587</td>
                                                      </tr>
                                                      <tr>
                                                          <th>Date of birth</th>
                                                          <td>09-06-1989</td>
                                                      </tr>
                                                  </table>
                                            
                                          </div>
                                          <div class="col-sm-6 no-padding">
                                               <table class="addrss-list">
                                                      <tr>
                                                          <th>Address</th>
                                                          <td>112 - Roos Street, Nagercoil</td>
                                                      </tr>
                                                      <tr>
                                                          <th>Website</th>
                                                          <td>www.yourdomain.com</td>
                                                      </tr>
                                                      <tr>
                                                          <th>Languages</th>
                                                          <td>English,French,Germany</td>
                                                      </tr>
                                                  </table>
                                          </div>
                                         </div>
                                     
                                      </div>
                                  </div>
                                   <!-- ######## Contact Tab End ####### -->  
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>                                                                                                                                                                                                 
                                                                                                                                              
        <!-- ######## Container End ####### -->  
        </div>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('')}}source/hosonguoidung/assets/js/jquery-3.2.1.min.js"></script>
        <script src="{{asset('')}}source/hosonguoidung/assets/js/popper.js"></script>
        <script src="{{asset('')}}source/hosonguoidung/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('')}}source/hosonguoidung/assets/js/script.js"></script>
</body>

</html>