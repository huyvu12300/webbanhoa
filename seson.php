<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Menu3</title>
        <link rel="stylesheet" href="even.css">
    </head>
    <body>
        <div class="all">
            <header>
                <div class="inner-header container" >
                    <a href="index.php" class="logo">Sunshine</a>
                    <nav>
                        <ul class="main-menu">
                           
                            <li><a href="">Sản Phẩm</a>
                            <ul class="list_sale_main-menu">
                                <li><a href="../even.html">Sự Kiện</a></li>
                            <li><a href="../seson.html">Hoa Theo Mùa</a></li>
                                    </ul>
                                </li>
                            
                            </li>
                            <li><a href="gioithieu.html">Giới Thiệu</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="">Giỏ Hàng</a></li>
                            <li><a href="user/login.php">Đăng Nhập</a></li>
                            <li><a href="user/registry.php">Đăng Ký</a></li>
                        </ul>
                    </nav>
    

                </div>
            </header>
            <div class="banner">
                
            </div>
         
            <div class="contenr">
                <h2 class="name-list"> Hoa Theo Mùa</h2>
                    <div class="list-sale">
                        <div class="a">
                            <ul>
                            <li><a href="chitiet/tulip.html"><img src="SanPham_hoa/BoHoa/pexels-anna-shvets-5750174.jpg" alt="">
                            <div class="name">Hoa Tulip</div>
                            <div class="price">450.000VND</div>
                        </a></li>
                        <li><a href="chitiet/lavender.html"><img src="SanPham_hoa/BoHoa/pexels-secret-garden-2879814.jpg" alt="">
                            <div class="name">Lavender</div>
                            <div class="price">550.000VND</div>
                        </a></li>
                        <li><a href="chitiet/oaihuong.html"><img src="SanPham_hoa/BoHoa/pexels-melike-benli-12615498.jpg" alt="">
                            <div class="name">Hoa Hồng</div>
                            <div class="price">500.000VND</div>
                        </a></li>
                        </ul>
                        </div>
                        <div class="b">
                            <ul>
                            <li><a href="chitiet/cuc.html"><img src="SanPham_hoa/BoHoa/pexels-karolina-grabowska-4022215.jpg" alt="">
                            <div class="name">Hoa Cúc</div>
                            <div class="price">450.000VND</div>
                        </a></li>
                        <li><a href=""><img src="SanPham_hoa/BoHoa/pexels-karolina-grabowska-8903960.jpg" alt="">
                            <div class="name">Hoa Hồng</div>
                            <div class="price">450.000VND</div>
                            <li><a href=""><img src="SanPham_hoa/BoHoa/pexels-lisa-fotios-3147131.jpg" alt="">
                                <div class="name">Hoa Tuyết</div>
                                <div class="price">550.000VND</div>
                            </a></li>
                        </a></li>
                        </ul>
                        </div>
                        
                        
                    </div>
               
            </div>
            <div class="footer">
                <p>Thông Tin Lạc</p>
                <p>Khu Công nghệ cao TP.HCM, Xa lộ Hà Nội, P.Hiệp Phú, TP.Thủ Đức, TP.HCM</p>
                <p>Điện thoại: (028) 5445 7777 - Fax: (028) 5445 4444</p>
            </div>
            
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script>
            $(document).ready(function() {
                $(window).scroll(function(){
                    if($(this).scrollTop()){
                        $('header').addClass('sticky');
                    }else{
                        $('header').removeClass('sticky');
                    }
                });
            });
        </script>
    </body>
</html>