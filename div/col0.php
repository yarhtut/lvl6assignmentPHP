<?php
require_once("database.php");
?>

<div class="wrapper col0">
		<div id="header">

			<div id="logo">
                <?php


                $SQL = "SELECT * FROM `top_logo` ";

                $top_imglogo = $db->query($SQL);

                $logo = $top_imglogo->fetch_assoc();

                    if (isset($logo) && $logo['logo_img'] != null){

                    $logo_name = $logo['logo_name'];
                    $logo_img = $logo['logo_img'];
                    $logo_link = $logo['logo_link'];
                    ?>

                             <a href="<?php echo $logo_link;?>"><img src="<?php echo $logo_img;?>" alt=""/></a>
                <?php
                    }
                ?>
            </div>

                    <div id="social">
								<table>
									<tr>
                                        <?php
                                        $SQL = "SELECT * FROM `social` ";
                                        $social_content = $db->query($SQL);
                                        while($social = $social_content->fetch_assoc()){
                                            //print_r($social);
                                            if (isset($social) && $social['social_image'] != null){
                                            $social_index = $social['index'];
                                            $social_image = $social['social_image'];
                                            $social_link = $social['social_link'];
                                            ?>
                                            <td><a href="<?php echo $social_link;?>" target="blank"> <img src="<?php echo $social_image?>" width="40"  height="40" alt=""/></a></td>

                                            
                                            <?php
                                            }
                                        }


                                        ?>

										<!--
                                        <td><a href="https://accounts.google.com" target="blank"> <img src="images/social/g.png" width="40" height="40"	alt=""/></a></td>
										<td><a href="https://twitter.com/" target="blank"> <img src="images/social/t.png" width="40" height="40" alt=""/></a></td>
										!-->

									</tr>
								</table>
								</div>









	
	    </div>
    </div>
         


		
		

        <!----------------------------------------------------------------------col2--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col2--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col2--------------------------------------------------------------------------------->
	           
        <!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col3--------------------------------------------------------------------------------->
	 