<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang Đăng Ký</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="login_signup.css" />

</head>
<body>
    <section id="register">
        <div>
        
            <form action="signup.php" method="post" >
                <div class="container">
                    <h1>Đăng Ký </h1>
                    <p>Điền đầy đủ thông tin để tạo tài khoản!</p>
                    <hr>
                    <div class="user-details">
                        <div class="space">
                            <label for="username"><b>Tên tài khoản</b></label>
                            <input type="text" placeholder="Nhập tên tài khoản" name="username" id="username" required>
                        </div>

                        <div class="space">
                            <label for="email"><b>Email</b></label>
                            <input type="email" placeholder="Email" name="email" id="email"  required>
                        </div>

                        <div class="space">
                            <label for="psw"><b>Mật khẩu</b></label>
                            <input type="password" placeholder="Nhập mật khẩu" name="pass" id="pass"  required>
                        </div>

                        <div class="space">
                            <label for="number"><b>Số điện thoại</b></label>
                            <input type="text" placeholder="Nhập số điện thoại" name="number" id="number"  required>
                        </div>

                        <div class="space"> 
                            <label for="cpassword"><b>Xác nhận mật khẩu</b></label> 
                            <input type="password" placeholder="Xác nhận mật khẩu" id="cpass" name="cpass" required>
                        </div>

                        <div class="space">
                            <label for="Lastname"><b>Họ và tên đệm</b></label>
                            <input type="text" placeholder="Nhập Họ và tên đệm" name="lastname" id="lastname" >
                        </div>

                        <div class="space">
                            <label for="Address"><b>Địa chỉ nhà</b></label>
                            <input type="text" placeholder="Nhập địa chỉ nhà" name="address" id="address" required>
                        </div>

                        <div class="space">
                            <label for="Firstname"><b>Tên</b></label>
                            <input type="text" placeholder="Nhập tên" name="firstname" id="firstname" >
                        </div>

                    </div>   
                    <p><input type="checkbox" checked="checked" name="Đồng ý">Tôi đồng ý với những <a href="#">Điều khoản</a>.</p><hr>
                    <button type="submit" name="submit" class="registerbtn">Đăng ký</button>
                    <p>Đã có tài khoản?<a href="login.php" target="_self"> Đăng nhập </a>.</p>
                </div>
            </form>
        </div>
    </section>

</body>

</html>

