<?php
require_once("database.php");
?>
<!DOCTYPE html>


<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Capital Organic </title>
<link rel="shortcut icon" href="images/fav.ico" />
<link rel="stylesheet" href="stylesheet/about.css"/>



</head>

<body>
        <!-- include col3.php start !-->
        <?php require_once("div/col0.php");?>
        <!-- include col3.php end !-->

        <!-- include col3.php start !-->
        <?php require_once("div/col2.php");?>
        <!-- include col3.php end !-->

        <!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
        <?php
        $SQL = "SELECT * FROM `col3_features` WHERE `page_categories` = 'about'";
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
			
			<div id="about">
				<?php
				ini_set('display_errors', 1);
				error_reporting(E_ALL ^ E_NOTICE);
					
					
				//preset image
				
				//connect to database

				
				//pull the data from database query//putting data into array
				$SQL = "SELECT * FROM col4_about ";
				$about_us_results = $db->query($SQL);
				
				////fetching the 
				while($results = $about_us_results->fetch_assoc()){
						$top_header  = $results['top_header'];
						$img_id = $results['img_id'];
						$sub_header = $results['sub_header'];
						$main_content = $results['main_content'];
						
						//output html
						?>
						<h1><?php echo $top_header;?></h1>
						
						
						<div id="features_imgs">
						
						<img src="<?php echo $img_id; ?>" />
						
				
						</div>
						



						<h2><?php echo $sub_header; ?></h2>
						
						<?php echo $main_content;?>
						
						
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
