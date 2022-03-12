<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Belt | Dojo Factory</title>
    <link rel="stylesheet" href="css/item_page.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $('#alert').hide();
            $('form').submit(function(){
                $('#alert').html('Item added to the cart').fadeIn().delay(3000).fadeOut();;
                return false;
            });
        });
    </script>
</head>
<body>
    <?php include_once('partials/header.php');?>
    <div class="content">
        <a href="product_page.php">Go Back</a>
        <div id="alert"></div>
        <h1>Black Belt</h1>
        <section>
            <img src="img/blackbelt.jpg" alt="blackbelt_picture">
            <img src="img/blackbelt.jpg" alt="blackbelt_picture">
            <img src="img/blackbelt.jpg" alt="blackbelt_picture">
            <img src="img/blackbelt.jpg" alt="blackbelt_picture">
            <img src="img/blackbelt.jpg" alt="blackbelt_picture">
            <img src="img/blackbelt.jpg" alt="blackbelt_picture">
        </section>
        <p>Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... Description about the product ... </p>
        <form action="" method="post">
        <h4>$19.99</h4>
            <input type="submit" value="Buy">
            <input type="number" min=1 value=1>
        </form>
        <h2>Similar Items</h2>
<?php for($i=1; $i<=10;$i++) { ?>
        <div class="container_product">
            <a href="item_page.php">
                <img src="img/blackbelt.jpg" alt="product_image">
                <p>$19.99</p>
                <p>Black Belt</p>
            </a>
        </div>
<?php } ?>
    </div>
</body>
</html>