<?php
include 'connect.php'; 
session_start();
 


if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);
    
    $sql = mysqli_query($conn,"SELECT * from user WHERE username='$username'");

    if(mysqli_num_rows($sql) > 0)
    {
        $row = mysqli_fetch_assoc($sql);
        $password = $row['password'];
        if(password_verify($pass,$row['password']))
        {
            $_SESSION['user_id'] = $row['userid'];
            $_SESSION['username'] = $row['username'];
            header('location:user_page.php');
        }else{
            echo "Tên đăng nhập hoặc mật khẩu sai! Mời bạn nhập lại!";
        } 
    }else{
        echo "Tên đăng nhập hoặc mật khẩu sai! Mời bạn nhập lại!";
    }
}
?>