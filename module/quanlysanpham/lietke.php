
<?php

    $sql_lietke_sp = "SELECT * FROM products ORDER BY id_pd DESC";
   $select = mysqli_query($mysqli, $sql_lietke_sp);
   
   ?>
   <link rel="stylesheet" href="../../css/style.css">
   <h3>Liêt kê danh muc san pham</h3>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>flower image</th>
            <th>flower name</th>
            <th>flower price</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_array($select)){ ?>
         <tr>
            <td><img src="../quanlysanpham/uploaded_img/<?php echo $row['image']; ?>" width="100px" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?>.000 VND</td>
            <td>
               <a href="../quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_pd']; ?>" class="btn">edit</a>
               <a href="../quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_pd']; ?>" class="btn">delete</a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>