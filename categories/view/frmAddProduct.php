<?php
include ('../until/header.php');
require_once ('../model/CategoryDB.php');
?>
    <form action="../controller/AddController.php" method="post">
        <div class="row">
            <div class="input">
                CategoryID
            </div>
            <div class="value">
                <select name="categoryID">
                    <?php
                    $cate = new CategoryDB();
                    $category = $cate->getCategoryID();
                    foreach ($category as $val):?>
                        <option><?php echo $val['categoryID'];?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="input">
                dateAdded
            </div>
            <div class="value">
                <input type="datetime-local" name="date">
            </div>
        </div>
        <div class="row">
            <div class="input">
                description
            </div>
            <div class="value">
                <input type="text" name="description" multiple>
            </div>
        </div>
        <div class="row">
            <div class="input">
                discountPercent
            </div>
            <div class="value">
                <input type="number" name="percent">
            </div>
        </div>
        <div class="row">
            <div class="input">
                listPrice
            </div>
            <div class="value">
                <input type="number" name="price">
            </div>
        </div>
        <div class="row">
            <div class="input">
                productCode
            </div>
            <div class="value">
                <input type="text" name="productCode">
            </div>
        </div>
        <div class="row">
            <div class="input">
                productName
            </div>
            <div class="value">
                <input type="text" name="productName">
            </div>
        </div>
        <div class="row">
            <div class="input">
                ''
            </div>
            <div class="value">
                <button type="submit">Add</button>
            </div>
        </div>
    </form>
