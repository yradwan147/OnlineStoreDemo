<?php

    include_once 'header.php';

?>

    <section class="login-form" data-nav= "Log in">
        <h2>Log in</h2>
        <form action="includes/login.inc.php" method="post">
            <input type ="text" name="name" placeholder="Username/Email">
            <input type ="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Login</button>
        </form>

        <?php
        if (isset($_GET['error'])){
            if ($_GET['error'] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET['error'] == "wronglogin"){
                echo "<p>Incorrect Credentials!</p>";
            }
        }
        ?>

    </section>
    
    
<?php

include_once 'footer.php';

?>