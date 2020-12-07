<?php
//connect to database
$server = "s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "clirofc82mncomex";
$dbpassword = "oliv570vcjycahnz";
$dbname = "pokmu5ifhldpc02f";

//query to connect to database credentials
$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//error message and success message
if($conn->error){
    echo $conn->error;
}else{
    echo "Connected to Database";
}
//write query
$sql = "select * from users";

// execute query
$result = mysqli_query($conn, $sql);

//show result
while ($row = $result->fetch_assoc()) {
    echo $row["id"];
}