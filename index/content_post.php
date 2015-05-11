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


    <button class="ajax insert_content_post">Insert Content Post</button>
    <button class="ajax update_content_post">Update Content Post</button>
    <button class="ajax delete_content_post">Delete Content Post</button>


</div>
<script>
    $(".ajax.insert_content_post").click(function(){

        $.ajax({
            url : "update.php?action=insert_index_col5",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })
    $(".ajax.update_content_post").click(function(){

        $.ajax({
            url : "update.php?action=update_index_col5",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })
    $(".ajax.delete_content_post").click(function(){

        $.ajax({
            url : "update.php?action=delete_index_col5",
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