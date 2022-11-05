<?php

include 'config.php';



$id = $_GET['idsanpham'];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_node = $_POST['product_node'];
   $danhmuc = $_POST['danhmuc'];
   // $product_image_folder = '../TinhNangQLDMSP/uploaded_img/'.$product_image;
}
   
      if(isset($_POST['update_product']))
      {
         if($_POST['product_image'])
         {
            $update_data = "UPDATE products SET name='$product_name', price='$product_price', image='$product_image', node='$product_node',id_danhmuc='$danhmuc'  WHERE id_pd = '$_GET[idsanpham]'";
         }else{
            $update_data = "UPDATE products SET name='$product_name', price='$product_price', node='$product_node',id_danhmuc='$danhmuc'  WHERE id_pd = '$_GET[idsanpham]'";
         }
         
      
         mysqli_query($mysqli, $update_data);
         move_uploaded_file($product_image_tmp_name, '../module/quanlysanpham/uploaded_img/'.$product_image);
         header('Location:../admin/index.php?action=quanlysanpham&query=them');
      }else{
         $message[] = 'please fill out all!'; 
      }

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($mysqli, "SELECT * FROM products WHERE id_pd = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
      <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="enter the product name">
      <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['price']; ?>" placeholder="enter the product price">
      <input type="text" class="box" name="product_node" value="<?php echo $row['node']; ?>" placeholder="enter the product node">
      <select name="danhmuc" class="box">
             <?php
         $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
         $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
         while($row_danhmuc = mysqli_fetch_array($query_danhmuc))
         {
            if($row_danhmuc['id_danhmuc']==$row['id_danhmuc'])
            {?>
               <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
            
            <?php
            }else{ 
               ?>
               <option  value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
               <?php
            }
            
         }
         ?>
         </select>
      <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="../admin/index.php?action=quanlysanpham&query=them" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>