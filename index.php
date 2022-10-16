<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sunshine</title>
        <link rel="stylesheet" href="home.css">
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
                                <li><a href="even.html">Sự Kiện</a></li>
                                <li><a href="seson.html">Hoa Theo Mùa</a></li>
                            </ul>
                            </li>
                            <li><a href="gioithieu.html">Giới Thiệu</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="">Giỏ Hàng</a></li>
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
            <div class="banner">
                
            </div>
            
           <div class="new-content">
                <h2 class="title_new-content">About Me</h2>
                <p>Sunshine chuyên cung cấp tất cả các dịch vụ về hoa tươi: hoa khai trương, hoa sinh nhật, hoa chúc mừng, hoa sự kiện, trang trí tiệc cưới, hoa chia buồn… <br>
                    Sunshine là website trực tuyến hỗ trợ khách hàng gửi tặng hoa tươi nhanh chóng với trải nghiệm chất lượng dịch vụ chuyên nghiệp nhất. Với ưu điểm là mẫu hoa đa dạng giá rẻ hợp túi tiền Sunshine từ lâu đã là địa điểm đặt hoa uy tín được nhiều khách hàng lựa chọn khi muốn gửi tặng hoa cho bạn bè, người thân, đối tác v.v… trong các dịp đặc biệt và sự ra đời của Website trực tuyến là một bước tiến mới giúp việc đặt hàng tại Sunshine trở nên dễ dàng hơn bao giờ hết, hiệu quả nhất và tiết kiệm nhất. <br>
                    Với đội ngũ thợ hoa lành nghề cùng quy trình hoạt động chuyên nghiệp, nhanh chóng Sunshine hợp tác với hàng trăm vườn hoa tươi tại Việt Nam với công nghệ tiên tiến nhất nhằm bảo đảm chất lượng dịch vụ và chất lượng sản phẩm tốt nhất đến khách hàng. <br>
                    Vì thế, Sunshine không ngừng trau dồi kiến thức, cải thiện bản thân và cập nhật xu hướng mới để mỗi sản phẩm khi đến tay người nhận là những thông điệp vô cùng ý nghĩa mà khách hàng muốn truyền tải đến bạn bè và người thân yêu. <br>
                    Mang trong mình một sứ mệnh “Gửi trọn yêu thương” Sunshine luôn cố gắng hoàn thành tốt nhiệm vụ cao cả đó. Vì vậy, mỗi florist của Sunshine luôn đặt chữ “tâm” và chữ “tình” vào mỗi sản phẩm. Mỗi thành phẩm khi đến tay người nhận còn chứa đựng cả tâm tình của những người truyền tải như chúng tôi. <br>
                    Mặc dù con đường phát triển nhiều chông gai, thử thách nhưng chúng tôi luôn cải thiện và hoàn thiện mỗi ngày để đưa Sunshine trở thành thương hiệu được mọi người tin tưởng và tín nhiệm.</p>
            </div>
            
            <div class="contenr">
                <h2 class="name-list"> New Arrival </h2>
                    <div class="list-sale">
                        <div class="a">
                            <ul>
                            <li><a href="chitiet/rose.html"><img src="hoa/hong.jpeg" alt="">
                            <div class="name">Hoa Hồng</div>
                        </a></li>
                        <li><a href="chitiet/hoalaven.html"><img src="hoa/lavender.jpeg" alt="">
                            <div class="name">Lavender</div>
                        </a></li>
                        </ul>
                        </div>
                        <div class="b">
                            <ul>
                            <li><a href="chitiet/hoacuc.html"><img src="hoa/hoacuc.jpeg" alt="">
                            <div class="name">Hoa Cúc</div>
                        </a></li>
                        <li><a href=""><img src="hoa/camtucau.jpeg" alt="">
                            <div class="name">Hoa Cẩm Tú Cầu</div>
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
        <!-- <script src="./timkiem/Main.js"></script> -->
    </body>
</html>