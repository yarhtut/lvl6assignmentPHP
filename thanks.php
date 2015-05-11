<?php
require_once("database.php");
//insert post

if (isset($_POST) && isset($_POST['myname']) && isset($_POST['myemail']) && isset($_POST['mytelephone']) && isset($_POST['mytextarea'])){
    $myname = "Name: " . $_POST['myname'] ."<br/>";
    $myemail= $_POST['myemail'];
    $mytelephone = $_POST['mytelephone'];
    $mytextarea = $_POST['mytextarea'];


    $SQL = "INSERT INTO `contact_form` (`name`, `email`, `telephone`, `textarea`) VALUES ('$myname', '$myemail', '$mytelephone', '$mytextarea')";
    $FORM_MESSAGE = $db->query($SQL);

    if ($FORM_MESSAGE){
        $email_address_to = "yarhtut@live.com";
        $message= "$myname,$myemail,$mytelephone,$mytextarea";
        $headers = "" .
            "From: yarhtut@live.com\r\n".
            "Reply-To:yarhtut@live.com\r\n".
            'MIME-Version: 1.0' . "\r\n".
            'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        if (mail($email_address_to,"Order Confirmation",$message,$headers)){

            echo "success";
            header("Location: thanks.php");

        }else{
//email failed
            echo "failed";
        }

    }else{
        echo "Failed to submit";
        exit;
    }
}
?>









<!DOCTYPE html>


<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Capital Organic </title>
<link rel="shortcut icon" href="images/icon/favicon.ico" />
<link rel="stylesheet" href="stylesheet/thanksmain.css"/>



</head>

<body>
        <!-- include topheader.php start !-->
        <?php require_once("div/col0.php");?>
        <!-- include topheader.php end !-->




<!----------------------------------------------------------------------col2--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col2--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col2--------------------------------------------------------------------------------->
    <!-- include col2.php start !-->
    <?php require_once("div/col2.php");?>
    <!-- include col2.php end !-->

    <!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
    <?php
    $SQL = "SELECT * FROM `col3_features` WHERE `page_categories` = 'thanks'";
    $features_data = $db->query($SQL);
    while($result_features_data = $features_data->fetch_assoc()){
        $features_top_h4     = $result_features_data['features_top_h4'];
        $features_top_p      = $result_features_data ['features_top_p'];
        $features_img        = $result_features_data ['features_img'];
        $features_bot_h3     = $result_features_data ['features_bot_h3'];
        $features_bot_h4     = $result_features_data['features_bot_h4'];
        $page_categories    = $result_features_data['page_categories'];

        ?>
        <div class="wrapper col3">
            <div class="top features">
                <div id="features_text">
                    <h4><?php echo $features_top_h4; ?> </h4>
                    <p><?php echo $features_top_p; ?></p>
                </div>
                <div id="features_img">

                    <img src="<?php echo $features_img; ?>"/>

                </div>

            </div>
            <div id="features_bottom">
                <div id="features_bot">
                    <h3><?php echo $features_bot_h3; ?></h3>
                    <h4><?php echo $features_bot_h4; ?></h4>
                </div>
            </div>
        </div>

    <?php
    }
    ?>
        <!----------------------------------------------------------------------col4--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col4--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col4--------------------------------------------------------------------------------->

	        <div class="wrapper col4">	
			
						<div id="thanks">
							<h1>THANKS YOU </h1>
							<h2>WE WILL BE WITH YOU AS SOON AS POSSIBLE</h2>
							<p>
							</p>
							
							

						</div>
					
					
					
					
					
              
            </div>
	    <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
    <?php require_once("div/footer.php");?>
			 
</body>
</html>
