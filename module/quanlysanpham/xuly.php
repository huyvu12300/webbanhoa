<?php
session_start();
include '../../admin/connect.php';

$product_image = $_FILES['product_image']['name'];
$product_image_tmp_name = $_FILES['product_image']['tmp_name'];
$product_image = time().'_'. $product_image;
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_node = $_POST['product_node'];
$danhmuc = $_POST['danhmuc'];
  
   
   if(isset($_POST['add_product'])){
      $insert = "INSERT INTO products(name,price,image,node,id_danhmuc) VALUE ('".$product_name."', '".$product_price."', '".$product_image."','".$product_node."','".$danhmuc."')";
      mysqli_query($mysqli,$insert);
      move_uploaded_file($product_image_tmp_name,'../quanlysanpham/uploaded_img/'.$product_image);
      header('Location:../../admin/index.php?action=quanlysanpham&query=them');
   }else{
      $id = $_GET['idsanpham'];
      $sql = "SELECT * FROM products WHERE id_pd = '$id'";
      $query = mysqli_query($mysqli, $sql);
   while($row = mysqli_fetch_array($query));
   {
      unlink('uploaded_img'.$row['product_image']);
   }
   $sql_xoa="DELETE FROM products WHERE id_pd ='".$id."' ";
   mysqli_query($mysqli, $sql_xoa);
    header('Location:../../admin/index.php?action=quanlysanpham&query=them');
   // $message[] = 'new flower added successfully';
};

?>