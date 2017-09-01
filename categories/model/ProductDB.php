<?php
require_once ('G:\xampp\htdocs\CodeGym\Guitar_Shop\database\database.php');
require_once ('G:\xampp\htdocs\CodeGym\Guitar_Shop\categories\model\Products.php');
/**
 * Created by PhpStorm.
 * User: kabi1
 * Date: 30/8/2017
 * Time: 10:57 AM
 */
class ProductDB
{
    public function displayProduct() {
        $conn = database::connect();
        $query = "SELECT * FROM products";
        $products = array();
        $result = $conn->query($query);
        foreach($result as $val){
            $cateID = $val['categoryID'];
            $date = $val['dateAdded'];
            $des= $val['description'];
            $dis = $val['discountPercent'];
            $pri = $val['listPrice'];
            $code = $val['productCode'];
            $ID = $val['productID'];
            $name = $val['productName'];
            $pro = new Products($cateID, $date, $des, $dis, $pri, $code, $ID, $name);
            $products[] = $pro;
        }
        return $products;
    }

    public function addProduct($cateID, $date, $des, $dis, $pri, $code, $name) {
        $conn = database::connect();
        $query = "INSERT INTO products (categoryID, productCode, productName, description,listPrice, discountPercent, dateAdded)
        VALUES ($cateID, '".$code."', '".$name."', '".$des."', '".$pri."', '".$dis."', '".$date."')";
        echo $query;
        $conn->exec($query);
    }

    public function deleteProduct( $productID) {
        $conn = database::connect();
        $query = "DELETE FROM products WHERE productID=$productID";
        $conn->exec($query);
    }

    public function getOneProduct($proID) {
        $conn = database::connect();
        $query = "SELECT * FROM products WHERE productID=$proID";
        $result = $conn->query($query);
        $val = $result->fetch();
        $cateID = $val['categoryID'];
        $date = $val['dateAdded'];
        $des= $val['description'];
        $dis = $val['discountPercent'];
        $pri = $val['listPrice'];
        $code = $val['productCode'];
        $ID = $val['productID'];
        $name = $val['productName'];
        $pro = new Products($cateID, $date, $des, $dis, $pri, $code, $ID, $name);
//        $products = new Products((int)$pro['categoryID'],$pro['dateAdded'],$pro['description'],(float)$pro['discountPercent'],(float)$pro['listPrice'],$pro['productCode'],$pro['productName']);
        return $pro;
    }

    public function updateProduct($pro,$cateID, $date, $des, $dis, $pri, $code, $name) {
        $conn = database::connect();
        $query ="UPDATE products 
                  SET categoryID=$cateID,productCode='".$code."',productName='".$name."',description='".$des."',
                  listPrice=$pri,discountPercent=$dis,dateAdded='".$date."' WHERE productID=$pro";
        echo $query;
        $conn->exec($query);
    }
}