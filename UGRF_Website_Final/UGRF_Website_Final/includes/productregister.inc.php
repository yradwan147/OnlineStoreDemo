<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ugrf_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

function emptyInputProduct($product_name, $product_price, $productdesc){

    $result;
    if (empty($product_name) || empty($product_price) || empty($productdesc)){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

function invalidProductName($product_name){

    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $p)){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

function ProductNameExists($conn, $product_name){

    $sql = "SELECT * FROM products WHERE product_Name = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../productregister.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $product_Name);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
            return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function ProductRegister($conn, $product_name, $product_price, $product_type, $productdesc){

    $sql = "INSERT INTO products (product_Name, product_price, product_type, productdesc) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../productregister.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $product_name, $product_price, $product_type, $productdesc);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../productregister.php?error=none");
        exit();

}


if (isset($_POST["submit"])){

    $product_name = $_POST["product_name"];
    $product_desc = $_POST["product_desc"];
    $product_price = $_POST["product_price"];
    $product_type = $_POST["product_type"];
    ProductRegister($conn, $product_name, $product_price, $product_type, $product_desc);

    print_r("SUCCESS");

}
else{
    echo "<script>alert('error')</script>";
    header("location: ../productregister.php");
    exit();
}


?>