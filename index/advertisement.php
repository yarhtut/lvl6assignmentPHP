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

<div class="update index_advert">


    <button class="ajax insert_index_advert">Insert Advertisement</button>
    <button class="ajax update_index_advert">Update Advertisement</button>
    <button class="ajax delete_index_advert">Delete Advertisement</button>


</div>
<script>
    $(".ajax.insert_index_advert").click(function(){

        $.ajax({
            url : "update.php?action=insert_index_advert",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })
    $(".ajax.update_index_advert").click(function(){

        $.ajax({
            url : "update.php?action=update_index_advert",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })
    $(".ajax.delete_index_advert").click(function(){

        $.ajax({
            url : "update.php?action=delete_index_advert",
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