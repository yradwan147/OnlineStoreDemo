<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>GAIMIZ</title>
        <link href="style.css" rel="stylesheet">
    </head>

    <body>

        <header>
            <nav id = "navigation" class = "navbar__menu">
                <ul id = "navbar__list">
                    <li style="float:left;"><div><img style = "height:200px; width:auto; display:block; margin-left:auto; margin-right:auto;" src = "assets/logo2.gif" alt="LOGO"><h3>GAIMIZ</h3></div></li> 
                    <?php
                     if (isset($_SESSION["cart"])){

                            $count = count($_SESSION['cart']);

                            echo '<li style = "background-color: rgb(51, 50, 50);"><a href ="cart.php">Cart ('.$count.')</a></li>';
                        }
                        if (isset($_SESSION["useruid"])){
                            echo '<li><a href ="profile.php">Profile</a></li>';
                            echo '<li><a href ="includes/logout.inc.php">Log out</a></li>';
                        }
                        else{
                            echo '<li><a href ="signup.php">Sign up</a></li>';
                            echo '<li><a href ="login.php">Log in</a></li>';
                        }

                       
                    ?>
                    <li><a href = "index.php">Catalog</a></li>
                    <li><a href = "feed.php">Feed</a></li>
                   
                    <li><a href = "main.php">Main</a></li>
                </ul>
            </nav>
        </header>