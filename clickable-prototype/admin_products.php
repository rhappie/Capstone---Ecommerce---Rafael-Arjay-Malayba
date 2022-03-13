<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Products | Dojo Factory</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/admin_products.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function(){
            function previewImages() {
                var id=0;
                var $preview = $('#preview').empty();
                if (this.files){
                    $.each(this.files, readAndPreview);
                }
                function readAndPreview(i, file) {
                    var reader = new FileReader();
                    $(reader).on("load", function(){
                        $preview.append("<li class='ui-state-default' id='"+id+"'></li>");
                        $("#"+i).html($("<img/>", {src:this.result, height:30}));
                        $("#"+i).append(file.name, "<label><input type='checkbox'>main</label><img class='remove_img' src='img/delete_logo.png' alt='delete'>");
                        id++;
                    });
                    reader.readAsDataURL(file);
                }
            }
            function previewImagesEdit() {
                var id=0;
                var $preview = $('#preview_edit').empty();
                if (this.files){
                    $.each(this.files, readAndPreview);
                }
                function readAndPreview(i, file) {
                    var reader = new FileReader();
                    $(reader).on("load", function(){
                        $preview.append("<li class='ui-state-default' id='"+id+"'></li>");
                        $("#"+i).html($("<img/>", {src:this.result, height:30}));
                        $("#"+i).append(file.name, "<label><input type='checkbox'>main</label><img class='remove_img' src='img/delete_logo.png' alt='delete'>");
                        id++;
                    });
                    reader.readAsDataURL(file);
                }
            }
            $('#file-input').on("change", previewImages);
            $('#file-input_edit').on("change", previewImagesEdit);
            $("#preview, #preview_edit").sortable({
            connectWith: ".connectedSortable"
            }).disableSelection();
            $('select>option').hover(
                function() {
                    $(this).siblings().show();
                }, 
                function() {
                    $(this).siblings().hide();
                }
            );
        });
    </script>
    
</head>
<body>
<?php include_once('partials/header_admin.php'); ?>
    <div class="content">
        <form action="" method="POST">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text">
        </form>
        <a href="#add_product" rel="modal:open">Add new product</a>
        <table>
            <thead>
                <th>Picture</th>
                <th>ID</th>
                <th>Name</th>
                <th>Inventory Count</th>
                <th>Quantity sold</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td><img src="img/tshirt.jpg" alt="tshirt"></td>
                    <td>1</td>
                    <td>T-shirt</td>
                    <td>123</td>
                    <td>1000</td>
                    <td><a href="#edit_product_1" rel="modal:open">edit</a> <a href="#delete_product_1" rel="modal:open">delete</a></td>
                </tr>
                <tr>
                    <td><img src="img/hat.jpg" alt="tshirt"></td>
                    <td>2</td>
                    <td>Hats</td>
                    <td>3</td>
                    <td>3</td>
                    <td><a href="#edit_product_1" rel="modal:open">edit</a> <a href="#delete_product_1" rel="modal:open">delete</a></td>
                </tr>
                <tr>
                    <td><img src="img/mug.jpg" alt="tshirt"></td>
                    <td>3</td>
                    <td>Mugs</td>
                    <td>12</td>
                    <td>2342</td>
                    <td><a href="#edit_product_1" rel="modal:open">edit</a> <a href="#delete_product_1" rel="modal:open">delete</a></td>
                </tr>
                <tr>
                    <td><img src="img/pants.jpg" alt="tshirt"></td>
                    <td>4</td>
                    <td>T-shirt</td>
                    <td>1</td>
                    <td>234</td>
                    <td><a href="#edit_product_1" rel="modal:open">edit</a> <a href="#delete_product_1" rel="modal:open">delete</a></td>
                </tr>
                <tr>
                    <td><img src="img/blackbelt.jpg" alt="blackbelt"></td>
                    <td>5</td>
                    <td>Belts</td>
                    <td>5</td>
                    <td>3</td>
                    <td><a href="#edit_product_1" rel="modal:open">edit</a> <a href="#delete_product_1" rel="modal:open">delete</a></td>
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

    <div id="add_product" class="modal">
        <h3>Add new product</h3>
        <form action="preview_page.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><textarea name="details" id="" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Categories:</td>
                    <td>
                        <select name="" id="">
                            <option value="shirt">Shirt<i class="fa-solid fa-pencil"></i></option>
                            <option value="hat">Hat<i class="fa-solid fa-pencil"></i></option>
                            <option value="pants">Pants<i class="fa-solid fa-pencil"></i></option>
                            <option value="keychain">Key Chain<i class="fa-solid fa-pencil"></i></option>
                            <option value="Belt">Belt<i class="fa-solid fa-pencil"></i></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>or add new category:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Images:</td>
                    <td><input type="file" id="file-input" name="file-input[]" accept="image/png, image/gif, image/jpeg" multiple/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><ul id="preview" class="connectedSortable"></ul></td>
                </tr>
            </table>
            <input type="submit" id="add_button" name="add_button" value="Add" />
            <input type="submit" id="preview_button" name="preview_button" value="Preview" formtarget="_blank"/>
            <a id="cancel_button" href="" rel="modal:close">Cancel</a>
        </form>
    </div>
    <div id="edit_product_1" class="modal">
    <h3>Edit Product - ID 1</h3>
        <form action="preview_page.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><textarea name="details" id="" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Categories:</td>
                    <td>
                        <select name="" id="">
                            <option value="shirt">Shirt</option>
                            <option value="hat">Hat</option>
                            <option value="pants">Pants</option>
                            <option value="keychain">Key Chain</option>
                            <option value="Belt">Belt</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>or add new category:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Images:</td>
                    <td><input type="file" id="file-input_edit" name="file-input[]" accept="image/png, image/gif, image/jpeg" multiple/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><ul id="preview_edit" class="connectedSortable"></ul></td>
                </tr>
            </table>
            <input type="submit" id="update_button" name="update_button" value="Update" />
            <input type="submit" id="preview_button" name="preview_button" value="Preview" formtarget="_blank"/>
            <a id="cancel_button" href="" rel="modal:close">Cancel</a>
        </form>
    </div>
    <div id="delete_product_1" class="modal">
        <h4>Are you sure to delete the product - ID 2?</h4>
        <a href="" rel="modal:close">Yes, delete the product.</a>
        <a id="cancel_button" href="" rel="modal:close">Cancel</a>
    </div>
</body>
</html>