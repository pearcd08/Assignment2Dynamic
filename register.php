<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$address = $_POST["address"];
$phone = $_POST["phone"];


//1. connect to database
$server = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "t8kmpw42fmp1smpt";
$dbpassword = "fdavedw769oxw5pd";
$dbname = "k2nfay1osz1i59kc";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. create a query to save user info
$sql = "INSERT INTO 'users'('id','firstname','lastname','username','password','address','phone');
VALUES (NULL,'$firstname','$lastname','$username','$password','$address','$phone')";


//3. run query
if (mysqli_query($conn, $sql)) {
    echo "data has been inserted";
}else{
    echo "<a href='Homepage.php'>Home</a>";
}
;
