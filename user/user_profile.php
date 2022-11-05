<?php
include 'connect.php';  
session_start();
$user_id = $_SESSION['user_id'];

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
	$update_firstname = mysqli_real_escape_string($conn,$_POST['updfirstname']);
    $update_lastname = mysqli_real_escape_string($conn,$_POST['updlastname']);
	$update_email = mysqli_real_escape_string($conn,$_POST['updemail']);
    $update_number = mysqli_real_escape_string($conn,$_POST['updnumber']);
    $update_address = mysqli_real_escape_string($conn,$_POST['updaddress']);

    $sql1 = "Select * from user where email='$update_email'";
    
    $result1 = mysqli_query($conn, $sql1);
    
    $num1 = mysqli_num_rows($result1); 

    $sql2 = "Select * from user where number='$update_number'";
    
    $result2 = mysqli_query($conn, $sql2);
    
    $num2 = mysqli_num_rows($result2); 

        if($num1 > 1)
        {
            echo "Email đã được sử dụng. Vui lòng sử dụng email khác!";
        }
        else
            if($num2 > 1)
            {
                echo "Số điện thoại đã được sử dụng. Vui lòng sử dụng số điện thoại khác!";
            }
            else
                if(!preg_match('/^[0-9]{10}+$/', $update_number))
                            {
                                echo "Số điện thoại không hợp lệ!(Phải đủ 10 số trong khoảng từ 0->9)";
                            }else
                                {
                                     $sql1 = mysqli_query($conn,"Update user Set firstname='$update_firstname',lastname='$update_lastname',email='$update_email'
                                        ,number='$update_number',address='$update_address' Where userid = '$user_id'") or die('query failed');
                                }
   

     $update_pass = mysqli_real_escape_string($conn,$_POST['updpass']);
     $new_pass = mysqli_real_escape_string($conn,$_POST['newpass']);
     $confirm_pass = mysqli_real_escape_string($conn,$_POST['cnewpass']);

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass))
   {
        $sql3 = mysqli_query($conn, "SELECT * FROM `user` WHERE userid = '$user_id'") or die('query failed');
              if(mysqli_num_rows($sql3) > 0)
              {
                 $fetch = mysqli_fetch_assoc($sql3);
              }
              if(password_verify($update_pass,$fetch['password']))
              {
                    if($new_pass == $confirm_pass)
                    {
                         if(!preg_match('/\s/',$new_pass))
                         {
                              if(strlen($_POST["newpass"]) >= 8)
                              {
                                   $password = password_hash($_POST['newpass'], PASSWORD_DEFAULT);  
                                   mysqli_query($conn, "UPDATE user SET password = '$password' WHERE userid = '$user_id'") or die('query failed');
                                   echo  "Thay đổi mật khẩu thành công!";
                              }else
                                    {
                                        die("Mật khẩu ít nhất có 8 ký tự!");
                                    }
                         }else
                                {
                                    echo "Mật khẩu không được có khoảng trắng!";
                                }
                    }else
                            {
                                echo "Mật khẩu không khớp với ban đầu!";
                            }      
              }else
                   {
                        echo "Mật khẩu mới phải giống mật khẩu cũ!";
                   }
   }
}

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Trang người dùng</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="login_signup.css" />

</head>

<body>
    <section id="user_page">
        <div class="modal">
        <?php
              $select = mysqli_query($conn, "SELECT * FROM `user` WHERE userid = '$user_id'") or die('query failed');
              if(mysqli_num_rows($select) > 0)
              {
                 $fetch = mysqli_fetch_assoc($select);
              }
        ?>
            <form action="" method="post" >
                <div class="container">
                    <h1>Thông tin tài khoản </h1>
                    <hr>
                    <div class="user-details">
                        <div class="space">
                            <label for="username"><b>Tên tài khoản</b></label>
                            <input type="text" placeholder="Nhập tên tài khoản" name="updusername" id="updusername" value="<?php echo $fetch['username']; ?>" required>
                        </div>

                        <div class="space">
                            <label for="email"><b>Email</b></label>
                            <input type="email" placeholder="Email" name="updemail" id="updemail" value="<?php echo $fetch['email']; ?>" required>
                        </div>

                        <div class="space">
                            <label for="psw"><b>Mật khẩu cũ</b></label>
                            <input type="password" placeholder="Nhập mật khẩu" name="updpass" id="updpass"  >
                        </div>

                        <div class="space">
                            <label for="number"><b>Số điện thoại</b></label>
                            <input type="text" placeholder="Nhập số điện thoại" name="updnumber" id="updnumber" value="<?php echo $fetch['number']; ?>" required>
                        </div>

                        <div class="space"> 
                            <label for="cpassword"><b>Mật khẩu mới</b></label> 
                            <input type="password" placeholder="Xác nhận mật khẩu" id="newpass" name="newpass" >
                        </div>

                        <div class="space">
                            <label for="Lastname"><b>Họ và tên đệm</b></label>
                            <input type="text" placeholder="Nhập Họ và tên đệm" name="updlastname" id="updlastname" value="<?php echo $fetch['lastname']; ?>" >
                        </div>

                        <div class="space"> 
                            <label for="cpassword"><b>Xác nhận mật khẩu mới</b></label> 
                            <input type="password" placeholder="Xác nhận mật khẩu" id="cnewpass" name="cnewpass" >
                        </div>

                        <div class="space">
                            <label for="Address"><b>Địa chỉ nhà</b></label>
                            <input type="text" placeholder="Nhập địa chỉ nhà" name="updaddress" id="updaddress" value="<?php echo $fetch['address']; ?>" required>
                        </div>

                        <div class="space">
                            <label for="Firstname"><b>Tên</b></label>
                            <input type="text" placeholder="Nhập tên" name="updfirstname" id="updfirstname" value="<?php echo $fetch['firstname']; ?>">
                        </div>

                        <input type="hidden" name="oldpass" value="<?php echo $fetch['password']; ?>">

                    </div>   
                    <button type="submit" name="submit" >Cập nhật</button>
                    <a href="logout.php" class="btn">logout</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
