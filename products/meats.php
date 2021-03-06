<link rel="stylesheet" href="stylesheet/ajaxupdate.css" />
<script src="libs/jquery.min.js"></script>
<?php

session_start();

if (isset($_SESSION['logged_in']) == false) {
    header('location: admin.php');
    exit;
}

require_once("../database.php");
//require_once("admin.php");
//we will check $_GET request
?>

<div class="update product vegetables">

    <button class="ajax add">Add Products</button>
    <button class="ajax update">Update Meats</button>
    <button class="ajax delete">Delete Meats</button>

</div>
<script>
    $(".ajax.add").click(function(){
        $.ajax({
            url : "update.php?action=add_products",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })
    $(".ajax.update").click(function(){

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
    $(".ajax.delete").click(function(){
        $.ajax({
            url : "update.php?action=delete_product_meats",
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