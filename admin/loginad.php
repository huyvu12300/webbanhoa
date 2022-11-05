<?php
    session_start();
    include('connect.php');
    if(isset($_POST['submit']))
    {
        $user = $_POST['user_ad'];
        $pass = md5($_POST['pass_ad']);
        $sql = "SELECT * FROM admin_ad WHERE user_ad = '".$user."' AND pass_ad =  '".$pass."'";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['submit'] = $user;
            header("location:index.php");
        }else{
            echo '<script>alert("error")</script>';
            header("location:loginad.php");
        }
    }
    
    
    
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Trang Đăng Nhập</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="login_signup.css" />

</head>

<body>
    <section id="login">
        <div class="modal">
            <form action="loginad.php" method="POST">
                <div class="container">
                    <h1 class="section-header">Đăng nhập</h1>
                    <hr>  
                    <label for="username"><b>Tên tài khoản</b></label>
                    <input type="text" placeholder="Nhập tên tài khoản" name="user_ad" id="user_ad" required>
                    <label for="password"><b>Mật khẩu</b></label>
                    <input type="password" placeholder="Nhập mật khẩu" name="pass_ad" id="pass_ad" required>     
                    <hr>
                    <button type="submit" name="submit">Đăng nhập</button>

                </div>
                
            </form>
        </div>

    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>

</html>
