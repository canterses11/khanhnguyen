<?php
    $ketnoi = mysqli_connect("localhost","root","","wedalbum");
    if(!$ketnoi){
        exit("kết nối cơ sở dữ liệu không thành công");
    }
    //echo $_FILES['file_h']['name'];
    move_uploaded_file($_FILES['file_h']['tmp_name'],'img/'.$_FILES['file_h']['name']);
    $img = $_FILES['file_h']['name'];
    $sql= "INSERT INTO `anh animal`(HINH) values('$img')";
    $ketqua = mysqli_query($ketnoi, $sql);
    echo"    <script>";
          if($ketqua){ 
        echo    "alert('Thêm Hình thành công');";
    }
    else{
        echo    "alert('Thêm Hình thất bại');";
    }
    echo "window.location= 'themanimal.php';";
echo "</script>"
?>