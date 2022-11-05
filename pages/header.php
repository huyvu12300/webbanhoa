<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
?>

<header>
                <div class="inner-header container" >
                    <a href="../../website/index.php" class="logo">Sunshine</a>
                    <nav>
                        <ul class="main-menu">
                           
                           <li><a href="../../website/products/product.php">Sản Phẩm</a>
                            <ul class="list_sale_main-menu">
                                <?php
                                while($row_danhmuc = mysqli_fetch_array(($query_danhmuc))){
                                ?>
                                <li><a href="../../website/products/product.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                            </li>
                            <li><a href="gioithieu.html">Giới Thiệu</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="index.php?quanly=giohang">Giỏ Hàng</a></li>
                            <li><a href="user/login.php">Đăng Nhập</a></li>
                            <li><a href="user/registry.php">Đăng Ký</a></li>
                            <!-- <li>
                                <div class="input_search">
                                    <input type="search" id="search-input" placeholder="Lavender">
                                    <button id="search">Search</button>
                                    <div id="buttons">
                                    <button class="button-value" onclick="filterProduct('all')">All</button>
                                    </div>
                                    
                                </div></li> -->
                        </ul>
                    </nav>
    

                </div>
            </header>