<?php
include('../user/connect.php');
session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id))
{
    header('location:login.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <link rel="stylesheet" href="login_signup.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Welcome <?php echo $_SESSION['username']; ?></h3>
      <p>this is an user page</p>
      <a href="registry.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
      <a href="user_profile.php" class="btn">profile</a>
   </div>

</div>

</body>
</html>