<?php

    include_once 'header.php';

?>

    <section class="signup-form" data-nav= "Sign up">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type ="text" name="name" placeholder="Full Name">
            <input type ="text" name="email" placeholder="Email">
            <input type ="number" name="pnumber" placeholder="Phone Number">
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <select id="area" name="area">
            <option value="Greater Cairo">Greater Cairo</option>
            <option value="Alexandria/Canal Cities">Alexandria/Canal Cities</option>
            <option value="Delta">Delta</option>
            <option value="Southern Egypt">Southern Egypt</option>
            <option value="Red Sea">Red Sea</option>
            </select> 
            <input type ="text" name="address" placeholder="Address">
            <input type ="text" name="uid" placeholder="Username">
            <input type ="password" name="pwd" placeholder="Password">
            <input type ="password" name="pwdrepeat" placeholder="Repeat Password">
            <button type="submit" name="submit">Sign Up</button>
        </form>

        <?php
        if (isset($_GET['error'])){
            if ($_GET['error'] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET['error'] == "invaliduid"){
                echo "<p>Choose a proper username!</p>";
            }else if ($_GET['error'] == "invalidemail"){
                echo "<p>Choose a proper email!</p>";
            }else if ($_GET['error'] == "pwddontmatch"){
                echo "<p>Passwords don't match!</p>";
            }else if ($_GET['error'] == "stmtfailed"){
                echo "<p>Something went wrong, try again!</p>";
            }else if ($_GET['error'] == "usernametaken"){
                echo "<p>Username already taken!</p>";
            }else if ($_GET['error'] == "none"){
                echo "<p>User Registered!</p>";
        }
    }
    ?>

    </section>
    
    
<?php

include_once 'footer.php';

?>