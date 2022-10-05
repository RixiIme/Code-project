<?php
session_start();

if(isset($_POST['username']) && ($_POST['username']) !==NULL){
    $username = $_POST['username'];
    $password =$_POST['password'];
    $password = md5($password);
    $conn = mysqli_connect('localhost','root','','eyeplus');
    $rs =  mysqli_query($conn, "SELECT * FROM users WHERE email='$username' and password='$password'");
    $row = mysqli_num_rows($rs);
    if($row == 1) {
        $_SESSION['admin'] = $username;
        header('location:admin.php');
     
    } else {
      echo 'Sai tên đăng nhập hoặc mật khẩu';  
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <form method="POST" enctype="multipart/form-data">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mt-5" method="POST" enctype="multipart/form-data">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="username" id="email">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" id="password">
          </div>
          <div class=""><input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Đăng Nhập">
          </div>
      
</div>
    
</body>
</html>