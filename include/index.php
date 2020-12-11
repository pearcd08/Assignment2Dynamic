<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Petz.co.nz</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>

<div id="menu">
    <?php include "menu.php"; ?>
</div>

<a href="registerForm.html">Register</a>

<div id="header">
    <?php include "headerImage.php"; ?>
</div>

<div>
    <?php include "login.php"; ?>
</div>

<div id="menu">
    <ul>
        <?php include "category.php";?>
    </ul>
</div>

<div id="product">
    <h1>Products</h1>
    <?php include "products.php" ;?>
</div>


<div id="footer">Petz Food Company, Auckland, New Zealand</div>
</body>
</html>