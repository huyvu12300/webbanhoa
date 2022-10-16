<!-- ?php
         require_once '../lib/session.php';
         require_once '../classes/adminlogin.php';
         require_once '../database/config.php';
? -->
<!-- ?php
        $class = new adminlogin();
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $adminUser = $_POST['adminUsername'];
            $adminPass = $_POST['adminPassword'];
            $login_check = $class ->login_admin($adminUser,$adminPass);
        }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="contaiter">
        <section id="content">
            <form action="adminlogin.php" method="post">
                <h1>Admin Login</h1>
                <!-- <span>?php 
                    if(isset($login_check))
                    {
                        echo "sdsd";
                    }
                ?></span> -->
                <div>
                    <input type="text" placeholder="Username" require="" name="adminUsername"/>
                </div>
                <div>
                    <input type="password" placeholder="Password" require="" name="adminPassword"/>
                </div>
                <div>
                    <input type="submit" value="Log in"/>
                </div>
            </form>
            <div class="button">
                <a href="#">Training with live project</a>
            </div>
        </section>
    </div>
</body>
</html>