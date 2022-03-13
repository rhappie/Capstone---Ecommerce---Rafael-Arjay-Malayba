<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail | Dojo Factory</title>
    <link rel="stylesheet" href="css/admin_order_details.css">
</head>
<body>
<?php include_once('partials/header_admin.php'); ?>
    <div class="content">
        <aside>
            <h4 class="last_info">Order ID: 1</h4>
            <h4>Customer shipping info:</h4>
            <p>Name: Bob</p>
            <p>Address: 123 dojo way</p>
            <p>City: Seattle</p>
            <p>State: WA</p>
            <p class="last_info">Zip Code: 98133</p>
            <h4>Customer Billing Info:</h4>
            <p>Name: Bob</p>
            <p>Address: 123 dojo way</p>
            <p>City: Seattle</p>
            <p>State: WA</p>
            <p class="last_info">Zip Code: 98133</p>
        </aside>
        <section>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </thead>
                <tbody>
                    <tr>
                        <td>35</td>
                        <td>cup</td>
                        <td>$9.99</td>
                        <td>1</td>
                        <td>$9.99</td>
                    </tr>
                    <tr>
                        <td>215</td>
                        <td>shirt</td>
                        <td>$19.99</td>
                        <td>2</td>
                        <td>$39.98</td>
                    </tr>
                </tbody>
            </table>
            <h3>Status: Shipped</h3>
            <div>
                <p>Sub total: <span>$49.97</span></p>
                <p>Shipping: <span>$1.00</span></p>
                <p>Total Price: <span>$50.97</span></p>
            </div>
        </section>
    </div>
    
</body>
</html>