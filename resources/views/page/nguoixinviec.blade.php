<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Đăng nhập | Users</title>
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
            <li class="active"><a style="color :black;" href="{{ route('nguoidung') }}"><i class="fa fa-file"></i> Trang Chủ</a></li>
            
            <li><a style="color :black;" href="{{route('thongtinnguoidung')}}"><i class="fa fa-file"></i> Tạo Hồ Sơ</a></li>
             
              @foreach($thongtinhoso as $tt)
            <li><a style="color :black;" href="{{route('xemthongtin',$tt->id)}}"><i class="fa fa-file"></i> Xem Hồ Sơ</a></li>
             @endforeach
        </ul>
        
    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">       
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Trang chủ</h1>
            </div>
     
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-red">
                    <div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Lịch</div>
                    <div class="panel-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div><!--/.col-->
        </div><!--/.row-->
    </div>  <!--/.main-->
          

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
        })
    </script>   
</body>

</html>
