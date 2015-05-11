<?php
    require_once("database.php");
    session_start();
?>

<!DOCTYPE html>
<html>
<script>
    var buy_product = new Array();
</script>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Capital Organic </title>
<link rel="shortcut icon" href="images/icon/favicon.ico" />
<link rel="stylesheet" href="stylesheet/productmain.css"/>
<script src="script/product.js" language="JavaScript" ></script>
<script src="libs/jquery.min.js"></script>
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

            <div id="col4_nav">
                <div id="choose_filter">

                    <label for="filter"><h2>Select the order</h2></label>
                    <div id="fil_select">
                        <select name="filter" id="filter" onchange="showandhide();">

                            <option id="all" value="all">All Products</option>
                            <option id="vegetables" value="vegetables">Vegetables</option>
                            <option id="fruits" value="fruits">Fruits</option>
                            <option id="drinks" value="drinks">Drinks</option>
                            <option id="bakery" value="bakery">Bakery</option>
                            <option id="meat" value="meat">Meat</option>
                            <option id="enq" value="enq">Product Form</option>
                        </select>
                    </div>
                </div>
            </div>
					<div id="col4_products">
					

					
					<div id="col4_proselection">
					
					</div>
					<div id="col4_pro">


                    <?php
                    $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'Vegetables'";
                        $vegetables = $db->query($SQL);

                        while($our_vegetables = $vegetables->fetch_assoc()){

                            $product_h2 = $our_vegetables['product_h2'];
                            $product_img = $our_vegetables['product_img'];
                            $product_p = $our_vegetables['product_p'];
                            ?>


                        <section class="one info condense">
                                <h2 class="header one"><?php echo $product_h2; ?> </h2>
                                <img src="<?php echo $product_img; ?>" width="175" height="178" alt="">
                                <p><?php echo $product_p; ?></p>

                            <a title="" type="Vegetables" product="<?php echo $product_h2; ?>" class="more buy_product">Buy</a>
                        </section>

                        <?php
                        }


                    ?>





					</div>	

						<div id="col4_pro1">


                            <?php
                            $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'Fruits'";
                            $fruits = $db->query($SQL);

                            while($our_fruits =  $fruits->fetch_assoc()){
                                $product_h2 = $our_fruits['product_h2'];
                                $product_img = $our_fruits['product_img'];
                                $product_p = $our_fruits['product_p'];
                                ?>


                                <section class="two info condense">
                                    <h2 class="header two"><?php echo $product_h2; ?> </h2>
                                    <img src="<?php echo $product_img; ?>" width="175" height="178" alt="">
                                    <p><?php echo $product_p; ?></p>

                                    <a  title="" type="Fruits" product="<?php echo $product_h2; ?>" class="more buy_product">Buy</a>
                                </section>

                            <?php
                            }


                            ?>


					</div>	
					
					
					
							<div id="col4_pro2">

                                <?php
                                $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'Drinks'";
                                $drinks = $db->query($SQL);

                                while($our_drinks =  $drinks->fetch_assoc()){
                                    $product_h2 =$our_drinks['product_h2'];
                                    $product_img = $our_drinks['product_img'];
                                    $product_p = $our_drinks['product_p'];
                                    ?>


                                    <section class="three info condense">
                                        <h2 class="header three"><?php echo $product_h2; ?> </h2>
                                        <img src="<?php echo $product_img; ?>" width="175" height="178" alt="">
                                        <p><?php echo $product_p; ?></p>
                                        <a title="" type="Drinks" product="<?php echo $product_h2; ?>" class="more buy_product">Buy</a>
                                    </section>

                                <?php
                                }
                                ?>
							</div>


							<div id="col4_pro3">

                                <?php
                                $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'Bakerys'";
                                $bakerys = $db->query($SQL);

                                while($our_bakerys =  $bakerys->fetch_assoc()){
                                    $product_h2 =$our_bakerys['product_h2'];
                                    $product_img = $our_bakerys['product_img'];
                                    $product_p = $our_bakerys['product_p'];
                                    ?>


                                    <section class="four info condense">
                                        <h2 class="header four"><?php echo $product_h2; ?> </h2>
                                        <img src="<?php echo $product_img; ?>" width="175" height="178" alt="">
                                        <p><?php echo $product_p; ?></p>
                                        <a  title="" type="Bakerys" product="<?php echo $product_h2; ?>" class="more buy_product">Buy</a>
                                    </section>

                                <?php
                                }
                                ?>
									
							</div>

								<div id="col4_pro4">

                                    <?php
                                    $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'Meats'";
                                    $meats = $db->query($SQL);

                                    while($our_meats =  $meats->fetch_assoc()){
                                        $product_h2 =$our_meats['product_h2'];
                                        $product_img = $our_meats['product_img'];
                                        $product_p = $our_meats['product_p'];
                                        ?>


                                        <section class="five info condense">
                                            <h2 class="header five"><?php echo $product_h2; ?> </h2>
                                            <img src="<?php echo $product_img; ?>" width="175" height="178" alt="">
                                            <p><?php echo $product_p; ?></p>
                                            <a title="" type="Meats" product="<?php echo $product_h2; ?>" class="more buy_product">Buy</a>
                                        </section>


                                    <?php
                                    }
                                    ?>
							</div>	
							
							
							<div id="product_enquiry">
							<form id="myform" name="theform" method="post"     enctype="text/plain">
							<fieldset title="Products Inquiry">
							<span id="formerror" class="error"></span>
								<legend> Products Inquiry</legend>
								<ul>
									<li>
										<label for="nname">Name *</label>
										<input type="text" name="name" id="name" placeholder="Last,First"  />
										<span id="formnerror" class="error"></span>
									</li>
									<li>
										<label for="myeemail">Email *</label>
										<input type="email" name="email" id="email"  autocomplete="off" placeholder="abcd@abcd.com"/>
										<span id="formeerror" class="error"></span>
									</li>
									<li id="tele">
										
										<label for="myphone">Telephone *</label>
										<input type="tel" name="telephone" id="telephone"  placeholder="xx-xxx-xxxx"/>
										<span id="formterror" class="error"></span>
									</li>
									<li>
										<label for="mytextarea">Address *</label>
										<textarea name="address" id="address" placeholder="Please give us your Address"></textarea>
										<br><span id="formtxerror" class="error"></span>
									</li>
                                    <!---
									<li id="racheck">
										<label for="questionitem">Do you want to Order? *</label>
										<table>
												<tr>
													<td><label for="questionitem1">Order</label></td>
													<td><input type="radio" id="questionitem1" onchange="javascript:radio_onchange();"onclick="javascript:showandhide();" name="requesttype" value="question"  /></td>
													<td><label for="questionitem2">Enquiry</label></td>
													<td><input type="radio" id="questionitem2"onchange="javascript:radio_onchange();" onclick="javascript:showandhide();"name="requesttype" value="question"  /></td>
													<td><span id="formrerror" class="error"></span></td>
												</tr>
										</table>						
										
										
									</li>

									<li id="order" >
										<label for="reference">What do you want to order?</label>
										<select name="vegeorder" id="vegeorder"onchange="javascript:option_onchange();">
											<option>Choose...</option>
											<option value="Vegetables">Vegetables</option>
											<option value="Fruits">Fruits</option>
											<option value="Drinks">Drinks</option>
											<option value="Bakerys">Bakery</option>
											<option value="Meats">Meat</option>
										</select>
                                        <span id="product_order" class=""></span>
										<span id="formserror" class="error"></span>
									</li>
									
									<li id="enquiry" >
										<label for="reference">Do you want to become?</label>
										<select name="worker" id="worker" onchange="javascript:option_onchange()">
											<option>Choose...</option>
											<option onchange="javascript:option_onchange()"value="Supplier">Supplier</option>
											<option onchange="javascript:option_onchange()"value="local">Local Reseller</option>
											<option onchange="javascript:option_onchange()"value="staff">Staff</option>
										</select>
										<span id="formserror" class="error"></span>
									</li>
								
								<li id="check">
										<label for="location">Please select one of our Business Head Quarter *</label>
										<table>
										<tr>
											
												<td><label for="loWell">Wellington&nbsp;</label></td>
												<td><input id="location1" onchange="javascript:check_onchange()"type="checkbox" id="location" name="subscribe" value="" /></td>
											
											
												<td><label for="loAuc">&nbsp;&nbsp;&nbsp;Auckland&nbsp;</label></td>
												<td><input id="location2" onchange="javascript:check_onchange()"type="checkbox" id="location" name="subscribe"  value="" /></td>
												
												<td><label for="loCh">&nbsp;&nbsp;&nbsp;Christchurch&nbsp;</label></td>
												<td><input id="location3" onchange="javascript:check_onchange()"type="checkbox" id="location" name="subscribe"  value="" /></td>
												<td><span id="formCerror" class="error">&nbsp;&nbsp;&nbsp;</span></td>
										</tr>
										
										
										
										</table>
										
								</li>
								<!-----------------sub
								<li class="subletter">
												<label for="subletter">Would you like to subscribe our newsletter?</label>
										<table>
												<tr>
														
													<td><label for="subletter1">Yes</label></td>
													<td><input type="radio" id="subletter1" onchange="javascript:subletter_onchange()" name="subletter1" value="subletter1"  /></td>
													<td><label for="subletter2">No</label></td>
													<td><input type="radio" id="subletter2"onchange="javascript:subletter_onchange()"name="subletter2" value="subletter1"  /></td>
													<td><span id="formSuberror" class="error"></span></td>
												</tr>
										</table>	
										
										<table>
												<tr>
													<td><label for="questionitem1">Order</label></td>
													<td><input type="radio" id="questionitem1" onchange="javascript:radio_onchange();"onclick="javascript:showandhide();" name="requesttype" value="question"  /></td>
													<td><label for="questionitem2">Enquiry</label></td>
													<td><input type="radio" id="questionitem2"onchange="javascript:radio_onchange();" onclick="javascript:showandhide();"name="requesttype" value="question"  /></td>
													<td><span id="formrerror" class="error"></span></td>
												</tr>
										</table>						
										
									</li> ----->
                                    <span id="purchase_items" name="purchase_items">

                                    </span>
								<button id="buy_product_items">Send</button>
							</ul>
							</fieldset>
					</form>
					  <script src="script/myprovalid.js"></script>


                   </div>


							
							
				</div>


                  
            </div>

