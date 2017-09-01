<?php
require_once ('../categories/model/Products.php');
require_once ('../categories/model/ProductDB.php');
require_once ('../categories/model/CategoryDB.php');
/**
 * Created by PhpStorm.
 * User: kabi1
 * Date: 30/8/2017
 * Time: 10:56 AM
 */
class ControllerSystem
{
    function disProduct() {
        $pro = new ProductDB();
        $products = $pro->displayProduct();
        include ('view/displayProduct.php');
    }

    function showAddForm() {
        include ('view/frmAddProduct.php');
    }

    function action() {
        if(isset($_POST['action'])) {
            $action = $_POST['action'];
        } elseif (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = 'disList_product';
        }

        if($action == 'disList_product') {
            $this->disProduct();
        } elseif ($action == 'ShowAddForm') {
            $this->showAddForm();
        } elseif ($action == 'updateProduct') {
            $this->showUpdateProduct();
        }
    }
}