<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sunshine</title>
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <div class="all">
            <?php
                include("admin/connect.php");
                include("pages/header.php");
                include("pages/banner.php");
                include("pages/conten.php");
                include("pages/main.php");
                include("pages/footer.php");
            ?>
           
            
           
            
            
            
            
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