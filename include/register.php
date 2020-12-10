<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$address = $_POST["address"];
$phone = $_POST["phone"];
if ($firstname == "" || $lastname==""){

    $server = "s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "clirofc82mncomex";
    $dbpassword = "oliv570vcjycahnz";
    $dbname = "pokmu5ifhldpc02f";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);


    $sql = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `username`, `password`, `address`, `phoneNumber`) 
VALUES (NULL,'$firstname','$lastname','$username','$password','$address','$phone')";


    if (mysqli_query($conn, $sql)){
        echo "New User Added";
    }else{
        echo "Complete all fields";
    }
}
else{
    echo "there should not be empty input";
}


echo "<a href='index.php'>Home</a>";
?>