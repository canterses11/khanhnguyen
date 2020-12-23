<?php
     $ketnoi = mysqli_connect("localhost","root","","wedalbum");
     if(!$ketnoi){
         exit("kết nối cơ sở dữ liệu không thành công");
     }
    $idcanxoa = $_GET['idxoa'];
    $sql = "DELETE FROM `anh holiday` WHERE id= $idcanxoa";
    $ketqua = mysqli_query($ketnoi , $sql);
    echo"    <script>";
          if($ketqua){ 
        echo    "alert('xóa Hình thành công');";
    }
    else{
        echo    "alert('xóa Hình thất bại');";
    }
    echo "window.location= 'quantriholiday.php';";
echo "</script>"
?>