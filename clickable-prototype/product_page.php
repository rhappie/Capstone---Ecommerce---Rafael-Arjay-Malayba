<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page | DOjo Factory</title>
    <link rel="stylesheet" href="css/product_page.css">
</head>
<body>
<?php include_once('partials/header.php'); ?>
    <div class="content">
        <div class="container_filter">
            <form action="" method="POST">
                <input type="text">
                <img src="img/search_button.png" alt="search_button">
            </form>
            <h4>Categories</h4>
            <ul>
                <li>Tshirts (25)</li>
                <li>Shoes (35)</li>
                <li>Cups (5)</li>
                <li>Fruits (105)</li>
                <li><em>Show All</em></li>
            </ul>
        </div>
        <div class="container_product_list">
            <h2>Tshirts (page 2)</h2>
            <nav>
                <a href="">first</a>
                <a href="">prev</a>
                <span>2</span>
                <a href="">next</a>
            </nav>
            <form action="" method="POST">
                <label for="sort">Sorted By:</label>
                <select name="sort" id="sort">
                    <option value="best">Best Match</option>
                    <option value="price">Price</option>
                    <option value="popular">Most Popular</option>
                </select>
            </form>
<?php for($i=1; $i<=15;$i++) { ?>
            <div class="container_product">
                <a href="item_page.php">
                    <img src="img/blackbelt.jpg" alt="product_image">
                    <p>$19.99</p>
                    <p>Black Belt</p>
                </a>
            </div>
<?php } ?>
            <nav>
<?php for($i=1; $i<=10;$i++) { ?>
            <a href=""><?=$i?></a>
<?php } ?>
                <a href="" id="last">-></a>
            </nav>
        </div>
    </div>
</body>
</html>