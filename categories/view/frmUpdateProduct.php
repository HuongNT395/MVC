<?php
include ('../until/header.php');
require_once ('../model/CategoryDB.php');
?>
<form action="../controller/UpdatedController.php" method="post">
    <input type="hidden" name="proID" value="<?php echo $product->getProductID()?>">
    <div class="row">
        <div class="input">
            CategoryID
        </div>
        <div class="value">
            <select name="categoryID">
                <option><?php echo $product->getCategoryId()?></option>
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
            <input type="datetime-local" name="date" value ="<?php echo $product->getDateAdded()?>">
        </div>
    </div>
    <div class="row">
        <div class="input">
            description
        </div>
        <div class="value">
            <input type="text" name="description" multiple value="<?php echo $product->getDescription()?>">
        </div>
    </div>
    <div class="row">
        <div class="input">
            discountPercent
        </div>
        <div class="value">
            <input type="number" name="percent" value="<?php echo $product->getDiscountPrecent()?>">
        </div>
    </div>
    <div class="row">
        <div class="input">
            listPrice
        </div>
        <div class="value">
            <input type="number" name="price" value="<?php echo $product->getListPrice()?>">
        </div>
    </div>
    <div class="row">
        <div class="input">
            productCode
        </div>
        <div class="value">
            <input type="text" name="productCode" value="<?php echo $product->getProductCode()?>">
        </div>
    </div>
    <div class="row">
        <div class="input">
            productName
        </div>
        <div class="value">
            <input type="text" name="productName" value="<?php echo $product->getProductName()?>">
        </div>
    </div>
    <div class="row">
        <div class="input">
            ''
        </div>
        <div class="value">
            <button type="submit">Update</button>
        </div>
    </div>
</form>
