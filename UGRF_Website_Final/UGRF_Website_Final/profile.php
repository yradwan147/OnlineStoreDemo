<?php
    include_once('header.php');
?>

<section class="profile" data-nav= "Profile">
        <h1>Profile</h1>
        <?php
             if (isset($_SESSION["useruid"])){
                echo '<h2>Hello there ' . $_SESSION["username"] . '</h2>';
                echo '<div class = "userData"><p>Username: ' . $_SESSION["useruid"] . '<p>';
                echo '<p>Email: ' . $_SESSION["useremail"] . '<p>';
                echo '<p>ID: ' . $_SESSION["userid"] . '<p>';
                echo '<p>Phone Number: 0' . $_SESSION["userpnumber"] . '<p>';
                echo '<p>Address: ' . $_SESSION["useraddress"] . '<p>';
                echo '<p>Gender: ' . $_SESSION["usergender"] . '<p>';
                echo '<p>Area: ' . $_SESSION["userarea"] . '<p>';
                if ($_SESSION["userarea"] == 'Greater Cairo'){
                    echo '<p>Delivery cost : 35 L.E | Delivery time: within 48 hours</p></div>';
                    $_SESSION['userdelivery'] = "35 L.E | Delivery time: within 48 hours";
                }
                else if ($_SESSION["userarea"] == 'Alexandria/Canal Cities'){
                    echo '<p>Delivery cost : 60 L.E | Delivery time: within 72 hours</p></div>';
                    $_SESSION['userdelivery'] = "60 L.E | Delivery time: within 72 hours";
                }else if ($_SESSION["userarea"] == 'Delta'){
                    echo '<p>Delivery cost : 60 L.E | Delivery time: within 72 hours</p></div>';
                    $_SESSION['userdelivery'] = "60 L.E | Delivery time: within 72 hours";
                }else if ($_SESSION["userarea"] == 'Southern Egypt'){
                    echo '<p>Delivery cost : 70 L.E | Delivery time: within 72 hours</p></div>';
                    $_SESSION['userdelivery'] = "70 L.E | Delivery time: within 72 hours";
                }else if ($_SESSION["userarea"] == 'Red Sea'){
                    echo '<p>Delivery cost : 80-90 L.E | Delivery time: within 96 hours</p></div>';
                    $_SESSION['userdelivery'] = "80-90 L.E | Delivery time: within 96 hours";
                }
             }
             if (isset($_SESSION["userPerm"])){
                echo '<p> ADMIN DETECTED </p>';
                echo '<a href = "productregister.php"><p>Add Product</p></a>';
             }
        ?>

    </section>
    
    
<?php

include_once 'footer.php';

?>
