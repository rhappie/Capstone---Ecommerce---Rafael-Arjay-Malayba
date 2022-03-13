<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Orders</title>
    <link rel="stylesheet" href="css/admin_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<?php include_once('partials/header_admin.php'); ?>
    <div class="content">
        <form action="" method="POST">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text">
        </form>
        <form action="" method="POST">
            <select name="" id="">
                <option value="all">Show All</option>
                <option value="in_process">Order in process</option>
                <option value="shipped">Shipped</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </form>
        <table>
            <thead>
                <th>Order ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Billing Address</th>
                <th>Total</th>
                <th>Status</th>
            </thead>
            <tbody>
                <tr>
                    <td><a href="admin_order_details.php">100</a></td>
                    <td>Bob</td>
                    <td>9/6/2014</td>
                    <td>123 dojo way Bellevue WA 98005</td>
                    <td>$149.99</td>
                    <td>
                        <select name="" id="">
                            <option value="in_process">Order in process</option>
                            <option value="shipped">Shipped</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><a href="admin_order_details.php">99</a></td>
                    <td>Joe</td>
                    <td>9/6/2014</td>
                    <td>123 dojo way Bellevue WA 98005</td>
                    <td>$29.99</td>
                    <td>
                        <select name="" id="">
                            <option value="in_process">Order in process</option>
                            <option value="shipped">Shipped</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><a href="admin_order_details.php">98</a></td>
                    <td>Joey</td>
                    <td>9/6/2014</td>
                    <td>123 dojo way Bellevue WA 98005</td>
                    <td>$4.99</td>
                    <td>
                        <select name="" id="">
                            <option value="in_process">Order in process</option>
                            <option value="shipped" selected>Shipped</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><a href="admin_order_details.php">97</a></td>
                    <td>Bob</td>
                    <td>9/6/2014</td>
                    <td>123 dojo way Bellevue WA 98005</td>
                    <td>$19.99</td>
                    <td>
                        <select name="" id="">
                            <option value="in_process">Order in process</option>
                            <option value="shipped" selected>Shipped</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><a href="admin_order_details.php">51</a></td>
                    <td>Bob</td>
                    <td>9/6/2014</td>
                    <td>123 dojo way Bellevue WA 98005</td>
                    <td>$99.99</td>
                    <td>
                        <select name="" id="">
                            <option value="in_process">Order in process</option>
                            <option value="shipped">Shipped</option>
                            <option value="cancelled" selected>Cancelled</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <nav>
<?php for($i=1; $i<=10;$i++) { ?>
            <a href=""><?=$i?></a>
<?php } ?>
            <a href="" id="last">-></a>
        </nav>

    </div>
</body>
</html>