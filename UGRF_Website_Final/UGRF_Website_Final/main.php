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
        <link href="style_main.css" rel="stylesheet">

    </head>

    <body>

        <header>
            <nav id = "navigation" class = "navbar__menu">
                <ul id = "navbar__list">
                    <li><a href = "main.php">Main</a></li>
                    <li><a href = "index.php">Catalog</a></li>
                    <?php
                        if (isset($_SESSION["useruid"])){
                            echo '<li><a href ="profile.php">Your Profile</a></li>';
                            echo '<li><a href ="includes/logout.inc.php">Log out</a></li>';
                        }
                        else{
                            echo '<li><a href ="signup.php">Sign up</a></li>';
                            echo '<li><a href ="login.php">Log in</a></li>';
                        }
                    ?>
                </ul>
            </nav>
        </header>
<body>
<div id="container">
  <h1>GAIMIZ</h1>
  <h1>GAIMIZ</h1>
  <h1>GAIMIZ</h1>
  <img src = "assets/logo2.gif">
</div>
</body>
