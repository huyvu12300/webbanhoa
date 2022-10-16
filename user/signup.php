<?php
include 'connect.php';


if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
    $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$address = mysqli_real_escape_string($conn,$_POST['address']);
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $number = mysqli_real_escape_string($conn,$_POST['number']);
    
    $sql = "Select * from user where username='$username'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 

    $sql1 = "Select * from user where email='$email'";
    
    $result1 = mysqli_query($conn, $sql1);
    
    $num1 = mysqli_num_rows($result1); 

    $sql2 = "Select * from user where number='$number'";
    
    $result2 = mysqli_query($conn, $sql2);
    
    $num2 = mysqli_num_rows($result2); 

    if($num == 1)
    {
       echo "Tên đăng nhập đã tồn tại. Vui lòng sử dụng tên khác!"; 
    }
    else
        if($num1 == 1)
        {
            echo "Email đã được sử dụng. Vui lòng sử dụng email khác!";
        }
        else
            if($num2 == 1)
            {
                echo "Số điện thoại đã được sử dụng. Vui lòng sử dụng số điện thoại khác!";
            }
            else
            {
                if(preg_match('/\s/',$pass)) 
                {
                    echo "Mật khẩu không được có khoảng trắng!";
                }
                else
                    if($pass != $cpass)
                    {
                        echo "Mật khẩu không khớp với ban đầu!";
                    }else
                        if(strlen($_POST["pass"]) < 8)
                        {
                            die("Mật khẩu ít nhất có 8 ký tự!");
                        }
                        else
                            if(!preg_match('/^[0-9]{10}+$/', $number))
                            {
                                echo "Số điện thoại không hợp lệ!(Phải đủ 10 số trong khoảng từ 0->9)";
                            }else 
                                {
                                    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);       
                                    $sql = "INSERT INTO `user` ( `username`, `password`, `number`, `email`, `firstname`, `lastname`, `address`) 
                                          VALUES ('$username', '$password', '$number', '$email', '$firstname', '$lastname', '$address')";
                                    mysqli_query($conn, $sql);
                                    header("Location: signup_success.php");
                                }
            }
}    
?>