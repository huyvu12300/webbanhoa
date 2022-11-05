<?php
    include('../admin/connect.php')
?>
<?php
    if(isset($_GET['quanly']))
    {
        $temp=$_GET['quanly'];
    }else{
        $temp='';
    }
    if($temp =='sanpham')
    {
        include("../../website/chitiet/main_pd.php");
    }elseif($temp == 'sale')
    {
        include("../../website/products/product.php");
    }elseif($temp == 'giohang')
    {
        include("../../website/giohang/giohang.php");
    }else{
        include("../website/index.php");
    }
?>