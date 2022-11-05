
<?php
include('../admin/connect.php');
if(isset($_GET['id'])){
    $sql_pro = "SELECT * FROM tbl_danhmuc,products WHERE products.id_danhmuc = tbl_danhmuc.id_danhmuc AND products.id_danhmuc = '$_GET[id]' ORDER BY products.id_pd DESC";
    $query_pro = mysqli_query($mysqli,$sql_pro);
}else{
        $sql_pro = "SELECT * FROM products";
        $query_pro = mysqli_query($mysqli, $sql_pro);
}
  
        
   
        
   
    
?> 
<div class="contaiter">
            <ul class="list_product">
            <?php
                while($row_pro = mysqli_fetch_array($query_pro))
                                {
                                  ?> 
                <li class="product_border"><a href="../../website/products/main_pd.php?quanly=sanpham&id=<?php echo $row_pro['id_pd']?>"><img src="../../website/module/quanlysanpham/uploaded_img/<?php echo $row_pro['image'] ?>">
                    <div class="product_content">
                        <div class="name_pro"><?php echo $row_pro['name']?></div>
                        <div class="price_pro"><?php echo $row_pro['price']?></div>
                    </div>
                </a></li>
                <?php
                             }
                          ?>
                          
                              
                               </ul>
        </div>