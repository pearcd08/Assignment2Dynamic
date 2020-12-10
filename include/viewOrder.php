<?php
@session_start();
$userID = $_SESSION["userID"];
function createDatabaseConnection(){

    $server = "s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "clirofc82mncomex";
    $dbpassword = "oliv570vcjycahnz";
    $dbname = "pokmu5ifhldpc02f";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    return $conn;
}


$conn = createDatabaseConnection();


$sql = "select * from orders where userID = $userID";


$result = mysqli_query($conn, $sql);


while ($row = $result->fetch_assoc()){
    echo "<h3>Order Number: ".$row["orderNum"]."</h3>";
    echo "<h3>Shipping Address: ".$row["shipAddress"]."</h3>";
    echo "<h3>Time: ".$row["orderdate"]."</h3>";


    $sql2 = "select * from orderedProducts where orderID = ".$row["orderNum"];

    $result2 = mysqli_query($conn, $sql2);
    while ($row2 = $result2->fetch_assoc()){
        echo "<p>ID: ".$row2["productID"]." Qty: ".$row2["qty"]."</p>";
    }
}
?>