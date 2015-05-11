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
<link rel="stylesheet" href="stylesheet/contactmain.css"/>
    <script src="libs/jquery.min.js"></script>

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
        $SQL = "SELECT * FROM `col3_features` WHERE `page_categories` = 'contact'";
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

                        <iframe  src="<?php echo $features_img; ?>"width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br />
                        <small><a href="https://maps.google.co.nz/maps?q=whitireia+new+zealand.&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=-41.124748,174.837396&amp;spn=0.006295,0.006295&amp;t=h&amp;source=embed" style="color:#0000FF;text-align:left"></a></small>
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
			<h2> </h2>

					<div id="email_enquiry">


					<form id="myform" name="theform" method="post" action="thanks.php" onsubmit="return ValidateMyForm();"  >
							<fieldset title="Contact Info">
							
							<!---  !-->

								<legend>Email Inquiry</legend>
								<ul>
									<li>
										<label for="mynname">Name *</label>
										<input type="text" name="myname" id="myname" value="" placeholder="Last,First"  />
										<span id="formnerror" class="error"></span>

									</li>
									<li>
										<label for="myeemail">Email *</label>
										<input type="email" name="myemail" id="myemail" value="" autocomplete="off" placeholder="abcd@abcd.com"/>
										<span id="formeerror" class="error"></span>
									</li>
									<li id="tele">
										
										<label for="myphone">Telephone</label>
										<input type="tel" name="mytelephone" id="mytelephone" value=""  placeholder="xx-xxx-xxxx"/>
										<span id="formterror" class="error"></span>
									</li>
									
									<li>
										<label for="mytextarea1">Tell Us *</label>
										<textarea name="mytextarea" id="mytextarea" value="" placeholder="Tell us Something"></textarea>
										
									</li>

								</ul>
								<button type="submit" name="submit">Send</button>
								
							</fieldset>
					</form>
                        
                        <script>

                            </script>                        <script src="script/myvalid.js"></script>
                   </div>
            </div>
	       
        
        <!----------------------------------------------------------------------col5--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col5--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col5--------------------------------------------------------------------------------->
	      <!--  <div class="wrapper col5">
	               
                </div>-->
                <!---------------------------------------section start---------------------------------------------------------------------------->
                
           
              
              
               
	    <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
    <?php require_once("div/footer.php");?>


</body>
</html>
