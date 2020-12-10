<?php

$server = "s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "clirofc82mncomex";
$dbpassword = "oliv570vcjycahnz";
$dbname = "pokmu5ifhldpc02f";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

if (isset($_GET["category"])){
    echo "<h1>".$_GET["category"]."</h1>";
    $sql = "select * from Products where category = ".$_GET["category"];
}else{
    $sql = "select * from Products";
}



$result = mysqli_query($conn,$sql);


while ($row = $result->fetch_assoc()){
    ?>
    <div>
        <p><?php echo $row["name"]; ?></p>
        <p><?php echo $row["price"]; ?></p>
        <p><img src="<?php echo $row["image"]; ?>"</p>
        <form action="addToCart.php" method="post">
            <input name="productID" value="<?php echo $row["id"]; ?>" type="hidden">
            <label>
                <input name="qty" type="number" placeholder="QTY" min="0">
            </label>
            <input type="submit" value="Add to cart">
        </form>
    </div>
    <?php
}