<script>

    $(document).on("click",".buy_product",function(){
        var $section = $(this).parent();

        var product = {
            name : $(this).attr("product"),
            type: $(this).attr("type")
            // img: $("img",$section[0]).attr("src")
        }
        console.log("product",product);
        //push our pushes to buy product array
        buy_product.push(product);
        //console.log("buy_product",buy_product)

        //show correct selected items
       // $("#questionitem1").prop('checked',true);
        //showandhide();

        //scroll down to order form
        $("body").animate({ scrollTop: $(document).height() }, "slow");

        //append items to purchase items div
        var $product_order = $("#purchase_items");
        $product_order.empty();

        $.each(buy_product,function(index,product){

            $("<li>").text("Product Name : "+product.name + " product type: "+ product.type ).appendTo($product_order)

            // $("<li>").src("Product Image:" + product.img).appendTo($product_order)

        })
    })
    //------------------------------------------------buy product-------------------------
   $(document).on("click","#buy_product_items",function(event){


           //var advert_id = $(this).attr("index");
           //var type_form = $("#myform").attr("type");
           //var form_li =   $("ul#"+advert_id);

           // console.log($("#product_h2",product_div).val())
           //console.log("product_div",product_div);

           var form_details = {
              buy_product: JSON.stringify(buy_product),
              name  : $("#name").val(),
              email  : $("#email").val(),
              telephone : $("#telephone").val(),
              address  : $("#address").val()

           }
            //event.preventDefault();
            console.log("form_details",form_details);

           $.ajax({
               url : "thanksOrder.php",
               method : "POST",
               data : form_details,
               success : function(response){


                   if (/Submitted/.test(response)){
                       alert("Submitted");
                       window.location.href = "thanksOrder.php"
                   }else{
                       alert("Failed : "+response )
                       console.log("Failed",response)
                   }

               }

           })

            event.preventDefault();
       })



</script>
        <!----------------------------------------------------------------------col5--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col5--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col5--------------------------------------------------------------------------------->

             
              

	    <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------col6--------------------------------------------------------------------------------->
                <?php require_once("div/footer.php");?>

</body>
</html>
