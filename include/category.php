<?php

$server = "s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "clirofc82mncomex";
$dbpassword = "oliv570vcjycahnz";
$dbname = "pokmu5ifhldpc02f";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);


$sql = "select * from category";


$result = mysqli_query($conn,$sql);


while ($row = $result->fetch_assoc()){
    ?>
    <li><a href="index.php?category=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
    <?php
}