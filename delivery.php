<?php require_once("database.php"); ?>
<!DOCTYPE html>


<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Capital Organic </title>
<link rel="shortcut icon" href="images/fav.ico" />
<link rel="stylesheet" href="stylesheet/deliverymain.css"/>



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
        $SQL = "SELECT * FROM `col3_features` WHERE `page_categories` = 'products'";
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
				<?php
				ini_set('display_errors', 1);
				error_reporting(E_ALL ^ E_NOTICE);
					
					
				//preset image
				
				//connect to database

				
				//pull the data from database query//putting data into array
				$SQL = "SELECT * FROM `col4_delivery` ";				
				$delivery_us_results = $db->query($SQL);
				
				////fetching the 
				while($results = $delivery_us_results->fetch_assoc()){
						$top_h1  = $results['top_h1'];
						$top_h2 = $results['top_h2'];
						$img_id = $results['img_id'];
						
						$content_text = $results['content_text'];
						
						//output html
						?>
						<h1><?php echo$top_h1;?></h1>
						
						
						



						<h2><?=$top_h2;?></h2>
						<div id="features_imgs">
						<img src="<?php echo $img_id; ?>" />
						</div>
						
						<?php echo$content_text;?>
						
						
						<?php
						//end output of html
						
				
				}
				?>
			</div>

                <?php require_once("div/footer.php");?>
			 </div>
	    <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
              
			 
</body>
</html>
