<?php
$proID = $_POST['proID'];
$cateId = $_POST['categoryID'];
//echo $price;
$date = $_POST['date'];
$des = $_POST['description'];
$disCount = $_POST['percent'];
$price = $_POST['price'];
$proCode = $_POST['productCode'];
echo $proCode;
$proName = $_POST['productName'];
require_once ('../model/ProductDB.php');
$pro = new ProductDB();
$pro->updateProduct($proID,$cateId, $date, $des, $disCount, $price, $proCode, $proName);
header('Location: ../index.php?action=disList_product');
?>