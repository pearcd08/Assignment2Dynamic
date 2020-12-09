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
    <img src = "../images/Header1.jpg.jpg">
</div>

    <div>
        <img class="rotate_01" src="../images/yarn.png">

    </div>


    <div id = "menu">
        <ul>
            <li><a href="Dog.html">Dog<</a></li>
            <li><a href="Cat.html">Cat</a></li>
            <li><a href="Bird.html">Bird</a></li>
            <li><a href="Fish.html">Fish</a></li>
        </ul>
        <?php include "menu.php";
        ?>
        <?php include "login.php";
        ?>
    </div>
</body>
<footer>
    <p>
        Petz Food Company, Auckland, New Zealand
    </p></footer>
</html>