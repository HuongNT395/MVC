<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>Product Manages</title>
</head>
<body>
<h1>Product Manager</h1>
<?php
require_once('G:\xampp\htdocs\CodeGym\Guitar_Shop\categories\model\CategoryDB.php');
$categories = new CategoryDB();
$category = $categories->getCategoryName();
?>
    <nav>
        <ul>
            <?php
            foreach ($category as $value):
            ?>
            <li>
                <a href="#"><?php echo $value['categoryName']?></a>
            </li>
            <?php endforeach;?>
        </ul>
    </nav>
</body>
</html>