<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | Dojo Factory</title>
    <link rel="stylesheet" href="css/cart_page.css">
</head>
<body>
<?php include_once('partials/header.php'); ?>
    <div class="content">
        <table>
            <thead>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </thead>
            <tbody>
                <tr>
                    <td>Black Belt for Staff</td>
                    <td>$19.99</td>
                    <td>1 <a href="">update</a> <img src="img/delete_logo.png" alt="delete_logo"></td>
                    <td>$19.99</td>
                </tr>
                <tr>
                    <td>CodingDojo Cups</td>
                    <td>$9.99</td>
                    <td>3 <a href="">update</a> <img src="img/delete_logo.png" alt="delete_logo"></td>
                    <td>$29.97</td>
                </tr>
            </tbody>
        </table>
        <h4>Total: $49.96</h4>
        <a href="product_page.php">Continue Shopping</a>
        <form action="" method="POST">
            <h2>Shipping Information</h2>
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Address 2:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>State:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Zipcode:</td>
                    <td><input type="text"></td>
                </tr>
            </table>
            <h2>Billing Information</h2>
            <input type="checkbox" name="same_info" id="same_info">
            <label for="same_info">Same as Shipping</label>
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Address 2:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>State:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Zipcode:</td>
                    <td><input type="text"></td>
                </tr>
                <tr id="card_input">
                    <td >Card:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Security Code:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Expiration:</td>
                    <td>
                        <select name="" id="">
                            <option value="" selected disabled hidden>(mm)</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="11">12</option>
                        </select> / 
                        <select name="" id="" value="(year)">
                            <option value="" selected disabled hidden>(year)</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Pay">
        </form>
    </div class="content">
</body>
</html>