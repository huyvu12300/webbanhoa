<?php
    session_start();
    include('../../website/admin/connect.php');
    
    //them sl
    //tru sl
    //xoa sp
    //them sp
    if(isset($_POST['addcart']))
    {
        $id=$_GET['idsanpham'];
        $soluong=1;
        $sql="SELECT * FROM products WHERE id_pd = '".$id."' LIMIT 1 ";
        $query = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_array($query);
        if($row)
        {
            $new_pd = array(array('name'=>$row['name'],'id'=>$id,'image'=>$row['image'],'soluong'=>$soluong,'price'=>$row['price']));
            if(isset($_SESSION['cart']))
            {
                $found =false;
                foreach($_SESSION['cart'] as $cart_item)
                {
                    if($cart_item['id']==$id)
                    {
                        $product[]=array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'image'=>$cart_item['image'],'price'=>$cart_item['price'],'soluong'=>$soluong+1);
                        $found =true;
                    }else{
                        $product[]=array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'image'=>$cart_item['image'],'price'=>$cart_item['price'],'soluong'=>$soluong);
                    }
                }
            }else{
                $_SESSION['cart'] = $new_pd;
            }
        }
        header('Location:../../website/giohang/themgiohang.php?quanly=giohang');
        // print_r($_SESSION['cart']);
    }
?>
