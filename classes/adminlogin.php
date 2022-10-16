<!--  ?php
    require_once '../lib/session.php';
    Session::checkLogin();
    include '../lib/database.php';
    include '../helper/format.php';
?> -->

<!-- <--?php
        
        
        class adminlogin 
        {
            private $db;
            private $fm;
            public function __construct()
            {
                $this->db= new Database();
                $this->fm= new Format();
            }
            //kiem tra
            //goi ham kiem tra trong class database
            public function login_admin($adminUser,$adminPass)
            {
                $adminUser = $this->fm->validation($adminUser);
                $adminPass = $this->fm->validation($adminPass);
                $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
                $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);
                if(empty($adminUser)||empty($adminPass))
                {
                    $alert ="User và Pass không dược để trống";
                    return $alert;
                }
                else{ //lenh select trong class database
                    $query = "SELECT * FROM admin WHERE user_ad = '$adminUser' AND pass_ad = '$adminPass' LIMIT 1";
                    $result = $this->db->select($query);
                    if($result !=false)
                    {   //lenh set trong class session
                        $value = $result->fetch_assoc();
                        Session::set('adminlogin', true);
                        Session::set('id_ad',$value['id_ad']);
                        Session::set('user_ad',$value['user_ad']);
                        Session::set('name_ad',$value['name_ad']);
                        header('Location:index.php');
                    }
                    else{
                        $alert = "User và Pass không khớp";
                        return $alert;
                    }
                }
            }
        }
        
? -->
<?php
include '../config/config.php';  
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
	$username = mysqli_real_escape_string($conn,$_POST['adminUsername']);
	$pass = mysqli_real_escape_string($conn,$_POST['adminPassword']);
    
    $sql = mysqli_query($conn,"SELECT * from admin WHERE user_ad='$adminUsername'");

    if(mysqli_num_rows($sql) > 0)
    {
        $row = mysqli_fetch_assoc($sql);
        $password = $row['pass_ad'];
        if(password_verify($pass,$row['pass_ad']))
        {
            $_SESSION['adminUsername'] = $row['user_ad'];
            header('location:index.php');
        }else{
            echo "Tên đăng nhập hoặc mật khẩu sai! Mời bạn nhập lại!";
        } 
    }else{
        echo "Tên đăng nhập hoặc mật khẩu sai! Mời bạn nhập lại!";
    }
}
?>