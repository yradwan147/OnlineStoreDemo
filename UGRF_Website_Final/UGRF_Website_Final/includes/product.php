<?php

function product($product_name, $product_price, $product_image, $product_id){
    $product = '
    <li>
    <form action = "index.php" method="post" class="product">
    <a href="#"><img src="'.$product_image.'" alt="Laptop Skin Image" width="400" height="400"></a>
    <p>'.$product_name .'</p>
    <p>'.$product_price .'</p>
    <button class = "product" type="submit" name="add">Add to cart</button>
    <input type="hidden" name = "product_id" value='.$product_id.'>
    </form>
    </li>
    ';
    echo $product;
}

function cart_product($product_name, $product_price, $product_image, $product_id){

    $cart_product = '
    <div class = "cart" id = "cart_div">
<form action = "cart.php?action=remove&id='.$product_id.'" method = "post" class = "cart-items">
    <img style = "width:400px; height:400px;" src = "'.$product_image.'" alt="Image">
    <h3>'.$product_name.'</h3>
    <h3>Price : '.$product_price.'</h3>
    <button type="submit" name="remove">Remove</button>
</form>
</div>
    ';

    echo $cart_product;
}

function post($title, $body, $image, $date){
    $post = '
    <div class="post">
    <h3>'.$title.'</h3>
    <h6>'.$date.'</h6>
    <h4>'.$body.'</h4>
    <div class = post_image>
    <img src = "'.$image.'" alt = "post_image">
    </div>
    </div>';

    echo $post;
}
