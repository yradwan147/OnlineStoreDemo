<?php
    include_once( "header.php");
    require_once("includes/product.php");
    require_once("includes/createDb.php");

    $db = new CreateDb("ugrf_db", "products");

    if(isset($_POST['remove'])){
        if ($_GET['action'] == 'remove'){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['product_id'] == $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                    echo "<script>alert('Product has been removed')</script>";
                    echo "<script>window.location = 'cart.php'</script>";
                }
            }
        }
    }
?>
<div id = "products_cart">
<?php
    $total = 0;
    if(isset($_SESSION['cart'])){
        $product_id = array_column($_SESSION['cart'], "product_id");

        $result = $db->getData();
        while($row = mysqli_fetch_assoc($result)){
            foreach($product_id as $id){
                if($row['id'] == $id){
                    cart_product($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                    $total += (int)$row['product_price'];
                }
            }
        }
    }else{
        echo "<h2>Cart is empty</h2>";
    }
?>

</div>

<div id="cart_details">
    <h2>Price Details</h2>
    <?php
    if (isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
        echo "<h3>Price of (".$count." Items): </h3>";
        echo "<h4>Price of items: ".$total."</h4>";
        if (isset($_SESSION['userdelivery'])){
            echo "<h4>Delivery charge: ".$_SESSION['userdelivery']."</h4>";
        }
    }else{
        echo "<h3>Price of (0 Items): </h3>";
    }
    ?>
</div>

<?php 
    include_once("footer.php")
?>