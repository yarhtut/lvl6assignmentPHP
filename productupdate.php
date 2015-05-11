<link rel="stylesheet" href="stylesheet/ajaxupdate.css" />
<script src="libs/jquery.min.js"></script>
<?php

session_start();

if (isset($_SESSION['logged_in']) == false) {
    header('location: admin.php');
    exit;
}

require_once("database.php");

?>

<div class="update products">
    <button id="AddProduct">Add Product</button>
    <button id="Vegetables">Update Vegetables</button>
    <button id="Fruits">Update Fruits</button>
    <button id="Drinks">Update Drinks</button>
    <button id="Bakery">Update Bakery</button>
    <button id="Meats">Update Meats</button>


</div>



<script>
    $("#Vegetables").click(function(){

        $.ajax({
            url : "update.php?action=update_product_vegetables",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })
    $("#Fruits").click(function(){

        $.ajax({
            url : "update.php?action=update_product_fruits",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })
    $("#Drinks").click(function(){
        $.ajax({
            url : "update.php?action=update_product_drinks",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })
    $("#Bakery").click(function(){
        $.ajax({
            url : "update.php?action=update_product_bakery",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })
    $("#Meats").click(function(){
        $.ajax({
            url : "update.php?action=update_product_meats",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })


</script>