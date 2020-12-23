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
 $sql = "SELECT ID, HINH FROM `anh water`";
 $ketqua = mysqli_query($ketnoi , $sql);
 ?>
<body>
        <div class="container">
            <div class="title">
            <h1> Form Thêm Hình Ảnh</h1>
        </div>
        <form action="xulythemwater.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Hình Ảnh:</td>
                    <td><input type="file" name="file_h" required></td>
                </tr>
               <br>
                <tr>
                    <td><input type="submit" value="Thêm Mới"></td>
                    <td><a href="quantriwater.php">Quay Lại</a></td>
                </tr>
            </table>
        </form>    
        </div>