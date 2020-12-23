<?php
    session_start();
    if(!isset($_SESSION['HOTEN'])){
        header("location:userholiday.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <link rel="stylesheet" href="css/quantri.css">
</head>
<?php
    $ketnoi = mysqli_connect("localhost","root","","wedalbum");
    if(!$ketnoi){
        exit("kết nối cơ sở dữ liệu không thành công");
    }
    $sql = "SELECT ID, HINH FROM `anh holiday` ";
    $ketqua = mysqli_query($ketnoi , $sql);
    ?>
<body>
    <div class="container-quantri">
        <h1>Trang Quản Trị Hình Ảnh</h1>
        <table border="1" width="1000px">
            <tr>
                <td>#</td>
                <td>HÌNH ẢNH</td>
                <td>HÀNH ĐỘNG</td>
               <a href="themholiday.php"class="nut">Thêm Mới</a> <a href="index.html"class="nut">Quay Lại</a>
            </tr>
            <br><br><br>
            <tr>
            <?php
            $i=1;
                while($row = mysqli_fetch_array($ketqua)){
                  echo"  <tr>";
                  echo"  <td>".$i++."</td>";
                  echo"  <td><img src=\"img\\".$row['HINH']."\"Width=\"150px\"> </td>";
                    echo" <td><a onclick=\"return confirm('Bạn có chắc không?')\"class=\"nut\" href=\"deleteholiday.php?idxoa=".$row['ID']."\">Xóa</a><a class=\"nut\" href=\"editholiday.php?idsua=".$row['ID']."\">Sửa</a></td>";
               echo" </tr>";
                }
            ?>
            </tr>
        </table>
    </div>
</body>