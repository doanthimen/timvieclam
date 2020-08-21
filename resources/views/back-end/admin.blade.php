<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
#navbar{
    margin-top:50px;}
#tbl-first-row{
    font-weight:bold;}
#logout{
    padding-right:30px;}        
</style>
</head>
<body>

<div class="container">
    <div id="navbar" class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Xem User</a></li>
                        
                    </ul>
                     <p id="logout" class="navbar-text navbar-right"><a class="navbar-link" href="{{ route('logout') }}">Logout</a></p>
                    <p class="navbar-text navbar-right">{{ Auth::user()->name }}</p>
                   
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p class="pull-left">Tìm Thấy {{count($user)}} User</p>
              
            <table class="table table-striped">

                <tr id="tbl-first-row">
                
                    <td width="5%">STT</td>
                    <td width="30%">Tên User</td>
                    <td width="25%">Email</td>
                    <td width="25%">Phone</td>
                    <td width="5%">Level</td>
                    <td width="5%">Edit</td>
                    <td width="5%">Delete</td>
                </tr>
                 @foreach($user as $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->phone}}</td>
                    <td>{{$u->level}}</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                @endforeach
            </table>
            <div class="row" >{{$user->links()}}
            </div>
        </div>
    </div>
</div>

</body>
</html>
