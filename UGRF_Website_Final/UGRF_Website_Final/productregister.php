<?php
	session_start();
?>

<html>
<style>
body {
	background: url("assets/1111.jpg") fixed;
	}
input[type=text], select {
  width: 600;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
textarea {
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 1200;
  background-color: RED;
  color: white;
  padding: 14px 20px;
  margin: 8px 0 0 20%;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #961906;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
label {
	background: url(assets/gradientgrey.jpg) repeat-x;
	text-transform: bold;
	font-family: Arial;
	font-size:20px;
	border-left:5px solid red;
	border-radius:3px; 
	width:100%;
	margin-left:3px;
	padding-top:5px;
	padding-bottom:5px;
	padding-left:5px;
	padding-right:5px;
}
h1 {
	text-transform: bold;
	font-family: Arial, Helvetica, sans-serif;
	border-left:5px solid red;
	border-radius:3px; width:700;
	background: url(assets/gradientgrey.jpg) repeat-x;
	font-size:30px;
	margin-left: 3px;
	padding-top:5px;
	padding-bottom:5px;
	padding-left:5px;
	padding-right:5px;
	}
h2 {
	font-family: Arial;
	border-left:5px solid red;
	border-radius:3px; width:200;
	background: url(assets/gradientgrey.jpg) repeat-x;
	font-size:18px;
	margin-left: 3px;
	padding-top:5px;
	padding-bottom:5px;
	padding-left:5px;
	padding-right:5px;
	}
</style>
<body>
<h1>Enter product details:</h1><br><br>
<form action="includes/productregister.inc.php" method="POST">
 <label for="1">product name:</label><br><br>
 <input type="text" id=1 name="product_name" required><br><br>
 <label for="2">product description:</label><br><br>
 <textarea name="product_desc" id=2 rows="30" cols="120" required></textarea><br><br>
 <label for="3">product price:</label><br><br>
 <input type="number" id=3 name="product_price" required><br><br><br><br>
 <h2>product type:</h2><br><br>
 <input type="radio" id="stickers" name="product_type" value="Sticker">
 <label for="stickers">Sticker</label><br><br><br>
 <input type="radio" id="laptop_skins" name="product_type" value="Laptop">
 <label for="laptop_skins">Laptop</label><br><br><br>
 <input type="radio" id="console" name="product_type" value="Console">
 <label for="console">Console</label><br><br><br>
 <input type="submit" name="submit" value="submit">
</form>

</body>
</html>