<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="aboutUs.php">About Us</a></li>
    <li><a href="cart.php">Cart</a></li>
    <?php include "category.php";?>

    <?php
    @session_start();
    if (isset($_SESSION["userID"])){
        ?>
        <li><a href="viewOrder.php">My Orders</a> </li>
        <?php
    }
    ?>

</ul>