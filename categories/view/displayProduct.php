<?php
require_once ('G:\xampp\htdocs\CodeGym\Guitar_Shop\categories\until\header.php');
?>
<article>
    <p class="add"><a href="?action=ShowAddForm">Add a Product</a></p>
    <table border="1">
        <tr>
            <th>categoryID</th>
            <th>dateAdded</th>
            <th>description</th>
            <th>discountPercent</th>
            <th>listPrice</th>
            <th>productCode</th>
            <th>productID</th>
            <th>productName</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        foreach ($products as $val ):
        ?>
        <tr>
            <td><?php echo $val->getCategoryID();?></td>
            <td><?php echo $val->getDateAdded();?></td>
            <td class="descrip"><?php echo $val->getDescription();?></td>
            <td><?php echo $val->getDiscountPrecent();?></td>
            <td><?php echo $val->getListPrice();?></td>
            <td><?php echo $val->getProductCode();?></td>
            <td><?php echo $val->getProductID();?></td>
            <td><?php echo $val->getProductName();?></td>
            <td>
                <a href="controller/updateController.php?productID=<?php echo $val->getProductID();?>" name="action" value="updateProduct">Update</a>
<!--                <form action="." method="post">-->
<!--                    <input type="hidden" name="action" value="updateProduct">-->
<!--                    <input type="hidden" name="productID" value="--><?php //echo $val->getProductID();?><!--">-->
<!--                    <button type="submit">Update</button>-->
<!--                </form>-->
            </td>
            <td><a href="#" onclick="deleteProduct(<?php echo $val->getProductID();?>)">Delete</a></td>
        </tr>
        <?php endforeach;?>
    </table>
</article>
<script language="JavaScript">
    function deleteProduct(proID) {
        var answer = confirm("Chắc chắn xóa sản phẩm này?");
        if(answer) {
            window.location = 'controller/deleteProductController.php?productId='+proID;
        }
    }
</script>
