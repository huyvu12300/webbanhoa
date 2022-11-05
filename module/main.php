<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query'])
        {
            $temp = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $temp = '';
            $query = '';
        }
        if($temp =='quanlysanpham' && $query =='them')
        {
            include("../TinhNangQLDMSP/admin_page.php");
            
        }
        elseif($temp=='quanlydonhang' && $query =='sua'){
            include("../TinhNangQLDMSP/admin_update.php");
            
        }elseif($temp=='quanlydonhang' && $query =='them'){
            include("../module/quanlydonhang/them.php");
            include("../module/quanlydonhang/lietke.php");

        }elseif($temp =='quanlydanhmuc' && $query == 'them'){
            include("../module/quanlydanhmuc/them.php");
            include("../module/quanlydanhmuc/lietke.php");
        }
    ?>
</div>
