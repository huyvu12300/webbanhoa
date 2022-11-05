
<?php
    
    $sql_lietke_dm = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_dm = mysqli_query($mysqli, $sql_lietke_dm)
?>

<div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Tên Danh Mục</th>
            <th>Thứ Tự</th>
            <th>Quản Lý</th>
            
         </tr>
         </thead>
         <?php
         $i = 0;
          while($row = mysqli_fetch_array($query_lietke_dm)){ 
          $i++;  
            ?>
         <tr>
            
            <td><?php echo $row['tendanhmuc']; ?></td>
            <td><?php echo $row['thutu']; ?></td>
            <td>
               <a href="../../module/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>" class="btn">Xóa</a>
               <a href="" class="btn">Sửa</a>
            </td>
            
         </tr>
      <?php } ?>
      </table>
   </div>