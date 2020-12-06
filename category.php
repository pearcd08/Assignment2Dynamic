<?php
//1. Database credentials
$server = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "t8kmpw42fmp1smpt";
$dbpassword = "fdavedw769oxw5pd";
$dbname = "k2nfay1osz1i59kc";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. Query
$sql = "select * from category";

//3. run query from connection
$result = mysqli_query($conn,$sql);

//4. show result
while ($row = $result->fetch_assoc()){
    echo $row["id"]." ".$row["name"];
}