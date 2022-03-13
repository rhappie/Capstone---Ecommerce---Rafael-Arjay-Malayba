<!-- 
    This page is displayed when an admin clicks the preview button from add product or edit product modal
    Owner: Rafael Arjay Malayba
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Page | Dojo Factory</title>
    <link rel="stylesheet" href="css/item_page.css">
</head>
<body>
<!-- call of header for the page -->
    <?php include_once('partials/header.php');?>
    <div class="content">
        <a href="product_page.php">Go Back</a>
        <div id="alert">Preview Only</div>
        <h1><?=$_POST['name']?></h1>
        <section>
<!-- This display all the images that are in $_FILES from the form submitted in the modal -->
<?php for($i=0; $i<count($_FILES['file-input']['tmp_name']);$i++) { ?>
            <img src="data:image/png;base64, <?=base64_encode(file_get_contents($_FILES['file-input']['tmp_name'][$i]));?>" alt="blackbelt_picture">
<?php } ?>
        </section>
        <p><?=$_POST['details']?></p>
        <form action="" method="post">
            <h4>$19.99</h4>
            <input type="submit" value="Buy">
            <input type="number" min=1 value=1>
        </form>
        <h2>Similar Items</h2>
<!-- display recommended items related to the product -->
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