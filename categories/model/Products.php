<?php

/**
 * Created by PhpStorm.
 * User: kabi1
 * Date: 30/8/2017
 * Time: 10:25 AM
 */
class Products
{
    private $categoryId;
    private $dateAdded;
    private $description;
    private $discountPrecent;
    private $listPrice;
    private $productCode;
    private $productID;
    private $productName;

    public function __construct($cateId, $date, $des, $disCount, $price, $proCode, $proID, $proName)
    {
        $this->categoryId = $cateId;
        $this->dateAdded = $date;
        $this->description = $des;
        $this->discountPrecent = $disCount;
        $this->listPrice = $price;
        $this->productCode = $proCode;
        $this->productID = $proID;
        $this->productName = $proName;
    }

    public function getCategoryId() {
        return $this->categoryId;
    }

    public function setCategoryId($value) {
        $this->categoryId = $value;
    }

    public function getDateAdded() {
        return $this->dateAdded;
    }

    public function setdateAdded($value) {
        $this->dateAdded = $value;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($value) {
        $this->description = $value;
    }

    public function getDiscountPrecent() {
        return $this->discountPrecent;
    }

    public function setDiscountPrecent($value) {
        $this->discountPrecent = $value;
    }

    public function getListPrice() {
        return $this->listPrice;
    }

    public function setListPrice($value) {
        $this->listPrice = $value;
    }

    public function getProductCode() {
        return $this->productCode;
    }

    public function setProductCode($value) {
        $this->productCode = $value;
    }

    public function getProductID() {
        return $this->productID;
    }

    public function setProductID($value) {
        $this->productID = $value;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function setProductName($value) {
        $this->productName = $value;
    }



}