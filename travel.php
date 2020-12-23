<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ảnh Du Lịch Đẹp</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/anh.css">
    <link rel="stylesheet" href="">
</head>
<?php
    include('ham.php');
    $ketnoi = mysqli_connect("localhost","root","","wedalbum");
    if(!$ketnoi){
        exit("kết nối cơ sở dữ liệu không thành công");
    }
    $sql = "SELECT ID, HINH FROM `anh travel` ";
    $ketqua = mysqli_query($ketnoi , $sql);

 ?>
<body>
    <div class="container-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img class="logo" src="img/logo.png" alt="">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html">Pixel19C</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Trang Chủ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Giới Thiệu</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Danh Mục Ảnh
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="animal.php">Animal</a></li>
                      <li><a class="dropdown-item" href="travel.php">TRAVEL</a></li>
                      <li><a class="dropdown-item" href="water.php">WATER</a></li>
                      <li><a class="dropdown-item" href="holiday.php">HOLIDAY</a></li>
                    </ul>
                  </li>
                  </ul>
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Đăng Nhập</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link" href="usertravel.html">Admin</a>
                      </li>
                  </ul>
              </div>
            </div>
        </nav>
        <div class="row">
        <?php 
           while($row = mysqli_fetch_array($ketqua)){
                echo sanpham($row['HINH']);
           }
      ?>
        </div>
    </div>
</body>
<script src="bootstrap/bootstrap.min.js"></script>
<script src="bootstrap/popper.min.js"></script>
</html>