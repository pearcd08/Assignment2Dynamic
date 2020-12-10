<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Petz Homepage</title>
    <link rel = "stylesheet" type = "text/css" href = "../css/stylesheet.css" >
    <script src="../js/script.js"></script>
  </head>



<body>

<div id = "header">
    <img src = "../images/Header1.jpg">
</div>

<img class="rotate_01" src="../images/yarn.png">



<div id = "menu">
        <?php include "menu.php"; ?>
        <?php include "login.php"; ?>
        <?php include "register.php"; ?>
    </div>
<div id="main">
    <h1>Products of the Week</h1>
    <?php include "products.php" ;?>
</div>
<footer>
    <p>
        Petz Food Company, Auckland, New Zealand
    </p></footer>
</body>
</html>