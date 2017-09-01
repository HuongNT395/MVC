<?php

/**
 * Created by PhpStorm.
 * User: kabi1
 * Date: 30/8/2017
 * Time: 10:43 AM
 */
class Category
{
    private $categoryID;
    private $categoryName;

    public function __construct($cateID, $cateName)
    {
        $this->categoryID = $cateID;
        $this->categoryName = $cateName;
    }

    /**
     * @return mixed
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param mixed $categoryName
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    /**
     * @param mixed $categoryID
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
    }
}