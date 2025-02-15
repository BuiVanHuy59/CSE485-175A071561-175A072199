<?php
    include('functions.php');
        if (!isLoggedIn()) {
            header('location: login.php');
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quên mật khẩu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top:30px">
  <header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:20px;"> 
    <div class="col-sm-3">
    <img class="float-left" src="images/logo_ntt.png" alt="Logo"> 
    </div>
    <div class="col-sm-7">
    <h1 class="blue-text mb-4 font-bold">Quên mật khẩu</h1>
    </div>
    <nav class="col-sm-2">
        <div class="btn-group-vertical btn-group-sm" role="group" aria-label="Button Group">
            <button type="button" class="btn btn-secondary" 
            onclick="location.href = 'register-page.php'" >Đăng ký</button>
            <button type="button" class="btn btn-secondary" 
            onclick="location.href = 'login.php'" >Đăng nhập</button>  
            <button type="button" class="btn btn-secondary" 
            onclick="location.href = 'index.php'">Hủy bỏ</button>
        </div>
    </nav>
  </header>
  <div class="row" style="padding-left: 0px;">
    <div class="col-sm-12 text-center">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Một mật khẩu mới đã được gửi tới email mà bạn cung cấp. Xin hãy kiểm tra hòm thư của bạn.
        </div>
      <a href="index.php">Trở về trang chủ</a>
    </div>
  </div>
</div>
</body>
</html>
