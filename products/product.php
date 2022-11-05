<?php
include('../admin/connect.php');
?>
    <?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
?>

 <!-- ?php
    if(isset($_GET['id']))
    {
        $sql_pro = "SELECT * FROM tbl_danhmuc,products WHERE products.id_danhmuc = tbl_danhmuc.id_danhmuc AND products.id_danhmuc = '$_GET[id]' ORDER BY products.id_pd DESC";
    $query_pro = mysqli_query($mysqli,$sql_pro);
    }else{
        $sql_all = "SELECT * FROM products";
        $query_all = mysqli_query($mysqli, $sql_all);
    }
    
?>  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sản Phẩm</title>
    <link rel="stylesheet"  href="product.css">
   

</head>
<body><?php
            include('../pages/header.php');
        ?>
    <div class="all">
        
    <div class="bar">
            <ul class="list_bar">
                <?php
                                while($row_danhmuc = mysqli_fetch_array(($query_danhmuc))){
                                ?>
                                <li><a href="../../website/products/product.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
                                <?php
                                }
                                ?>
            </ul>
            
        </div>
        <?php
            include('main_pd.php');
        ?>
        
                
            
        </div>
   
  
</body>
</html>