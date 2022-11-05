<?php  
function component($product_name,$product_price,$product_img,$product_id){
    $element = "

    <div class=\"col-md-3 col-sm-6-my-3-my-md-0\">
            <form action=\"index.php\" method =\"post\">
                <div class=\"cart shadow\">
                    <div>
                        <img src=\"../../website/module/quanlysanpham/uploaded_img/$product_img\" alt=\"Hoa\" class=\"img-fluid card-img-top\">
                    </div>
                    <div class=\"cart body\">
                        <h5 class=\"cart-title\">$product_name</h5>
                    </div>
                    <h5>
                        <small><s class=\"text-secondary\">$699</s></small>
                        <span class=\"price\">$product_price</span>
                    </h5>
                    <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to cart<i class=\"fa-regular fa-cart-shopping\"></i></button>
                    <input type='hidden' name='product_id' value='$product_id'>
                </div>
            </form>
    </div>
    ";
echo $element;
}
function cartElement($product_img,$product_name,$product_price,$product_id ){
    $element = "
    <form action=\"cart.php?action=remove&id=$product_id\" method=\"post\" class = \"cart-items\">
                    <div class=\"border rounde\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3\">
                                <img src=\"../../website/module/quanlysanpham/uploaded_img/$product_img\" alt = \"Hoa\" class=\"img-fluid\">                      
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$product_name</h5>
                                <small class=\"text-secondary\"></small>
                                <h5 class=\"pt-2\">$product_price</h5>
                                 <button type=\"submit\" class=\"btn btn-danger mx-1 my-4 \" name=\"remove\">Xóa Sản Phẩm</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                            <div class=\"qty d-flex pt-2\">
                                <button class=\"qty-up border bg-light\" data-id=\"pro1\"><i class=\"fas fa-angle-up\"></i></button> 
                                <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\" data-id=\"pro1\">
                                <button data-id=\"pro1\" class=\"qty-down border bg-light\"><i class=\"fas fa-angle-down\"></i></button>
                            </div>
                            </div>
                        </div>
                    </div>
     </form>  ";

echo $element;
}   



?>
