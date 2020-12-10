<?php
$productID = $_POST["productID"];
$qty = $_POST["qty"];
@session_start();

if (isset($_SESSION["orderedProductIDs"])){

    $orderedProductIDs = $_SESSION["orderedProductIDs"];
    $orderedProductQtys = $_SESSION["orderedProductQtys"];
    if (in_array($productID, $orderedProductIDs)){
        $index = array_search($productID, $orderedProductIDs);
        $orderedProductQtys[$index] = $orderedProductQtys[$index] + $qty;
    }else{

        array_push($orderedProductIDs, $productID);
        array_push($orderedProductQtys, $qty);
    }

}else{
    $orderedProductIDs = [];
    $orderedProductQtys = [];
    array_push($orderedProductIDs, $productID);
    array_push($orderedProductQtys, $qty);
}
$_SESSION["orderedProductIDs"] = $orderedProductIDs;
$_SESSION["orderedProductQtys"] = $orderedProductQtys;

//go back to previous page
header('Location: ' . $_SERVER['HTTP_REFERER']);