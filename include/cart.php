<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
@session_start();

$orderedProductIDs = $_SESSION["orderedProductIDs"];
$orderedProductQtys = $_SESSION["orderedProductQtys"];

$i = 0;
$total = 0;
while ($i<sizeof($orderedProductIDs)){
    $orderedProductID = $orderedProductIDs[$i];
    $orderedProductQty = $orderedProductQtys[$i];
    $productName = getProductNameByProductID($orderedProductID);
    $price=getProductPriceByProductID($orderedProductID);
    echo "<p>Name: $productName Qty: $orderedProductQty Unit Price: $price
         Price: ".($price*$orderedProductQty)."</p>";
    $total = $total + ($price*$orderedProductQty);
    $i++;
}
echo "<p>Total: $total</p>";
//if ($total > ???){
//
//}else{
//
//}

if (isset($_SESSION["userID"])){
    ?>

    <form action="checkout.php" method="post">
        <textarea name="shippingAddress" rows="10" cols="50"></textarea>
        <input type="submit" value="Check out">
    </form>

    <?php
}else{
    echo "you need to login";
}

function createDatabaseConnection(){
    $server = "s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "clirofc82mncomex";
    $dbpassword = "oliv570vcjycahnz";
    $dbname = "pokmu5ifhldpc02f";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    return $conn;
}

/**
 * @name getProductNameByProductID
 * @param $productID
 * @return product name
 */
function getProductNameByProductID($productID){
       $conn = createDatabaseConnection();
       $sql = "select name from products where id=$productID";


    $result = mysqli_query($conn, $sql);


    while ($row = $result->fetch_assoc()){
        $name = $row["name"];
    }
    return $name;
}


/**
 * @name getProductPriceByProductID
 * @param $productID
 * @return product price
 */
function getProductPriceByProductID($productID){
    $conn = createDatabaseConnection();
    $sql = "select price from products where id=$productID";
    $result = mysqli_query($conn, $sql);


    while ($row=$result->fetch_assoc()){
        $price = $row["price"];
    }
    return $price;
}