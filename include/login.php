<?php
$username = $_POST["username"];
$password = $_POST["password"];

echo "Username:" . $username;
echo "Password:" . $password;

//connect to PHPMyAdmin

$server = "s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "clirofc82mncomex";
$dbpassword = "oliv570vcjycahnz";
$dbname = "pokmu5ifhldpc02f";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

if ($conn->error) {
    echo $conn->error;
} else {
    echo "Connected";
}

//SQL query to see if login details match database

$sql = "select * from users 
        where username =  '$username'   
        and password = '$password'";

//run my query
$result = mysqli_query($conn, $sql);

//show result
if ($result->num_rows == 1) {
    echo "you have logged in";
    while ($row = $result->fetch_assoc()) {
        echo $row["firstname"];

        @session_start()
        $_SESSION["userID"] = $row["id"];
        $_SESSION["firstname"] = $row["firstname";]
    }
} else {
    echo "wrong username or password";
}
?>

<?php
if (!isset($_SESSION["userID"])){
?>

<form action="<?php $_SERVER["PHP_SELF"]; ?>"   method="post">
    <input name="username" type ="text" placeholder="Username">
    <input name="password" type ="password" placeholder="Password">
    <input name="submit" value="Post">

</form>
<?php
} else{
}
    ?>
    <a href="logout.php">logout<a/>
