<?php
     // Create a connection 
     $mysqli  = new mysqli("localhost", 
     "root", "", "webbanhoa");
    //////
    if($mysqli->connect_errno)
    {
        echo" ket noi loi" . $mysqli->connect_errno;
        exit();
    }
?>
