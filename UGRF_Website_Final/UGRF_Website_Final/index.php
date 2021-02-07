<?php

    include_once 'header.php';
    require_once 'includes/product.php';
    require_once 'includes/createDb.php';

    //create database instance
    $database = new CreateDb("ugrf_db", "products");


    if (isset($_POST['add'])){
        header("location: ./productpage.php?product=".$_POST['product_id']);
    }

?>

        <main class = "content">
            <header>
                <?php
                    if (isset($_SESSION["useruid"])){
                        echo '<h2>Hello there ' . $_SESSION["username"] . '</h2>';
                    }
                ?>
                <div class = "pic_header">
                <h1>Catalog</h1>
                </div>
            </header>

            <section id="section1" data-nav="Laptop Skins" class="your-active-class">
                <div class="landing__container">
                    <h2>Laptop Skins</h2>
                    <div id="outer">
		                <div class="wrap">
			                <ul>
                                <?php
                                    $result_lp = $database->getLaptopData();

                                    while($row = mysqli_fetch_assoc($result_lp)){
                                        product($row["product_name"], $row["product_price"]."$", $row["product_image"], $row["id"]);
                                    }
                                ?>
			                </ul>
		                </div>
                </div>
                </div>
            </section>

            <section id="section2" data-nav="Stickers">
                <div class="landing__container">
                    <h2>Stickers</h2>
                    <div id="outer">
		                <div class="wrap">
			                <ul>
                            <?php
                                    $result_lp = $database->getStickerData();

                                    while($row = mysqli_fetch_assoc($result_lp)){
                                        product($row["product_name"], $row["product_price"]."$", $row["product_image"], $row["id"]);
                                    }
                                ?>
			                </ul>
		                </div>
                </div>
                </div>
            </section>

            <section id="section3" data-nav="Playstation/Xbox">
                <div class="landing__container">
                    <h2>Playstation/Xbox</h2>
                    <div id="outer">
		                <div class="wrap">
			                <ul>
                            <?php
                                    $result_lp = $database->getConsoleData();

                                    while($row = mysqli_fetch_assoc($result_lp)){
                                        product($row["product_name"], $row["product_price"]."$", $row["product_image"], $row["id"]);
                                    }
                                ?>
			                </ul>
		                </div>
                </div>
                </div>
            </section>

            <section id="section4" data-nav="Custom Orders">
                <div class="landing__container">
                    <h2>Custom Orders</h2>
                    <div id="outer">
		                <div class="wrap">
			                <ul>
                            <?php
                                    $result_lp = $database->getCustomLPData();

                                    while($row = mysqli_fetch_assoc($result_lp)){
                                        product($row["product_name"], $row["product_price"]."$", $row["product_image"], $row["id"]);
                                    }
                                ?>
			                </ul>
		                </div>
                </div>
                </div>
            </section>

            <section id="section5" data-nav="Reviews">
                <div class="landing__container">
                    <h2>Reviews</h2>
                    <div class = "quotes_list">
                    <div>
                        <p class = "quote_img"><img src="assets/C1.jpg" height="400px" width="400px" border="1px"></p>
                        <p class = "quote">Thanks alot for this amazing skin!<br> -Mohamed Mohsen</p>
                    </div>
                    <br><br><br><br>
                    <div>
                        <p class = "quote_img"><img src="assets/C6.jpg" height="400px" width="400px" border="1px"></p>
                        <p class = "quote">The best skins for whatever you imagine ♥️♥️<br> -Zeyad Hesham</p>
                    </div>
                    <div>
                        <p class = "quote_img"><img src="assets/C7.jpg" height="400px" width="400px" border="1px"></p>
                        <p class = "quote">Awesome quality I recommend it ❤️<br> -Ahmad Zayed</p>
                    </div>
                    </div>
                </div>
            </section>

            

        </main>

    </body>

    <?php

include_once 'footer.php';

?>