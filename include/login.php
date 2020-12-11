<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $server = "s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "clirofc82mncomex";
    $dbpassword = "oliv570vcjycahnz";
    $dbname = "pokmu5ifhldpc02f";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);


    $sql = "select * from users 
            where username = '$username' and 
            password = '$password'";

        $result = mysqli_query($conn, $sql);

    if ($result->num_rows == 1) {
        echo "You are logged in as ";
        while ($row = $result->fetch_assoc()) {
            echo $row["firstname"];
            echo $row["lastname"];
            @session_start();
            $_SESSION["userID"] = $row["id"];
            $_SESSION["firstname"] = $row["firstname"];
        }
    } else {
        echo "Enter username and password";
    }


}

if (!isset($_SESSION["userID"])) {
    ?>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
        <label>
            <input name="username" type="text" placeholder="Username">
        </label>
        <input name="password" type="password" placeholder="Password">
        <input type="submit" value="Login">
    </form>
    <?php
}else{

    echo '<a href="logout.php"><button>"logout"</button></a>';

}
?>