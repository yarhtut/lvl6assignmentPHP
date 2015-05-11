<?php
require_once("database.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Capital Organic </title>
<link rel="shortcut icon" href="images/icon/favicon.ico" />
<link rel="stylesheet" href="stylesheet/mainstyle.css"/>
</head>

<body>
        <?php
        //check if the  user login is true
        if (isset($_SESSION['logged_in']) == true) {

           // require_once("admin.php");
        }
        ?>


            <!-- include topheader.php start !-->
            <?php require_once("div/col0.php");?>
            <!-- include topheader.php end !-->



            <!-- include col2.php start !-->
            <?php require_once("div/col2.php");?>
            <!-- include col2.php end !-->
<!------------
			<div id="search_box">
					<input id ="input"type="search" class="search" placeholder="search"/>
					
					<img class="onInput" alt="" src="images/search.png"  alt="Edit" onclick=""/>
				</div>	
			---->
			
	
	

		
		

        <!----------------------------------------------------------------------col2--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col2--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col2--------------------------------------------------------------------------------->

        <!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
	            <div class="wrapper col3">
		                        <div id="slide_images1">
			
									<div id="slideshow-wrap1">											
										<div id="slideshow-inner1">
										<img src="imgs/farm.jpg" name="slideshow" />
											<ul id="slideshow1">
												

													<li id="previous"><a href="#" onclick="return change_image(-1)" class="arrows"><img src="images/social/pre.png"/></a></li>
												<li id="next"><a href="javascript:change_image(1)" onclick="return change_image(+1)"class="arrows"> <img src="images/social/ne.png"/> </a</li>
												<li id="play"><a href="javascript:play()"><img src="images/play.png"/></a></li>
												<li id="stop"><a href="javascript:stop()"><img src="images/stop.png"/></a></li>
												
											</ul>
										</div>
												<div id="main_men">
													<div id="main_menu">
				                                    <nav class="cf">
				                                    <nav class="cf">
				                                    <ul class="mainmenu">
                                                        <?php
                                                        $SQL = "SELECT * FROM `main_menu` ";

                                                        $main_menu_results = $db->query($SQL);


                                                        ////fetching the
                                                        while($results = $main_menu_results->fetch_assoc()){

                                                            $main_menu =        $results['main_menu'];
                                                            $main_menu_link =   $results['main_menu_link'];
                                                           // $sub_menu_name =    $results['sub_menu_name'];
                                                           // $sub_menu_link =    $results['sub_menu_link'];


                                                            ?>
                                                                <li class="current"><a href="<?php echo $main_menu_link; ?>"><?php echo $main_menu;?></a></li>

                                                            <?php
                                                            }


                                                                ?>



                                                        <!--
					                                    <li><a href="products.html">Food </a>
						                                     <ul class="submenu">
                                                                     <li><a href="products.html">Fruits</a></li>
                                                                     <li><a href="products.html">Vegetables</a></li>
                                                                     <li><a href="products.html">Bakery</a></li>
                                                                     <li><a href="products.html">Drinks</a></li>
                                                                     <li><a href="delivery.html">Meat</a></li>
                                                                 </ul>
					                                    </li>



														  <li><a href="delivery.html">Delivery</a></li>
														     <li><a href="about.html">About Us</a> </li>
								                                    <li><a href="contact.html">Contact</a></li>

							                            !-->
				                                    </ul>
				                                    </nav>
				                                    </nav>
			                                    </div>
												</div>
												
											</div>
		
								</div>
	
											<div id="descriptionh2">
                                               Capital Organic
                                                
                                            </div>
											<div id="description">
                                               Kia Ora Koutou Katoa
                                                
                                            </div>

	
	
	</div>
        <!----------------------------------------------------------------------col4--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col4--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col4--------------------------------------------------------------------------------->

	        <div class="wrapper col4">	
                <div id="product-but">
                   <img src="images/food/ddd.png"/>
                </div>
                 <div id="product-butbot">
                 
                </div>
                <div class="products">
                  
                    <div class="products fruits">
                        <?php

                        $SQL = "SELECT * FROM `index_new_items` WHERE `ad_catagories` = 'Fruits'";

                        $ad_products = $db->query($SQL);
                        while($results_ad_products = $ad_products->fetch_assoc()){
                            $ad_top_img = $results_ad_products['ad_top_img'];
                            $ad_bot_img = $results_ad_products['ad_bot_img'];
                            $ad_h4 = $results_ad_products['ad_h4'];
                            $ad_h5 = $results_ad_products['ad_h5'];
                            ?>
                            <a href="#">
                                <img class="top"src="<?php echo $ad_top_img; ?>"  alt=" "/>
                                <img class="bottom"   src="<?php echo $ad_bot_img; ?>"  alt=""/>
                                </br></br></br>
                                <h4><?php echo $ad_h4; ?></h4>
                                <h5><?php echo $ad_h5; ?></h5>
                            </a>

                        <?php
                        }
                        ?>

                    </div>

                     <div class="products foods">
                         <?php

                         $SQL = "SELECT * FROM `index_new_items` WHERE `ad_catagories` = 'Foods'";

                         $ad_products = $db->query($SQL);
                         while($results_ad_products = $ad_products->fetch_assoc()){
                             $ad_top_img = $results_ad_products['ad_top_img'];
                             $ad_bot_img = $results_ad_products['ad_bot_img'];
                             $ad_h4 = $results_ad_products['ad_h4'];
                             $ad_h5 = $results_ad_products['ad_h5'];
                             ?>
                             <a href="#">
                                 <img class="top"src="<?php echo $ad_top_img; ?>"  alt=" "/>
                                 <img class="bottom"   src="<?php echo $ad_bot_img; ?>"  alt=""/>
                                 </br></br></br>
                                 <h4><?php echo $ad_h4; ?></h4>
                                 <h5><?php echo $ad_h5; ?></h5>
                             </a>

                         <?php
                         }
                         ?>
                        </a>
                     </div>
                     <div class="products drinks">
                         <?php

                         $SQL = "SELECT * FROM `index_new_items` WHERE `ad_catagories` = 'Drinks'";

                         $ad_products = $db->query($SQL);
                         while($results_ad_products = $ad_products->fetch_assoc()){
                             $ad_top_img = $results_ad_products['ad_top_img'];
                             $ad_bot_img = $results_ad_products['ad_bot_img'];
                             $ad_h4 = $results_ad_products['ad_h4'];
                             $ad_h5 = $results_ad_products['ad_h5'];
                             ?>
                             <a href="#">
                                 <img class="top"src="<?php echo $ad_top_img; ?>"  alt=" "/>
                                 <img class="bottom"   src="<?php echo $ad_bot_img; ?>"  alt=""/>
                                 </br></br></br>
                                 <h4><?php echo $ad_h4; ?></h4>
                                 <h5><?php echo $ad_h5; ?></h5>
                             </a>

                         <?php
                         }
                         ?>
                     </div>
                
                </div>
                   
                 </div>
	       
        
        <!----------------------------------------------------------------------col5--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col5--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col5--------------------------------------------------------------------------------->
	        <div class="wrapper col5">
	                <div class="section">
                        <?php
                        $SQL = "SELECT * FROM `index_contents_1` WHERE `content_post_catagories` = '1'";
                        $index_content = $db->query($SQL);
                        while($result_index_content = $index_content->fetch_assoc()){
                            $content_img = $result_index_content['content_img'];
                            $content_h2 = $result_index_content ['content_h2'];
                            $content_p = $result_index_content['content_p'];

                            ?>

                        <div class="sec organic">
                            <div id="post1">

                                <img src="<?php echo $content_img; ?>" alt=""/>

                            </div>
                            <div id="post2">
                                <h2><?php echo $content_h2;?></h2>
                                <p></br><?php echo $content_p;?></p>
                                </br></br>
                                <a href="about.html">Read More</a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>


                            <?php
                            $SQL = "SELECT * FROM `index_contents_1` WHERE `content_post_catagories` = '2'";
                            $index_content = $db->query($SQL);
                            while($result_index_content = $index_content->fetch_assoc()){
                            $content_img = $result_index_content['content_img'];
                            $content_h2 = $result_index_content ['content_h2'];
                            $content_p = $result_index_content['content_p'];

                            ?>

                                <div class="sec supplier">
                                    <div id="post1">
                                        <h2><?php echo $content_h2;?></h2>
                                        <p>
                                            <?php echo $content_p;?>
                                            <a href="supplier.html">Read More</a>
                                        </p>
                                    </div>
                                    <div id="post2">
                                        <img src="<?php echo $content_img;?>"/>
                                    </div>
                                </div>

                                <?php
                                }
                                ?>

                            <?php
                            $SQL = "SELECT * FROM `index_contents_1` WHERE `content_post_catagories` = '3'";
                            $index_content = $db->query($SQL);
                            while($result_index_content = $index_content->fetch_assoc()){
                                $content_img = $result_index_content['content_img'];
                                $content_h2 = $result_index_content ['content_h2'];
                                $content_p = $result_index_content['content_p'];

                                ?>

                                <div class="sec organic">
                                    <div id="post1">

                                        <img src="<?php echo $content_img; ?>" alt=""/>

                                    </div>
                                    <div id="post2">
                                        <h2><?php echo $content_h2;?></h2>
                                        <p></br><?php echo $content_p;?></p>
                                        </br></br>
                                        <a href="about.html">Read More</a>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>





                        </div>

                </div>
                <!---------------------------------------section start---------------------------------------------------------------------------->
                
           
              
              
               
	    <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <?php require_once("div/footer.php");?>
			   <script src="script/slideshow.js" type="text/javascript"></script>
</body>
</html>
