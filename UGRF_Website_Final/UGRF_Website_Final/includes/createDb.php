<?php

$dtaabase = new CreateDb();


class CreateDb {

    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    //class constructer
    public function __construct($dbname = "Newdb", $tablename="Productdb", $servername="localhost", $username = "root", $password = ""){

        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        //create connection

        $this->con = mysqli_connect($servername, $username, $password);

        //check connection

        if(!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        //query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        
        //execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);
            
            //create new table
            $sql = "CREATE TABLE IF NOT EXISTS $tablename (
                id INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                product_name varchar(25) NOT NULL,
                product_price FLOAT NOT NULL,
                product_image varchar(100)
            )";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table" . mysqli_error($this->con);
            }else{
                return false;
            }

        }

    }

    //get data
    public function getData(){
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }else{
            echo "Error";
        }
    }
    public function getLaptopData(){
        $sql = "SELECT * FROM `products` WHERE `product_type` = 'Laptop'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }else{
            echo "Error";
        }
    }

    public function getStickerData(){
        $sql = "SELECT * FROM `products` WHERE `product_type` = 'Sticker'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }else{
            echo "Error";
        }
    }

    public function getConsoleData(){
        $sql = "SELECT * FROM `products` WHERE `product_type` = 'Console'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }else{
            echo "Error";
        }
    }

    public function getCustomLPData(){
        $sql = "SELECT * FROM `products` WHERE `product_type` = 'Custom Laptop'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
        else{
            echo "Error";
        }
    }

}
