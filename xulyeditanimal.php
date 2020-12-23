<?php
    $ketnoi = mysqli_connect("localhost","root","","wedalbum");
    if(!$ketnoi){
        exit("kết nối cơ sở dữ liệu không thành công");
    }
    if(!empty($_FILES['file_h'])){
        move_uploaded_file($_FILES['file_h']['tmp_name'],'img/'.$_FILES['file_h']['name']);
        $img = $_FILES['file_h']['name'];
     }else{
         $img = $_POST['hinhOld'];
     }
    $idcansua = $_POST['idedit'];
    $sql= "UPDATE  `anh animal` set HINH='$img' WHERE ID = $idcansua";
    // echo $sql;
    $ketqua = mysqli_query($ketnoi, $sql);
    echo"    <script>";
          if($ketqua){ 
        echo    "alert('cập nhật Hình thành công');";
    }
    else{
        echo    "alert('cập nhật Hình thất bại');";
    }
    echo "window.location= 'quantrianimal.php';";
echo "</script>"
?>
