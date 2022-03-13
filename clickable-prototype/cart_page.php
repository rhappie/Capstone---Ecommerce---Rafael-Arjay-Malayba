<!-- 
    This is page is displayed when a user clicks a cart link from header
    It displays the products that had been added to cart by the user form for shipping and billing info.
    Owner: Rafael Arjay Malayba
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | Dojo Factory</title>
    <link rel="stylesheet" href="css/cart_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script>
        $(document).ready(function(){
            $('a.update').click(function(){
                $(this).siblings("input.quantity").prop( "disabled", false);
                return false;
            });
            $('input.quantity').focusout(function(){
                $(this).prop( "disabled", true);
            });
            $('img.remove').click(function(){
                $(this).parent().parent().html('');
            });
            $('#same_info').change(function(){
                if($(this).prop('checked')){
                    $('#fname_B').val($('#fname_S').val()).prop('disabled', true);
                    $('#lname_B').val($('#lname_S').val()).prop('disabled', true);
                    $('#address1_B').val($('#address1_S').val()).prop('disabled', true);
                    $('#address2_B').val($('#address2_S').val()).prop('disabled', true);
                    $('#city_B').val($('#city_S').val()).prop('disabled', true);
                    $('#state_B').val($('#state_S').val()).prop('disabled', true);
                    $('#zip_B').val($('#zip_S').val()).prop('disabled', true);
                }
                else{
                    $('#fname_B').val('').prop('disabled', false);
                    $('#lname_B').val('').prop('disabled', false);
                    $('#address1_B').val('').prop('disabled', false);
                    $('#address2_B').val('').prop('disabled', false);
                    $('#city_B').val('').prop('disabled', false);
                    $('#state_B').val('').prop('disabled', false);
                    $('#zip_B').val('').prop('disabled', false);
                }
            });
        });
    </script>
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
                    <td><input type="number" class="quantity" value=1 min=1 disabled> <a class="update" href="" >update</a> <img class="remove" src="img/delete_logo.png" alt="delete_logo"></td>
                    <td>$19.99</td>
                </tr>
                <tr>
                    <td>CodingDojo Cups</td>
                    <td>$9.99</td>
                    <td><input type="number" class="quantity" value=3 min=1 disabled> <a class="update" href="">update</a> <img class="remove" src="img/delete_logo.png" alt="delete_logo"></td>
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
                    <td><input type="text" id='fname_S'></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" id='lname_S'></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" id='address1_S'></td>
                </tr>
                <tr>
                    <td>Address 2:</td>
                    <td><input type="text" id='address2_S'></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" id='city_S'></td>
                </tr>
                <tr>
                    <td>State:</td>
                    <td><input type="text" id='state_S'></td>
                </tr>
                <tr>
                    <td>Zipcode:</td>
                    <td><input type="text" id='zip_S'></td>
                </tr>
            </table>
            
            <h2>Billing Information</h2>
            <input type="checkbox" name="same_info" id="same_info">
            <label for="same_info">Same as Shipping</label>
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" id='fname_B'></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" id='lname_B'></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" id='address1_B'></td>
                </tr>
                <tr>
                    <td>Address 2:</td>
                    <td><input type="text" id='address2_B'></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" id='city_B'></td>
                </tr>
                <tr>
                    <td>State:</td>
                    <td><input type="text" id='state_B'></td>
                </tr>
                <tr>
                    <td>Zipcode:</td>
                    <td><input type="text" id='zip_B'></td>
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
            <a id="pay_button" href="#confirm_checkout" rel="modal:open">Pay</a>
            <div id="confirm_checkout" class="modal">
                <h4>Confirm Checkout</h4>
                <a id="checkout" href="" rel="modal:close">Checkout Items</a>
                <a id="cancel_button" href="" rel="modal:close">Cancel</a>
            </div>
        </form>
    </div>
    
</body>
</html>