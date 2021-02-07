<?php

    include_once( "header.php");
    require_once("includes/product.php");
    require_once("includes/createDb.php");

    $database = new CreateDb("ugrf_db", "posts");
    
?>

<div id = "feed">

<ul class="feed_list">
<?php
    $result = $database->getData();

    while($row = mysqli_fetch_assoc($result)){
        post($row["title"], $row["body"], $row["image"], $row['date']);
    }
?>
</ul>

</div>

<?php
    include_once("footer.php")
?>