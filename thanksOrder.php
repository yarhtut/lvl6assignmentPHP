<?php
require_once("database.php");
//insert post
//print_r($_POST);
/*
 * [buy_product] => Array
        (
            [0] => Array
                (
                    [name] => Chicken
                    [type] => Meats
                )

        )

    [name] => htut,yar
    [email] => t@t.com
    [telephone] => 6442366465
    [address] => Whanga Crescent
 */

if (isset($_POST) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['address']) || isset($_POST['buy_product'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $telephone = $_POST['telephone'];
    $address = $_POST['address'];
    //$purchase_items = $_POST['purchase_items'];+
        $products = "<h3>Product Purchases</h3>";
    if (isset($_POST['buy_product'])){
        //we have products JSON
        $buy_product = json_decode($_POST['buy_product']);
        foreach($buy_product as $theProduct){

            //echo $buy_product[$product]['name'];exit;
            //print_r($product->name);exit;
            $products .= $theProduct->name . " ";
        }
        //print_r($buy_product);exit;

        //loop our buy products
    }else{
        $products = "";
    }
    $eproducts = " ";
    if (isset($_POST['buy_product'])){
        //we have products JSON
        $buy_product = json_decode($_POST['buy_product']);
        foreach($buy_product as $theProduct){

            //echo $buy_product[$product]['name'];exit;
            //print_r($product->name);exit;
            $eproducts .= $theProduct->name . " ";
        }
        //print_r($buy_product);exit;

        //loop our buy products
    }else{
        $eproducts = "";
    }


    $SQL = "INSERT INTO `enquiry_form` (`name`, `email`, `telephone`, `address`,`purchase_items`) VALUES ('$name', '$email', '$telephone', '$address','$eproducts')";

    $FORM_MESSAGE = $db->query($SQL);
    if ($FORM_MESSAGE){
	
        $email_address_to = "yarhtut@live.com";

        $message= "$name,$email,$telephone,$address,$products";
        $headers = "" .
            "From: yarhtut@live.com\r\n".
            "Reply-To:yarhtut@live.com\r\n".
            'MIME-Version: 1.0' . "\r\n".
            'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        if (mail($email_address_to,"Order Confirmation",$message,$headers)){

		
        echo "Submitted";
        //header("Location: thanksOrder.php");
    }else{
        echo "Failed to submit, $SQL";
        exit;
    }
}else{
    echo "failed on post";

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
