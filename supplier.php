<!DOCTYPE html>


<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Capital Organic </title>
<link rel="shortcut icon" href="images/icon/favicon.ico" />
<link rel="stylesheet" href="stylesheet/supplier.css"/>



</head>

<body>
<!-- include topheader.php start !-->
<?php require_once("div/col0.php");?>
<!-- include topheader.php end !-->



<!-- include col2.php start !-->
<?php require_once("div/col2.php");?>
<!-- include col2.php end !-->

<!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
<!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
<!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
<?php
                $SQL = "SELECT * FROM `col3_features` WHERE `page_categories` = 'supplier'";
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
			
						<div id="suppliers">
							<h1>Local Suppliers</h1>
							
							<h2>Banana</h2>
							<a href="http://www.dolenz.co.nz/products/bananas/"><img src="images/supplier/banana.jpg"/></a>
							<p>The banana is not a tree; it is actually the world's largest perennial herb. Native to South East Asia, bananas were cultivated by man as early as 200A.D.
							There are about 400 varieties of bananas now grown throughout the world.
							</p>
							
							<h2>Vegetables and Fruits</h2>
							<a href="http://organicboxes.co.nz/"><img src="images/supplier/fruits.jpg"/></a>
							<p>In 2009, John and Richard decided to do something about the poor state of Organic Home Delivery services in Wellington.
							So we created a service that we are proud to own and use.
							</p>
							
							<h2>Organic Meat</h2>	
							<a href="http://www.organiclife.co.nz/"><img src="images/supplier/meat.jpg"/></a>							
							<p>
							Farmers Market - Local Produce Fresh from Farmers<br>
							Fruit, Vegetables, Wine, Meat, Fish, Eggs, Crafts and more...<br>
							Want to find your local farmers market in New Zealand?...then you are at the right place...
							This website has a comprehensive list of farmers markets right across New Zealand. 	
						
							</p>
						</div>
					
					
					
					
					
              
            </div>
	    <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <?php require_once("div/footer.php");?>
			 
</body>
</html>
