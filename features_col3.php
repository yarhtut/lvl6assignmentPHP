<link rel="stylesheet" href="stylesheet/ajaxupdate.css" />
<script src="libs/jquery.min.js"></script>
<?php

session_start();

if (isset($_SESSION['logged_in']) == false) {
    header('location: admin.php');
    exit;
}

require_once("database.php");
//require_once("admin.php");
//we will check $_GET request
?>

<div class="update features col3">


    <button class="ajax features_update">Update Features</button>


</div>
<script>
    $(".ajax.features_update").click(function(){

        $.ajax({
            url : "update.php?action=update_features_col3",
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

