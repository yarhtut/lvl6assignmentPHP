<?php require_once("database.php"); ?>


           <div class="wrapper col3">
				<div class="top features">


						<div id="features_text">
                            <?php
                            ini_set('display_errors',1);
                            error_reporting(E_ALL ^ E_NOTICE);

                            $SQL = "SELECT * FROM `top_features_text` ";
                            $top_features_text_results = $db->query($SQL);
                            while($results = $top_features_text_results->fetch_assoc()){
                                $top_features_text_h4 = $results['top_features_text_h4'];
                                $top_features_text_p = $results['top_features_text_p'];

                                ?>

                                <h4><?php echo $top_features_text_h4;?></h4>
                                <p><?php echo $top_features_text_p;?></p>

                            <?php

                            }
                            ?>

						</div>
						<div id="features_img">
                            <?php
                            ini_set('display_errors',1);
                            error_reporting(E_ALL ^ E_NOTICE);

                            $SQL = "SELECT * FROM `top_features_img` ";
                            $top_features_img_results = $db->query($SQL);
                            while($results = $top_features_img_results->fetch_assoc()){
                                $top_features_img = $results['top_features_img'];


                                ?>

                                <img src="<?php echo $top_features_img; ?>"/>

                            <?php

                            }
                            ?>

						</div>
						
				</div>




					<div id="features_bottom">
						<div id="features_bot">
                            <?php
                            ini_set('display_errors',1);
                            error_reporting(E_ALL ^ E_NOTICE);

                            $SQL = "SELECT * FROM `top_features` ";
                            $top_features_results = $db->query($SQL);

                            while($results = $top_features_results->fetch_assoc()){

                            $top_features_h3 = $results['top_features_h3'];
                            $top_features_h4 = $results['top_features_h4'];

                            ?>
                            <h3><?php echo$top_features_h3;?></h3>
                            <h4><?php echo$top_features_h4;?></h4>


                            <?php
                            }


                            ?>


						</div>
					</div>
				</div>