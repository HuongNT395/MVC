<?php
/**
 * Created by PhpStorm.
 * User: kabi1
 * Date: 31/8/2017
 * Time: 03:18 PM
 */
require_once ('../model/ProductDB.php');
$proID = $_GET['productID'];
$pro = new ProductDB();
$product = $pro->getOneProduct($proID);
include("../view/frmUpdateProduct.php");
?>