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

    <div class="update socials">

    <button class="ajax facebook">Facebook</button>
    <button class="ajax twitter">Twitter</button>
    <button class="ajax google">Google</button>

    </div>



<script>
    $(".update .facebook").click(function(){

        $.ajax({
            url : "update.php?action=top_social_facebook",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })
    $(document).on("click","#social #Update_social_facebook",function(){

        var social_id = $(this).attr("index");
        var social_type =$("#social").attr("type");
        var social_div = $("ul#"+social_id);


        var update_social_details = {
            index       : social_id,
            social_image : $("#social_image", social_div).val(),
            social_link : $("#social_link", social_div).val(),
            social_categories  : $("#social_categories", social_div).val()
        }
        $.ajax({

            url: "update.php?action="+social_type,
            method : "POST",
            data : update_social_details,
            success : function(response){

                console.log("response",response)

                if (/success/.test(response)){
                    alert("Updated");
                    window.location.href = "index.php";
                }else{
                    alert("Failed : "+response )
                    console.log(response)
                }
            }
        })
    })

    //----------------------------------------------------------

    $(".update .twitter").click(function(){


        $.ajax({
            url : "update.php?action=top_social_twitter",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })

    $(document).on("click","#social #Update_social_twitter",function(){

        var social_id = $(this).attr("index");
        var social_type =$("#social").attr("type");
        var social_div = $("ul#"+social_id);


        var update_social_details = {
            index       : social_id,
        social_image : $("#social_image", social_div).val(),
        social_link : $("#social_link", social_div).val(),
         social_categories  : $("#social_categories", social_div).val()
    }
        $.ajax({

            url: "update.php?action="+social_type,
            method : "POST",
            data : update_social_details,
            success : function(response){

                console.log("response",response)

                if (/success/.test(response)){
                    alert("Updated");
                    window.location.href = "index.php";
                }else{
                    alert("Failed : "+response )
                    console.log(response)
                }
    }
    })
})

    //----------------------------------------------------------
    $(".update .google").click(function(){

        $.ajax({
            url : "update.php?action=top_social_google",
            method : "GET",
            success : function(response){

                $("#dd_show").html(response).css({
                    width : 980,
                    margin: 'auto'
                })
            }
        })
    })
    $(document).on("click","#social #Update_social_google",function(){

        var social_id = $(this).attr("index");
        var social_type =$("#social").attr("type");
        var social_div = $("ul#"+social_id);


        var update_social_details = {
            index       : social_id,
            social_image : $("#social_image", social_div).val(),
            social_link : $("#social_link", social_div).val(),
            social_categories  : $("#social_categories", social_div).val()
        }
        $.ajax({

            url: "update.php?action="+social_type,
            method : "POST",
            data : update_social_details,
            success : function(response){

                console.log("response",response)

                if (/success/.test(response)){
                    alert("Updated");
                    window.location.href = "index.php";
                }else{
                    alert("Failed : "+response )
                    console.log(response)
                }
            }
        })
    })

</script>