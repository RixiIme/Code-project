<?php 
include 'config.php';
if(isset($_POST['submit']) && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['repassword'] != '' && $_POST['phone'] != '') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $phone = $_POST['phone'];
  
    if($password != $repassword){
        header("location:register.php");
    }
    // $id = $_GET['id'];
    $sql = ("SELECT * FROM users WHERE email='$email'");
    $old = mysqli_query($conn,$sql);
    $password = md5($password);
    if(mysqli_num_rows($old) > 0){
       echo 'Tài khoản đã tồn tại';
    } else{
    $sql = ("INSERT INTO users (email,password,phone) VALUES ('$email','$password','$phone')");
    mysqli_query($conn,$sql);
    echo "Đăng ký thành công";
    }
} else
header("location:register.php");
?>