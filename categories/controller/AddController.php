<?php

//    require_once ('../categories/model/Products.php');
    $categoryID = $_POST['categoryID'];
    echo $categoryID;
    $date = $_POST['date'];
    $description = $_POST['description'];
    $percent = $_POST['percent'];
    $price = $_POST['price'];
    $proCode = $_POST['productCode'];
    echo $proCode;
    $proName = $_POST['productName'];
    require_once ('../model/ProductDB.php');
    $pro = new ProductDB();
    $pro->addProduct($categoryID, $date, $description, $percent, $price, $proCode, $proName);
    header('Location: ../index.php?action=disList_product');
//    require_once ('../index.php?action=disList_product');
?>