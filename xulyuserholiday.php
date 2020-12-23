<?php 
session_start();
$ketnoi = mysqli_connect("localhost","root","","wedalbum");
if(!$ketnoi){
    exit("kết nối cơ sở dữ liệu không thành công");
}
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT HOTEN FROM qltaikhoan where taikhoan = '$username' and matkhau = '$password'";
$ketqua = mysqli_query($ketnoi,$sql);
$row = mysqli_fetch_array($ketqua);
if(mysqli_num_rows($ketqua)>0){
    $_SESSION['HOTEN'] = $row['HOTEN'];
    echo "<script>";
         echo "window.location = \"quantriholiday.php\";";
    echo "</script>";
}else {
    echo "<script>";
         echo " alert(\" Sai User Hoặc Password\");";
         echo "window.location = \"userholiday.html\";";
    echo "</script>";
} 
?>