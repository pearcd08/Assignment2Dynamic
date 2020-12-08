<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$address = $_POST["address"];
$phone = $_POST["phone"];


//1. connect to database
$server = "s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "clirofc82mncomex";
$dbpassword = "oliv570vcjycahnz";
$dbname = "pokmu5ifhldpc02f";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. create a query to save user info
$sql = "INSERT INTO 'users'('id','firstname','lastname','username','password','address','phone');
VALUES (NULL,'$firstname','$lastname','$username','$password','$address','$phone')";


//3. run query
if (mysqli_query($conn, $sql)) {
    echo "data has been inserted";
}else{
    echo "<a href='../StaticWebsite/Homepage.html'>Home</a>";
}
;
