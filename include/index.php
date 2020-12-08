<?php

//set values to session variables
//$_SESSION["username"] = "lei";
//$_SESSION["password"] = "song";
//$_SESSION["color"] = "red";
//$_SESSION["Address"] = "139 Carrington Road";
if (isset($_POST["message"])){
    echo "<p>I have a post message in this page</p>";
    //start a session
    @session_start();
    //set session variable
    $_SESSION["message"] = $_POST["message"];
}else{
    echo "<p>Please post a message to me</p>";
}
?>
<html>
<head>
    <title>Session Exercise</title>
</head>

<body>
<ul>
    <li><a href="page1.php">Page 1</a> </li>
    <li><a href="page2.php">Page 2</a> </li>
    <li><a href="page3.php">Page 3</a> </li>
    <li><a href="page4.php">Page 4</a> </li>
    <li><a href="page5.php">Page 5</a> </li>
</ul>

<form action="<?php $_SERVER["PHP_SELF"]; ?>"  method="post">
    <input name="message" type="text" placeholder="message here">
    <input type="submit" value="Post">
</form>
<div>
    <img class="rotate_01" src="../images/yarn.png" style="background:transparent">
</div>


<div id = "menu">
    <ul>
        <li><a href="Dog.html" class="active">Dog</a></li>
        <li><a href="cat.html">Cat</a></li>
        <li><a href="Bird.html">Bird</a></li>
        <li><a href="Fish.html">Fish</a></li>
    </ul>
</div>

<div class="product">
    <img src="../images/dog1.webp ">
    <p>$6.50 ea</p>
    <p>qty:<input class="qty" id="Dog1Qty" type="number">
        <button class = "addBut" id="addDog1" onclick="addToCart(this)" price="5.50">Add to Cart</button>
    </p>
</div>

<div class="product">
    <img src="../images/dog2.webp">
    <p>$7.50 ea</p>
    <p>qty:<input class="qty" id="Dog2Qty" type="number">
        <button class = "addBut" id="addDog2" onclick="addToCart(this)" price="6.50">Add to Cart</button>
    </p>
</div>

<div class="product">
    <img src="../images/dog3.webp">
    <p>$8.50 ea</p>
    <p>qty:<input class="qty" id="Dog3Qty" type="number">
        <button class = "addBut" id="addDog3" onclick="addToCart(this)" price="7.50">Add to Cart</button>
    </p>
</div>
<td id="rightside">
    3
    <p>Cart:</p>
    <div id="cartDiv"></div>
    <button id="showInvoiceBut">Invoice</button>
</td>
</tr>
</table>
</div>

<!-- The Voice Page -->
<div id="voicePage" class="voice">

    <!-- Modal content -->
    <div id="voice-content">
        <span class="close">&times;</span>
        <p>Please check your invoice</p>
    </div>

</div>


</div>




</body>
</html>
