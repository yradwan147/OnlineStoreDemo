<?php

if (isset($_POST["submit"])){
    echo "It works";

    $pnumber = $_POST["pnumber"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $area = $_POST["area"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat, $pnumber, $gender, $address, $area) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false){
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=pwddontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    //ADD ERROR HANDLERS

    createUser($conn, $name, $email, $username, $pwd, $pnumber, $gender, $address, $area);

}
else{
    header("location: ../signup.php");
    exit();
}