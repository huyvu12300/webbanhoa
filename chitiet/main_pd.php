<?php
    include('../admin/connect.php');
    include("../pages/header.php");
    
?>
<link rel="stylesheet" type="text/css" href="../css/main_pd.css">

<?php
    
    $sql_chitiet = "SELECT * FROM tbl_danhmuc,products WHERE products.id_danhmuc = tbl_danhmuc.id_danhmuc AND products.id_pd = '$_GET[id]'  LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){

   
?>


<div class="clear"></div>



<div class="wrapper_chitiet">
<div class="img_pro">
<img  src="../../website/module/quanlysanpham/uploaded_img/<?php echo $row_chitiet['image'] ?>"></div>
<form method="POST" action="../../website/giohang/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_pd'] ?>">
    <div class="chitiet_pro">
        <h3><?php echo $row_chitiet['name']?></h3>
        <p><?php echo $row_chitiet['price']?>.000 VND</p>
        <p><?php echo $row_chitiet['node']?></p>
        <p><input class="addcart" type="submit" value="Thêm Vào Giỏ Hàng"></p>
</div>
</form>

</div>

<?php
}
?>