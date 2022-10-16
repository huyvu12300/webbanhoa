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
            <form action="login_connect.php" method="post">
                <div class="container">
                    <h1 class="section-header">Đăng nhập</h1>
                    <hr>  
                    <label for="username"><b>Tên tài khoản</b></label>
                    <input type="text" placeholder="Nhập tên tài khoản" name="username" id="username" required>
                    <label for="password"><b>Mật khẩu</b></label>
                    <input type="password" placeholder="Nhập mật khẩu" name="pass" id="pass" required>     
                    <hr>
                    <button type="submit" name="submit">Đăng nhập</button>

                </div>
                <div class="container signup">
                    <p>Chưa có tài khoản?<a href="registry.php" target="_self"> Đăng ký </a>.</p>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
