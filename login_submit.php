<?php
include 'config.php';
if(isset($_POST['submit']) && $_POST['email'] != '' && $_POST['password'] != ''){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $success = mysqli_query($conn,$sql);
    if(mysqli_num_rows($success) == 1   ){
        header('location:index.php');
    }else {
        echo 'Bạn đã nhập sai email hoặc mật khẩu';
    }   
} else {
    header('location:login.php');

}
?>
