<?php
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

function createDatabaseConnection(){
    //1. connect to database
    $server = "s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "clirofc82mncomex";
    $dbpassword = "oliv570vcjycahnz";
    $dbname = "pokmu5ifhldpc02f";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    return $conn;
}

function getProductNameByProductID($productID){
        $conn = createDatabaseConnection();
        $sql = "select name from Products where id=$productID";

        $result = mysqli_query($conn, $sql);

        while ($row = $result->fetch_assoc()){
        $name = $row["name"];
    }
    return $name;
}

function getProductPriceByProductID($productID){
    $conn = createDatabaseConnection();
    $sql = "select price from Products where id=$productID";
    $result = mysqli_query($conn, $sql);


    while ($row=$result->fetch_assoc()){
        $price = $row["price"];
    }
    return $price;
}

$userID = $_SESSION["userID"];
$shippingAddress = $_POST["shippingAddress"];
date_default_timezone_set("Pacific/Auckland");
$datetime = date("Y-m-d H:i:s");

function createAnOrder($userID, $shippingAddress, $datetime){
    $conn = createDatabaseConnection();
    $sql = "INSERT INTO `orders`(`orderNum`, `userID`, `shipAddress`, `orderdate`) 
            VALUES (NULL,$userID,'$shippingAddress','$datetime')";
    echo $sql;
    mysqli_query($conn, $sql);
    $orderID = mysqli_insert_id($conn);
    return $orderID;
}

function insertProductToOrderedTable($orderID, $productID, $qty){
    $conn = createDatabaseConnection();
    $sql = "INSERT INTO `orderedProducts`(`orderedProductID`, `orderID`, `productID`, `qty`) 
            VALUES (NULL,$orderID,$productID,$qty)";
    mysqli_query($conn, $sql);
}

//ORDER CREATED

$orderID = createAnOrder($userID, $shippingAddress, $datetime);
$i = 0;
while ($i < sizeof($orderedProductIDs)){
    $productID = $orderedProductIDs[$i];
    $qty = $orderedProductQtys[$i];
    insertProductToOrderedTable($orderID, $productID, $qty);
    $i++;
}

//EMPTY THE CART

$_SESSION["orderedProductIDs"] = [];
$_SESSION["orderedProductQtys"] = [];

?>
