<?php
    session_start();
    require_once 'includes/createDb.php';

    //create database instance
    $db = new CreateDb("ugrf_db", "products");

      if (isset($_GET['product'])){
        $id = $_GET['product'];
        $result = $db->getData();
        while($row = mysqli_fetch_assoc($result)){
              if($row['id'] == $id){
                  $_SESSION['p_name'] = $row['product_name'];
                  $_SESSION['p_price'] = $row['product_price'];
                  $_SESSION['p_image'] = $row['product_image'];
                  $_SESSION['p_id'] = $row['id'];
              }
            }
          }



    if (isset($_POST['add'])){
        if (isset($_SESSION['cart'])){
            
            $item_array_id = array_column($_SESSION['cart'], "product_id");

            if (in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product is already in cart')</script>";
                echo "<script>window.location = 'index.php'</script>";
            }else{
                $count = count($_SESSION['cart']);
                $item_array = array('product_id' => $_POST['product_id']);

                $_SESSION['cart'][$count] = $item_array;
            }

        }else{

            $item_array = array('product_id' => $_POST['product_id']);

            $_SESSION['cart'][0] = $item_array;
            echo "<script>alert('Product added to cart')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }
    }

?>



<html>
<head>
<link rel="stylesheet" href="style_ppage.css">
</head>
</head>
<body>
<?php
  if (isset($_SESSION['p_name'])){
    echo "<h1 class=h>".$_SESSION['p_name']."</h1>";
  }
?>
<h2 class=h2> add-ons: </h2>
<div id="div1">
<?php
  if (isset($_SESSION['p_name'])){
    echo "<img src=".$_SESSION['p_image']." alt='product_image'>";
  }
?>
</div>
<div class="absolute">

<label class="container">Back
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
</label><br><br><br>
<label class="container">Front
  <input type="checkbox">
  <span class="checkmark"></span>
</label><br><br><br>
<label class="container">Custom
  <input type="checkbox">
  <span class="checkmark"></span>
</label><br><br><br>
<label class="container">Fast delivery
  <input type="checkbox">
  <span class="checkmark"></span>
</label><br><br>

</div>
<h3>Product description:</h3>
<div id="div2">
<?php
  if (isset($_SESSION['p_name'])){
    echo "<p>Product Price : ".$_SESSION['p_price']."<br>
    Product ID : ".$_SESSION['p_id']."<br></p>";
  }
?>

<form action = "productpage.php" method="post">
<button type = "submit" class="button" name = "add"><span><b>Buy now</b></span></button>
<?php
  if (isset($_SESSION['p_name'])){
    echo '<input type="hidden" name = "product_id" value='.$_SESSION['p_id'].'>';
  }
?>
</form>
<?php

include_once 'footer.php';

?>
























































































































</body>
</html>
		
		
		 
		