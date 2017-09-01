<?php
require_once ('G:\xampp\htdocs\CodeGym\Guitar_Shop\database\database.php');
/**
 * Created by PhpStorm.
 * User: kabi1
 * Date: 30/8/2017
 * Time: 10:46 AM
 */
class CategoryDB
{
    public function getSomethingCategoryName($cateID) {
        $conn = database::connect();
        $query = "SELECT categoryName FROM categories WHERE categoryID=$cateID";
        $result = $conn->query($query);
        return $result;
    }

    public function getCategoryName() {
        $conn = database::connect();
        $query = "SELECT categoryName FROM categories";
        $result = $conn->query($query);
        return $result;
    }

    public function getCategoryID() {
        $conn = database::connect();
        $query = "SELECT categoryID FROM categories";
        $result = $conn->query($query);
        return $result;
    }
}