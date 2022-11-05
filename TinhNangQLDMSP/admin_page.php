<!-- ?php
session_start();
include 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$product_image = $_FILES['product_image']['name'];
$product_image_tmp_name = $_FILES['product_image']['tmp_name'];
$product_image = time().'_'. $product_image;
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_node = $_POST['product_node'];
$danhmuc = $_POST['danhmuc'];
   }
   if(isset($_POST['add_product'])){
      $insert = "INSERT INTO products(name,price,image,node,id_danhmuc) VALUE ('".$product_name."', '".$product_price."', '".$product_image."','".$product_node."','".$danhmuc."')";
      mysqli_query($mysqli,$insert);
      move_uploaded_file($product_image_tmp_name,'../TinhNangQLDMSP/uploaded_img/'.$product_image);
      // $message[] = 'new flower added successfully';
      //  header('Location:../../TinhNangQLDMSP/admin_page.php?idsanpham');
   }else{
      $_SESSION['idsanpham'];
      // $id = $_GET['idsanpham'];
      $sql = "SELECT * FROM products WHERE id_pd = '$id'";
      $query = mysqli_query($mysqli, $sql);
   // while($row = mysqli_fetch_array($query));
   // {
   //    unlink('../TinhNangQLDMSP/uploaded_img/'.$row['product_image']);
   // }
   $sql_xoa="DELETE FROM products WHERE id_pd ='".$id."' ";
   mysqli_query($mysqli, $sql_xoa);
   //  header('Location:../../TinhNangQLDMSP/admin_page.php?idsanpham');
   // $message[] = 'new flower added successfully';
};

? -->


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin page</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

   <div class="admin-product-form-container">

      <form action="../module/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
         <h3>add a new flower</h3>
         <input type="text" placeholder="enter flower name" name="product_name" class="box">
         <input type="number" placeholder="enter flower price" name="product_price" class="box">
         <input type="text" placeholder="enter flower node" name="product_node" class="box">
         <select name="danhmuc" class="box">
             <?php
         $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
         $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
         while($row_danhmuc = mysqli_fetch_array($query_danhmuc))
         {
            ?>
            <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
            <?php
         }
         ?>
         </select>
        
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="add flower">
      </form>

   </div>

   <?php

   $select = mysqli_query($mysqli, "SELECT * FROM products, tbl_danhmuc WHERE products.id_danhmuc = tbl_danhmuc.id_danhmuc");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>flower image</th>
            <th>flower name</th>
            <th>flower price</th>
            <th>Danh Muc</th>
            <th>flower node</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="../module/quanlysanpham/uploaded_img/<?php echo $row['image']; ?>" width="100px" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?>.000 VND</td>
            <td><?php echo $row['tendanhmuc']; ?></td>
            <td><?php echo $row['node']; ?></td>
            <td>
               <a href="../TinhNangQLDMSP/admin_update.php?idsanpham=<?php echo $row['id_pd']; ?>" class="btn">edit</a>
               <a href="../module/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_pd']; ?>" class="btn">delete</a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>