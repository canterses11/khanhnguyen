<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css">
</head>
 <?php
 $ketnoi = mysqli_connect("localhost","root","","wedalbum");
 if(!$ketnoi){
     exit("kết nối cơ sở dữ liệu không thành công");
 }
 $idcansua = $_GET['idsua'];
 $sql = "SELECT ID, HINH FROM `anh water` WHERE ID = $idcansua";
 $ketqua = mysqli_query($ketnoi,$sql);
$row = mysqli_fetch_array($ketqua);
 ?>
<body>
        <div class="container">
            <div class="title">
            <h1> Form cật nhật Hình</h1>
        </div>
        <form action="xulyeditwater.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Hình Ảnh :</td>
                    <td><input type="file" name="file_h"  onchange="showImage(this)"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><img id="hinhtam" src="img/<?php echo $row['HINH'];?>" width="50px" alt=""></td>
                </tr>
                <tr>
                <input type="hidden" name="hinhOld" value="<?php echo $row['HINH']; ?>"> 
                 <input type="hidden" name="idedit" value="<?php echo $row['ID']; ?>"> 
                    <td><input type="submit" value="Cật nhật Hình"></td>
                </tr>
            </table>
        </form>    
        </div>
        <script>
            function showImage(t){
                document.getElementById('hinhtam').src = window.URL.createObjectURL(t.files[0]);
            }
        </script>
</body>
</html>