<?php
    require_once ('../model/ProductDB.php');
    $proID = $_GET['productId'];
    $pro = new ProductDB();
    $pro->deleteProduct($proID);
    header('Location: ../index.php?action=disList_product');
?>