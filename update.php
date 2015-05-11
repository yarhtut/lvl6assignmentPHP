
<?php

session_start();

if (isset($_SESSION['logged_in']) == false) {
    header('location: admin.php');
    exit;
}

require_once("database.php");
//require_once("admin.php");
//we will check $_GET request

if (isset($_GET) && isset($_GET['action']) && !empty($_GET['action'])){

    //proceed to update
    switch($_GET['action']){
        case "top_logo" :
            top_logo_get();
            break;
        case"delete_top_logo";
            delete_top_logo();
            break;
        case "top_social_facebook" :
            top_social__facebook_get();
            break;
        case"delete_top_social_facebook";
            delete_top_social_facebook();
            break;
        case "top_social_twitter" :
            top_social__twitter_get();
            break;
        case"delete_top_social_twitter";
            delete_top_social_twitter();
            break;
        case "top_social_google" :
            top_social__google_get();
            break;
        case"delete_top_social_google";
            delete_top_social_google();
            break;

        case"update_product_vegetables";
            update_product_vegetables();
            break;
        case"delete_product_vegetables":
            delete_product_vegetables();
            break;
        case"update_product_fruits";
            update_product_fruits();
            break;
        case"delete_product_fruits":
            delete_product_fruits();
            break;
        case"update_product_drinks";
            update_product_drinks();
            break;
        case"delete_product_drinks":
            delete_product_drinks();
            break;
        case"update_product_bakerys";
            update_product_bakerys();
            break;
        case"delete_product_bakerys":
            delete_product_bakerys();
            break;
        case"update_product_meats";
            update_product_meats();
            break;
        case"delete_product_meats":
            delete_product_meats();
            break;

        case"insert_index_advert":
            insert_index_advert();
            break;
        case"update_index_advert":
            update_index_advert();
            break;
        case"delete_index_advert":
            delete_index_advert();
            break;
        case"insert_index_col5":
            insert_index_col5();
            break;
        case"update_index_col5":
            update_index_col5();
            break;
        case"delete_index_col5":
            delete_index_col5();
            break;


        case"update_features_col3":
            update_features_col3();
            break;


        case"upload_images":
            upload_images();
            break;

        case"add_products":
            add_products();
            break;

        default:
            echo $_GET['action']." is not valid";
            break;
    }
}else{
   echo  "invalid action";
}


function top_logo_get(){
    //declare global variable
    global $db;

    if (isset($_POST) && isset($_POST['logo_image']) && isset($_POST['logo_link']) ){
        // we have some updates to database
        $logo_img   =       $_POST['logo_image'];
        $logo_link  =       $_POST['logo_link'];
        $SQL_UPDATE = "UPDATE `top_logo` SET `logo_img` = '$logo_img', `logo_link` = '$logo_link' WHERE `logo_name` = 'top_logo';";
        $logo_update = $db->query($SQL_UPDATE);
        if ($logo_update){
            header('location: index.php');
        }else{
            echo "Update Failed";
        }
    }

    $SQL = "SELECT * FROM `top_logo` ";
    $logo_results = $db->query($SQL);

    $logo_details = $logo_results->fetch_assoc();

    $logo_img =     $logo_details['logo_img'];
    $logo_link =    $logo_details['logo_link'];
    ?>
    <body id="aa">
    <form id="top_logo_update"action="#" method="POST">
         <input id="topinput" type="text" name="logo_image"placeholder="Logo Image" value="<?php echo $logo_img;?>"><br/>
         <input type="text" name="logo_link" placeholder="Logo Link" value="<?php echo $logo_link;?>"><br/>
        <input id="update_button"type="submit" type="submit" name="Submit" value="Update">
    </form>
    </body>
    <?php
}
//delete the top logo
function delete_top_logo(){
    global $db;
        // we have some updates to database
        $logo_img   =       $_POST['logo_image'];
        $logo_link  =       $_POST['logo_link'];
        //$SQL_DELETE = "DELETE `top_logo`  `logo_img` = '$logo_img', `logo_link` = '$logo_link' WHERE `logo_name` = 'top_logo';";
        $SQL_DELETE = "UPDATE `top_logo` SET `logo_img` = NULL  , `logo_link` = NULL WHERE `logo_name` = 'top_logo';";
        $logo_delete = $db->query($SQL_DELETE);
        if ($logo_delete){
            header('location: index.php');
        }else{

            echo "DELETE Failed <br/> $SQL_DELETE";
        }
}

//------------------------------------------------------------------top Social update-------------------------------------
function top_social__facebook_get(){
    //declare global variable
global $db;

if (isset($_POST) && isset($_POST['social_image'])&& isset($_POST['social_link']) && isset($_POST['index'])&& isset($_POST['social_categories']) ){
    // we have some updates to database
    $index = $_POST['index'];
    $social_image  =       $_POST['social_image'];
    $social_link  =       $_POST['social_link'];
    $social_categories = $_POST['social_categories'];
    $SQL_UPDATE = "UPDATE `social` SET `social_image` = '$social_image', `social_link` = '$social_link',`social_categories` = '$social_categories' WHERE `index` = '$index';";

    // print_r($SQL_UPDATE);
    //  exit();
    $social_update = $db->query($SQL_UPDATE);
    if ($social_update){
        echo"success";
        //header('location: index.php');
        exit;
    }else{
        echo "Update Failed $SQL_UPDATE";
        exit;
    }
}

$SQL = "SELECT * FROM `social`WHERE `social_categories` = 'facebook'";
$social_results = $db->query($SQL);
?>
<div id="social" type="top_social_facebook">
<?php
while($social_details = $social_results->fetch_assoc()){
$social_index = $social_details['index'];
$social_image =    $social_details['social_image'];
$social_link =    $social_details['social_link'];
    $social_categories = $social_details['social_categories'];
?>

<ul id="<?php echo $social_index;?>">
    <li><input type="text" id="social_image" placeholder="Social Image" value="<?php echo $social_image;?>"></li><br/>
    <li><input  type="text" id="social_link"  placeholder="Social Link"value="<?php echo $social_link;?>"></li><br/>
    <li><input  type="text" id="social_categories"  placeholder="Social categories"value="<?php echo $social_categories;?>"></li><br/>
    <li><button id="Update_social_facebook" index="<?php echo $social_index;?>">Update Product</button></li>
</ul>


<?php


echo "</div>";
}
}
//--------------------------------------------------------------------delete the top social facebook icon and link
function delete_top_social_facebook(){
    global $db;
    // we have some updates to database
    $social_image   =       $_POST['social_image'];
    $social_link  =       $_POST['social_link'];
    //$SQL_DELETE = "DELETE `top_logo`  `logo_img` = '$logo_img', `logo_link` = '$logo_link' WHERE `logo_name` = 'top_logo';";
    $SQL_DELETE = "UPDATE `social` SET `social_image` = NULL  , `social_link` = NULL WHERE `index` = '1';";
    $social_delete = $db->query($SQL_DELETE);
    if ($social_delete){
        header('location: index.php');
    }else{

        echo "DELETE Failed <br/> $SQL_DELETE";
    }
}
//---------------------------------------------------------------------update the top social twitter
function top_social__twitter_get(){
    //declare global variable
    global $db;

if (isset($_POST) && isset($_POST['social_image'])&& isset($_POST['social_link']) && isset($_POST['index'])&& isset($_POST['social_categories']) ){
    // we have some updates to database
    $index = $_POST['index'];
    $social_image  =       $_POST['social_image'];
    $social_link  =       $_POST['social_link'];
    $social_categories = $_POST['social_categories'];
    $SQL_UPDATE = "UPDATE `social` SET `social_image` = '$social_image', `social_link` = '$social_link',`social_categories` = '$social_categories' WHERE `index` = '$index';";

    // print_r($SQL_UPDATE);
    //  exit();
    $social_update = $db->query($SQL_UPDATE);
    if ($social_update){
        echo"success";
        //header('location: index.php');
        exit;
    }else{
        echo "Update Failed $SQL_UPDATE";
        exit;
    }
}

$SQL = "SELECT * FROM `social`WHERE `social_categories` = 'twitter'";
$social_results = $db->query($SQL);
?>
<div id="social" type="top_social_twitter">
<?php
while($social_details = $social_results->fetch_assoc()){
    $social_index = $social_details['index'];
    $social_image =    $social_details['social_image'];
    $social_link =    $social_details['social_link'];
    $social_categories = $social_details['social_categories'];
    ?>

    <ul id="<?php echo $social_index;?>">
        <li><input type="text" id="social_image" placeholder="Social Image" value="<?php echo $social_image;?>"></li><br/>
        <li><input  type="text" id="social_link"  placeholder="Social Link"value="<?php echo $social_link;?>"></li><br/>
        <li><input  type="text" id="social_categories"  placeholder="Social categories"value="<?php echo $social_categories;?>"></li><br/>
        <li><button id="Update_social_twitter" index="<?php echo $social_index;?>">Update Product</button></li>
    </ul>


    <?php


    echo "</div>";
}
}
//----------------------------------------------------------delete the top social twitter icon and link
function delete_top_social_twitter(){
    global $db;
    // we have some updates to database
    $social_image   =       $_POST['social_image'];
    $social_link  =       $_POST['social_link'];
    //$SQL_DELETE = "DELETE `top_logo`  `logo_img` = '$logo_img', `logo_link` = '$logo_link' WHERE `logo_name` = 'top_logo';";
    $SQL_DELETE = "UPDATE `social` SET `social_image` = NULL  , `social_link` = NULL WHERE `index` = '2';";
    $social_delete = $db->query($SQL_DELETE);
    if ($social_delete){
        header('location: index.php');
    }else{

        echo "DELETE Failed <br/> $SQL_DELETE";
    }
}
////---------------------------------------------------------update the top social google +
function top_social__google_get(){
    //declare global variable
    global $db;

if (isset($_POST) && isset($_POST['social_image'])&& isset($_POST['social_link']) && isset($_POST['index'])&& isset($_POST['social_categories']) ){
    // we have some updates to database
    $index = $_POST['index'];
    $social_image  =       $_POST['social_image'];
    $social_link  =       $_POST['social_link'];
    $social_categories = $_POST['social_categories'];
    $SQL_UPDATE = "UPDATE `social` SET `social_image` = '$social_image', `social_link` = '$social_link',`social_categories` = '$social_categories' WHERE `index` = '$index';";

    // print_r($SQL_UPDATE);
    //  exit();
    $social_update = $db->query($SQL_UPDATE);
    if ($social_update){
        echo"success";
        //header('location: index.php');
        exit;
    }else{
        echo "Update Failed $SQL_UPDATE";
        exit;
    }
}

$SQL = "SELECT * FROM `social`WHERE `social_categories` = 'google'";
$social_results = $db->query($SQL);
?>
<div id="social" type="top_social_google">
<?php
while($social_details = $social_results->fetch_assoc()){
    $social_index = $social_details['index'];
    $social_image =    $social_details['social_image'];
    $social_link =    $social_details['social_link'];
    $social_categories = $social_details['social_categories'];
    ?>

    <ul id="<?php echo $social_index;?>">
        <li><input type="text" id="social_image" placeholder="Social Image" value="<?php echo $social_image;?>"></li><br/>
        <li><input  type="text" id="social_link"  placeholder="Social Link"value="<?php echo $social_link;?>"></li><br/>
        <li><input  type="text" id="social_categories"  placeholder="Social categories"value="<?php echo $social_categories;?>"></li><br/>
        <li><button id="Update_social_google" index="<?php echo $social_index;?>">Update Product</button></li>
    </ul>


    <?php


    echo "</div>";
}
}
    //----------------------------------------------------------------------delete the top social twitter icon and link
function delete_top_social_google(){
    global $db;
    // we have some updates to database
    $social_image   =       $_POST['social_image'];
    $social_link  =       $_POST['social_link'];
    //$SQL_DELETE = "DELETE `top_logo`  `logo_img` = '$logo_img', `logo_link` = '$logo_link' WHERE `logo_name` = 'top_logo';";
    $SQL_DELETE = "UPDATE `social` SET `social_image` = NULL  , `social_link` = NULL WHERE `index` = '3';";
    $social_delete = $db->query($SQL_DELETE);
    if ($social_delete){
        header('location: index.php');
    }else{

        echo "DELETE Failed <br/> $SQL_DELETE";
    }
}

//---------------------------------------------------------------------------------update_product_vegetables
function update_product_vegetables(){
    //declare global variable
    global $db;

    //print_r($_POST);
    if (isset($_POST) && isset($_POST['product_h2'])&& isset($_POST['product_img']) && isset($_POST['product_p'])  && isset($_POST['index']) ){
        // we have some updates to database
        //$social_name  =       $_POST['social_name'];
        //$social_image  =       $_POST['social_image'];
        //$social_link  =       $_POST['social_link'];
        $index = $_POST['index'];
        $product_h2 = $_POST['product_h2'];
        $product_img = $_POST['product_img'];
        $product_p = $_POST['product_p'];
        $SQL_UPDATE = "UPDATE `product` SET `product_h2` = '$product_h2', `product_img` = '$product_img' , `product_p` = '$product_p' WHERE `index` = '$index';";


        $update_product_vegetables = $db->query($SQL_UPDATE);
        if ($update_product_vegetables){
            echo "success";
            //header('location: products.php');
            exit;
        }else{
            echo "Update Failed $SQL_UPDATE";
            exit;
        }
    }

    $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'Vegetables'";
    $vegetables = $db->query($SQL);
    ?>
    <div id="product" type="update_product_vegetables">
        <h2>Update Vegetables</h2>
    <?php
    while($our_vegetables = $vegetables->fetch_assoc()){
        $product_index = $our_vegetables['index'];
        $product_h2 = $our_vegetables['product_h2'];
        $product_img = $our_vegetables['product_img'];
        $product_p = $our_vegetables['product_p'];

        ?>
        <ul id="<?php echo $product_index;?>">
            <li><input type="text" id="product_h2" placeholder="Product Header" value="<?php echo $product_h2;?>"></li>
            <ii> <input  type="text" id="product_img"  placeholde="Product Image"value="<?php echo $product_img;?>"></ii>
            <li><textarea  id="product_p" placeholder="Product Text"><?php echo $product_p;?></textarea></li>
            <li><button id="update_button" index="<?php echo $product_index;?>">Update Product</button></li>
        </ul>


    <?php
    }
    echo "</div>";


}
//--------------------------------------------------------------------------------update_product_fruits
    function update_product_fruits(){
    //declare global variable
    global $db;

    //print_r($_POST);
    if (isset($_POST) && isset($_POST['product_h2'])&& isset($_POST['product_img']) && isset($_POST['product_p'])  && isset($_POST['index']) ){
        // we have some updates to database
        //$social_name  =       $_POST['social_name'];
        $social_image  =       $_POST['social_image'];
        $social_link  =       $_POST['social_link'];
        $index = $_POST['index'];
        $product_h2 = $_POST['product_h2'];
        $product_img = $_POST['product_img'];
        $product_p = $_POST['product_p'];
        $SQL_UPDATE = "UPDATE `product` SET `product_h2` = '$product_h2', `product_img` = '$product_img' , `product_p` = '$product_p' WHERE `index` = '$index';";


        $update_product_fruits = $db->query($SQL_UPDATE);
        if ($update_product_fruits){
            echo "success";
            //header('location: products.php');
            exit;
        }else{
            echo "Update Failed $SQL_UPDATE";
            exit;
        }
    }

    $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'fruits'";
    $fruits = $db->query($SQL);
    ?>
        <div id="product" type="update_product_fruits">
            <h2>Update Fruits</h2>
            <?php
            while($our_fruits = $fruits->fetch_assoc()){
                $product_index = $our_fruits['index'];
                $product_h2 = $our_fruits['product_h2'];
                $product_img = $our_fruits['product_img'];
                $product_p = $our_fruits['product_p'];

                ?>

                <!-- <form id="update_product_vegetables" action="updateproduct.php?action=update_product_vegetables" method="POST"> !-->
                <ul id="<?php echo $product_index;?>">
                    <li><input type="text" id="product_h2" placeholder="Product Header" value="<?php echo $product_h2;?>"></li>
                    <ii> <input  type="text" id="product_img"  placeholde="Product Image"value="<?php echo $product_img;?>"></ii>
                    <li><textarea  id="product_p" placeholder="Product Text"><?php echo $product_p;?></textarea></li>
                    <li><button id="update_button" index="<?php echo $product_index;?>">Update Product</button></li>
                </ul>



                <!--</form> !-->

            <?php
            }
            echo "</div>";


            }
 //--------------------------------------------------------------------------------update_product_drink
            function update_product_drinks(){
            //declare global variable
            global $db;

            //print_r($_POST);
            if (isset($_POST) && isset($_POST['product_h2'])&& isset($_POST['product_img']) && isset($_POST['product_p'])  && isset($_POST['index']) ){
                // we have some updates to database
                //$social_name  =       $_POST['social_name'];
                $social_image  =       $_POST['social_image'];
                $social_link  =       $_POST['social_link'];
                $index = $_POST['index'];
                $product_h2 = $_POST['product_h2'];
                $product_img = $_POST['product_img'];
                $product_p = $_POST['product_p'];
                $SQL_UPDATE = "UPDATE `product` SET `product_h2` = '$product_h2', `product_img` = '$product_img' , `product_p` = '$product_p' WHERE `index` = '$index';";


                $update_product_fruits = $db->query($SQL_UPDATE);
                if ($update_product_fruits){
                    echo "success";
                    //header('location: products.php');
                    exit;
                }else{
                    echo "Update Failed $SQL_UPDATE";
                    exit;
                }
            }

            $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'drinks'";
            $fruits = $db->query($SQL);
            ?>
            <div id="product" type="update_product_drinks">
                <h2>Update Drinks</h2>
                <?php
                while($our_fruits = $fruits->fetch_assoc()){
                    $product_index = $our_fruits['index'];
                    $product_h2 = $our_fruits['product_h2'];
                    $product_img = $our_fruits['product_img'];
                    $product_p = $our_fruits['product_p'];

                    ?>

                    <!-- <form id="update_product_vegetables" action="updateproduct.php?action=update_product_vegetables" method="POST"> !-->
                    <ul id="<?php echo $product_index;?>">
                        <li><input type="text" id="product_h2" placeholder="Product Header" value="<?php echo $product_h2;?>"></li>
                        <ii> <input  type="text" id="product_img"  placeholde="Product Image"value="<?php echo $product_img;?>"></ii>
                        <li><textarea  id="product_p" placeholder="Product Text"><?php echo $product_p;?></textarea></li>
                        <li><button id="update_button" index="<?php echo $product_index;?>">Update Product</button></li>
                    </ul>



                    <!--</form> !-->

                <?php
                }
                echo "</div>";


                }
//--------------------------------------------------------------------------------update_product_bakery
                function update_product_bakerys(){
                //declare global variable
                global $db;

                //print_r($_POST);
                if (isset($_POST) && isset($_POST['product_h2'])&& isset($_POST['product_img']) && isset($_POST['product_p'])  && isset($_POST['index']) ){
                    // we have some updates to database
                    //$social_name  =       $_POST['social_name'];
                    $social_image  =       $_POST['social_image'];
                    $social_link  =       $_POST['social_link'];
                    $index = $_POST['index'];
                    $product_h2 = $_POST['product_h2'];
                    $product_img = $_POST['product_img'];
                    $product_p = $_POST['product_p'];
                    $SQL_UPDATE = "UPDATE `product` SET `product_h2` = '$product_h2', `product_img` = '$product_img' , `product_p` = '$product_p' WHERE `index` = '$index';";


                    $update_product_fruits = $db->query($SQL_UPDATE);
                    if ($update_product_fruits){
                        echo "success";
                        //header('location: products.php');
                        exit;
                    }else{
                        echo "Update Failed $SQL_UPDATE";
                        exit;
                    }
                }

                $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'bakerys'";
                $fruits = $db->query($SQL);
                ?>
                <div id="product" type="update_product_bakerys">
                    <h2>Update Bakery</h2>
                    <?php
                    while($our_fruits = $fruits->fetch_assoc()){
                        $product_index = $our_fruits['index'];
                        $product_h2 = $our_fruits['product_h2'];
                        $product_img = $our_fruits['product_img'];
                        $product_p = $our_fruits['product_p'];

                        ?>

                        <!-- <form id="update_product_vegetables" action="updateproduct.php?action=update_product_vegetables" method="POST"> !-->
                        <ul id="<?php echo $product_index;?>">
                            <li><input type="text" id="product_h2" placeholder="Product Header" value="<?php echo $product_h2;?>"></li>
                            <ii> <input  type="text" id="product_img"  placeholde="Product Image"value="<?php echo $product_img;?>"></ii>
                            <li><textarea  id="product_p" placeholder="Product Text"><?php echo $product_p;?></textarea></li>
                            <li><button id="update_button" index="<?php echo $product_index;?>">Update Product</button></li>
                        </ul>



                        <!--</form> !-->

                    <?php
                    }
                    echo "</div>";


                    }
//--------------------------------------------------------------------------------update_product_bakery
                    function update_product_meats(){
                    //declare global variable
                    global $db;

                    //print_r($_POST);
                    if (isset($_POST) && isset($_POST['product_h2'])&& isset($_POST['product_img']) && isset($_POST['product_p'])  && isset($_POST['index']) ){
                        // we have some updates to database
                        //$social_name  =       $_POST['social_name'];
                        $social_image  =       $_POST['social_image'];
                        $social_link  =       $_POST['social_link'];
                        $index = $_POST['index'];
                        $product_h2 = $_POST['product_h2'];
                        $product_img = $_POST['product_img'];
                        $product_p = $_POST['product_p'];
                        $SQL_UPDATE = "UPDATE `product` SET `product_h2` = '$product_h2', `product_img` = '$product_img' , `product_p` = '$product_p' WHERE `index` = '$index';";


                        $update_product_fruits = $db->query($SQL_UPDATE);
                        if ($update_product_fruits){
                            echo "success";
                            //header('location: products.php');
                            exit;
                        }else{
                            echo "Update Failed $SQL_UPDATE";
                            exit;
                        }
                    }

                    $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'meats'";
                    $fruits = $db->query($SQL);
                    ?>
                    <div id="product" type="update_product_meats">
                        <h2>Update Meats</h2>
                        <?php
                        while($our_fruits = $fruits->fetch_assoc()){
                            $product_index = $our_fruits['index'];
                            $product_h2 = $our_fruits['product_h2'];
                            $product_img = $our_fruits['product_img'];
                            $product_p = $our_fruits['product_p'];

                            ?>

                            <!-- <form id="update_product_vegetables" action="updateproduct.php?action=update_product_vegetables" method="POST"> !-->
                            <ul id="<?php echo $product_index;?>">
                                <li><input type="text" id="product_h2" placeholder="Product Header" value="<?php echo $product_h2;?>"></li>
                                <ii> <input  type="text" id="product_img"  placeholde="Product Image"value="<?php echo $product_img;?>"></ii>
                                <li><textarea  id="product_p" placeholder="Product Text"><?php echo $product_p;?></textarea></li>
                                <li><button id="update_button" index="<?php echo $product_index;?>">Update Product</button></li>
                            </ul>



                            <!--</form> !-->

                        <?php
                        }
                        echo "</div>";


                        }
//-------------------------------------------------------------delete vegetables--------------------------------------
 function delete_product_vegetables(){
            global $db;
            // we have some updates to database
            $index =              $_POST['index'];
            $product_h2   =       $_POST['product_h2'];
            $product_img  =       $_POST['product_img'];
            $product_p  =       $_POST['product_p'];
            //$SQL_DELETE = "DELETE `top_logo`  `logo_img` = '$logo_img', `logo_link` = '$logo_link' WHERE `logo_name` = 'top_logo';";
            $SQL_DELETE = "DELETE FROM `product` WHERE `index` = '$index';";

           // $SQL_UPDATE = "UPDATE `social` SET `social_image` = '$social_image', `social_link` = '$social_link' WHERE `index` = '1';";
           // $SQL_UPDATE = "UPDATE `product` SET `product_h2` = '$product_h2', `product_img` = '$product_img' , `product_p` = '$product_p' WHERE `index` = '$index';";
            $product_vegetables_delete = $db->query($SQL_DELETE);
            if ($product_vegetables_delete){
                echo "success";
                //header('location: index.php');
            }else{

                echo "DELETE Failed <br/> $SQL_DELETE";


      }

            $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'vegetables'";
            $fruits = $db->query($SQL);
            ?>
            <div id="product" type="delete_product_vegetables">
                <h2>Delete Vegetables</h2>
                <?php
                while($our_fruits = $fruits->fetch_assoc()){
                    $product_index = $our_fruits['index'];
                    $product_h2 = $our_fruits['product_h2'];
                    $product_img = $our_fruits['product_img'];
                    $product_p = $our_fruits['product_p'];

                    ?>

                    <!-- <form id="update_product_vegetables" action="updateproduct.php?action=update_product_vegetables" method="POST"> !-->
                    <ul id="<?php echo $product_index;?>">
                        <li><input type="text" id="product_h2" placeholder="Product Header" value="<?php echo $product_h2;?>"></li>
                        <ii> <input  type="text" id="product_img"  placeholde="Product Image"value="<?php echo $product_img;?>"></ii>
                        <li><textarea  id="product_p" placeholder="Product Text"><?php echo $product_p;?></textarea></li>
                        <li><button id="delete_button" index="<?php echo $product_index;?>">Delete</button></li>
                    </ul>



                    <!--</form> !-->

                <?php
                }
                echo "</div>";

                }
//-----------------------------------------------------------------------------delete the Fruits
                function delete_product_fruits(){
                global $db;
                // we have some updates to database
                $index =              $_POST['index'];
                $product_h2   =       $_POST['product_h2'];
                $product_img  =       $_POST['product_img'];
                $product_p  =       $_POST['product_p'];
                //$SQL_DELETE = "DELETE `top_logo`  `logo_img` = '$logo_img', `logo_link` = '$logo_link' WHERE `logo_name` = 'top_logo';";
                $SQL_DELETE = "DELETE FROM `product` WHERE `index` = '$index';";

                // $SQL_UPDATE = "UPDATE `social` SET `social_image` = '$social_image', `social_link` = '$social_link' WHERE `index` = '1';";
                // $SQL_UPDATE = "UPDATE `product` SET `product_h2` = '$product_h2', `product_img` = '$product_img' , `product_p` = '$product_p' WHERE `index` = '$index';";
                $product_vegetables_delete = $db->query($SQL_DELETE);
                if ($product_vegetables_delete){
                    echo "success";
                    //header('location: index.php');
                }else{

                    echo "DELETE Failed <br/> $SQL_DELETE";


                }

                $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'fruits'";
                $fruits = $db->query($SQL);
                ?>
                <div id="product" type="delete_product_fruits">
                    <h2>Delete Fruits</h2>
                    <?php
                    while($our_fruits = $fruits->fetch_assoc()){
                        $product_index = $our_fruits['index'];
                        $product_h2 = $our_fruits['product_h2'];
                        $product_img = $our_fruits['product_img'];
                        $product_p = $our_fruits['product_p'];

                        ?>

                        <!-- <form id="update_product_vegetables" action="updateproduct.php?action=update_product_vegetables" method="POST"> !-->
                        <ul id="<?php echo $product_index;?>">
                            <li><input type="text" id="product_h2" placeholder="Product Header" value="<?php echo $product_h2;?>"></li>
                            <ii> <input  type="text" id="product_img"  placeholde="Product Image"value="<?php echo $product_img;?>"></ii>
                            <li><textarea  id="product_p" placeholder="Product Text"><?php echo $product_p;?></textarea></li>
                            <li><button id="delete_button" index="<?php echo $product_index;?>">Delete</button></li>
                        </ul>



                        <!--</form> !-->

                    <?php
                    }
                    echo "</div>";

                    }
//-----------------------------------------------------------------------------delete the Fruits
                    function delete_product_drinks(){
                    global $db;
                    // we have some updates to database
                    $index =              $_POST['index'];
                    $product_h2   =       $_POST['product_h2'];
                    $product_img  =       $_POST['product_img'];
                    $product_p  =       $_POST['product_p'];
                    //$SQL_DELETE = "DELETE `top_logo`  `logo_img` = '$logo_img', `logo_link` = '$logo_link' WHERE `logo_name` = 'top_logo';";
                    $SQL_DELETE = "DELETE FROM `product` WHERE `index` = '$index';";

                    // $SQL_UPDATE = "UPDATE `social` SET `social_image` = '$social_image', `social_link` = '$social_link' WHERE `index` = '1';";
                    // $SQL_UPDATE = "UPDATE `product` SET `product_h2` = '$product_h2', `product_img` = '$product_img' , `product_p` = '$product_p' WHERE `index` = '$index';";
                    $product_vegetables_delete = $db->query($SQL_DELETE);
                    if ($product_vegetables_delete){
                        echo "success";
                        //header('location: index.php');
                    }else{

                        echo "DELETE Failed <br/> $SQL_DELETE";


                    }

                    $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'drinks'";
                    $fruits = $db->query($SQL);
                    ?>
                    <div id="product" type="delete_product_drinks">
                        <h2>Delete Drinks</h2>
                        <?php
                        while($our_fruits = $fruits->fetch_assoc()){
                            $product_index = $our_fruits['index'];
                            $product_h2 = $our_fruits['product_h2'];
                            $product_img = $our_fruits['product_img'];
                            $product_p = $our_fruits['product_p'];

                            ?>

                            <!-- <form id="update_product_vegetables" action="updateproduct.php?action=update_product_vegetables" method="POST"> !-->
                            <ul id="<?php echo $product_index;?>">
                                <li><input type="text" id="product_h2" placeholder="Product Header" value="<?php echo $product_h2;?>"></li>
                                <ii> <input  type="text" id="product_img"  placeholde="Product Image"value="<?php echo $product_img;?>"></ii>
                                <li><textarea  id="product_p" placeholder="Product Text"><?php echo $product_p;?></textarea></li>
                                <li><button id="delete_button" index="<?php echo $product_index;?>">Delete</button></li>
                            </ul>



                            <!--</form> !-->

                        <?php
                        }
                        echo "</div>";

                        }

 //-----------------------------------------------------------------------------delete the Fruits
                        function delete_product_bakerys(){
                        global $db;
                        // we have some updates to database
                        $index =              $_POST['index'];
                        $product_h2   =       $_POST['product_h2'];
                        $product_img  =       $_POST['product_img'];
                        $product_p  =       $_POST['product_p'];
                        //$SQL_DELETE = "DELETE `top_logo`  `logo_img` = '$logo_img', `logo_link` = '$logo_link' WHERE `logo_name` = 'top_logo';";
                        $SQL_DELETE = "DELETE FROM `product` WHERE `index` = '$index';";

                        // $SQL_UPDATE = "UPDATE `social` SET `social_image` = '$social_image', `social_link` = '$social_link' WHERE `index` = '1';";
                        // $SQL_UPDATE = "UPDATE `product` SET `product_h2` = '$product_h2', `product_img` = '$product_img' , `product_p` = '$product_p' WHERE `index` = '$index';";
                        $product_vegetables_delete = $db->query($SQL_DELETE);
                        if ($product_vegetables_delete){
                            echo "success";
                            //header('location: index.php');
                        }else{

                            echo "DELETE Failed <br/> $SQL_DELETE";


                        }

                        $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'bakerys'";
                        $fruits = $db->query($SQL);
                        ?>
                        <div id="product" type="delete_product_bakerys">
                            <h2>Delete bakery</h2>
                            <?php
                            while($our_fruits = $fruits->fetch_assoc()){
                                $product_index = $our_fruits['index'];
                                $product_h2 = $our_fruits['product_h2'];
                                $product_img = $our_fruits['product_img'];
                                $product_p = $our_fruits['product_p'];

                                ?>

                                <!-- <form id="update_product_vegetables" action="updateproduct.php?action=update_product_vegetables" method="POST"> !-->
                                <ul id="<?php echo $product_index;?>">
                                    <li><input type="text" id="product_h2" placeholder="Product Header" value="<?php echo $product_h2;?>"></li>
                                    <ii> <input  type="text" id="product_img"  placeholde="Product Image"value="<?php echo $product_img;?>"></ii>
                                    <li><textarea  id="product_p" placeholder="Product Text"><?php echo $product_p;?></textarea></li>
                                    <li><button id="delete_button" index="<?php echo $product_index;?>">Delete</button></li>
                                </ul>



                                <!--</form> !-->

                            <?php
                            }
                            echo "</div>";

                            }

 //-----------------------------------------------------------------------------delete the Meats
                            function delete_product_meats(){
                            global $db;
                            // we have some updates to database
                            $index =              $_POST['index'];
                            $product_h2   =       $_POST['product_h2'];
                            $product_img  =       $_POST['product_img'];
                            $product_p  =       $_POST['product_p'];
                            //$SQL_DELETE = "DELETE `top_logo`  `logo_img` = '$logo_img', `logo_link` = '$logo_link' WHERE `logo_name` = 'top_logo';";
                            $SQL_DELETE = "DELETE FROM `product` WHERE `index` = '$index';";

                            // $SQL_UPDATE = "UPDATE `social` SET `social_image` = '$social_image', `social_link` = '$social_link' WHERE `index` = '1';";
                            // $SQL_UPDATE = "UPDATE `product` SET `product_h2` = '$product_h2', `product_img` = '$product_img' , `product_p` = '$product_p' WHERE `index` = '$index';";
                            $product_vegetables_delete = $db->query($SQL_DELETE);
                            if ($product_vegetables_delete){
                                echo "success";
                                //header('location: index.php');
                            }else{

                                echo "DELETE Failed <br/> $SQL_DELETE";


                            }

                            $SQL = "SELECT * FROM `product` WHERE `product_catagories` = 'meats'";
                            $fruits = $db->query($SQL);
                            ?>
                            <div id="product" type="delete_product_meats">
                                <h2>Delete Meats</h2>
                                <?php
                                while($our_fruits = $fruits->fetch_assoc()){
                                    $product_index = $our_fruits['index'];
                                    $product_h2 = $our_fruits['product_h2'];
                                    $product_img = $our_fruits['product_img'];
                                    $product_p = $our_fruits['product_p'];

                                    ?>

                                    <!-- <form id="update_product_vegetables" action="updateproduct.php?action=update_product_vegetables" method="POST"> !-->
                                    <ul id="<?php echo $product_index;?>">
                                        <li><input type="text" id="product_h2" placeholder="Product Header" value="<?php echo $product_h2;?>"></li>
                                        <ii> <input  type="text" id="product_img"  placeholde="Product Image"value="<?php echo $product_img;?>"></ii>
                                        <li><textarea  id="product_p" placeholder="Product Text"><?php echo $product_p;?></textarea></li>
                                        <li><button id="delete_button" index="<?php echo $product_index;?>">Delete</button></li>
                                    </ul>



                                    <!--</form> !-->

                                <?php
                                }
                                echo "</div>";

                                }

//--------------------------------------------------------------------------add_products---------------------------
function   add_products(){
                global $db;

                //add new product
                if (isset($_POST) && isset($_POST['product_h2'])&& isset($_POST['product_img']) && isset($_POST['product_p'])  && isset($_POST['product_catagories']) ){
                    // we have some updates to database
                    //$social_name  =       $_POST['social_name'];
                    $social_image  =       $_POST['social_image'];
                    $social_link  =       $_POST['social_link'];
                    $product_catagories = $_POST['product_catagories'];
                    $product_h2 = $_POST['product_h2'];
                    $product_img = $_POST['product_img'];
                    $product_p = $_POST['product_p'];

                    $SQL_INSERT = "INSERT INTO `21104216`.`product` (`product_h2`, `product_img`, `product_p`, `product_catagories`) VALUES ( '$product_h2', '$product_img', '$product_p', '$product_catagories');";

                    $update_product_fruits = $db->query($SQL_INSERT);
                    if ($update_product_fruits){
                        echo "success";
                        //header('location: products.php');
                        exit;
                    }else{
                        echo "Update Failed $SQL_INSERT";
                        exit;
                    }
                }
                //display add product form

                ?>
                        <div id="product_add_container">


                       <input type="text" id="product_h2" placeholder="Product Header" value="">
                      <input type="text" id="product_img" placeholder="Product Header" value="">
                      <input type="text" id="product_p" placeholder="Product Header" value="">
                      <select  id="product_catagories" placeholder="Product Header" value="">
                          <option value="Vegetables">Vegetables</option>
                          <option value="Fruits">Fruits</option>
                          <option value="Drinks">Drink</option>
                          <option value="Bakerys">Bakery</option>
                          <option value="Meats">Meats</option>
                      </select>
                            </br>
                       <button id="add_product_button">Add New Products</button>
                     </div>
                <?php


                    }


//--------------------------------------------------------------Insert Index advert
 function  insert_index_advert(){
     global $db;

     //add new product
     if (isset($_POST) && isset($_POST['ad_top_img'])&& isset($_POST['ad_bot_img']) && isset($_POST['ad_h4'])  && isset($_POST['ad_h5']) ){
         $ad_top_img = $_POST['ad_top_img'];
         $ad_bot_img = $_POST['ad_bot_img'];
         $ad_h4 = $_POST['ad_h4'];
         $ad_h5 = $_POST['ad_h5'];
         $ad_catagories = $_POST['ad_catagories'];


         $SQL_INSERT = "INSERT INTO `21104216`.`index_new_items` (`ad_top_img`, `ad_bot_img`, `ad_h4`,`ad_h5`, `ad_catagories`) VALUES ( '$ad_top_img', '$ad_bot_img', '$ad_h4','$ad_h5', '$ad_catagories');";

         $Insert_index_advert = $db->query($SQL_INSERT);
         if ($Insert_index_advert){
             echo "success";
             //header('location: products.php');
             exit;
         }else{
             echo "Update Failed $SQL_INSERT";
             exit;
         }
     }
     //display add product form

     ?>
     <div id="index_advert_add_container">


         <input type="text" id="ad_top_img" placeholder="Top Image" value="">
         <input type="text" id="ad_bot_img" placeholder="Bottom Image" value="">
         <input type="text" id="ad_h4" placeholder="ad_h4" value="">
         <input type="text" id="ad_h5" placeholder="ad_h5" value="">
         <select  id="ad_catagories" placeholder="Choose Catagories" value="">
             <option value="fruits">Fruits</option>
             <option value="foods">Foods</option>
             <option value="drinks">Drinks</option>

         </select>
         </br>
         <button id="add_index_advert_button">Add New Advertisement</button>
     </div>
 <?php

 }
//--------------------------------------------------------Update Index Advert-----------------------------------------------------------------------------
 function update_index_advert(){
                                //declare global variable
                  global $db;

                                //print_r($_POST);
                  if(isset($_POST) && isset($_POST['ad_top_img'])&& isset($_POST['ad_bot_img']) && isset($_POST['ad_h4'])  && isset($_POST['ad_h5'])&& isset($_POST['index']) && isset($_POST['ad_catagories']) ){
                                    // we have some updates to database
                                    //$social_name  =       $_POST['social_name'];
                                    //$social_image  =       $_POST['social_image'];
                                    //$social_link  =       $_POST['social_link'];
                  $index = $_POST['index'];
                  $ad_top_img = $_POST['ad_top_img'];
                  $ad_bot_img = $_POST['ad_bot_img'];
                  $ad_h4 = $_POST['ad_h4'];
                  $ad_h5 = $_POST['ad_h5'];
                      $ad_catagories = $_POST ['ad_catagories'];
                  $SQL_UPDATE = "UPDATE `index_new_items` SET `ad_top_img` = '$ad_top_img', `ad_bot_img` = '$ad_bot_img' , `ad_h4` = '$ad_h4', `ad_h5` = '$ad_h5', `ad_catagories` = '$ad_catagories' WHERE `index` = '$index';";


                                    $update_index_advert = $db->query($SQL_UPDATE);
                                    if ($update_index_advert){
                                        echo "success";
                                        //header('location: products.php');
                                        exit;
                                    }else{
                                        echo "Update Failed $SQL_UPDATE";
                                        exit;
                                    }
                                }

                                $SQL = "SELECT * FROM `index_new_items`";
                                $advert = $db->query($SQL);
                                ?>
                                <div id="advert" type="update_index_advert">
                                    <h2>Update Advertisment</h2>
                                    <?php
                                    while($advert_result = $advert->fetch_assoc()){
                                        $index = $advert_result['index'];
                                        $ad_top_img = $advert_result['ad_top_img'];
                                        $ad_bot_img = $advert_result['ad_bot_img'];
                                        $ad_h4 = $advert_result['ad_h4'];
                                        $ad_h5 = $advert_result['ad_h5'];
                                        $ad_catagories = $advert_result['ad_catagories'];

                                        ?>

                                        <ul id="<?php echo $index;?>">
                                            <li><input type="text" id="ad_top_img" placeholder="Top Image" value="<?php echo $ad_top_img;?>"></li>
                                            <li> <input  type="text" id="ad_bot_img"  placeholde="Bottom Image" value="<?php echo $ad_bot_img;?>"></li>
                                            <li><input  type="text" id="ad_h4" placeholder="Ad h4" value="<?php echo $ad_h4;?>" /></li>
                                            <li><input  type="text"  id="ad_h5" placeholder="Ad h5" value="<?php echo $ad_h5;?>"/></li>
                                            <li><input  type="text"  id="ad_catagories" placeholder="Ad Catagories" value="<?php echo $ad_catagories;?>"/></li>

                                            <li><button id="update_button" index="<?php echo $index;?>">Update Advertisement</button></li>
                                        </ul>


                                    <?php
                                    }
                                    echo "</div>";


                                    }
//----------------------------------------------------------delete index advert------------------------------------------------------------------------

  function delete_index_advert(){
                                    global $db;
                                    if(isset($_POST) &&  isset($_POST['index']) ){
                                    // we have some updates to database
                                    $index = $_POST['index'];

                                   $SQL_DELETE = "DELETE FROM `index_new_items` WHERE `index` = '$index';";

                                    // $SQL_UPDATE = "UPDATE `social` SET `social_image` = '$social_image', `social_link` = '$social_link' WHERE `index` = '1';";
                                    // $SQL_UPDATE = "UPDATE `product` SET `product_h2` = '$product_h2', `product_img` = '$product_img' , `product_p` = '$product_p' WHERE `index` = '$index';";
                                    $index_advert_delete = $db->query($SQL_DELETE);
                                    if ($index_advert_delete){
                                        echo "success";
                                        //header('location: index.php');
                                    }else{

                                        echo "DELETE Failed <br/> $SQL_DELETE";


                                    }
                                    }
                                    $SQL = "SELECT * FROM `index_new_items`";
                                    $delete_advert = $db->query($SQL);

                                    ?>
                                    <div id="advert" type="delete_index_advert">
                                        <h2>Delete Index Advertisement</h2>
                                        <?php
                                        while($result_index_delete_advert = $delete_advert->fetch_assoc()){
                                            $index = $result_index_delete_advert['index'];
                                            $ad_top_img = $result_index_delete_advert['ad_top_img'];
                                            $ad_bot_img = $result_index_delete_advert['ad_bot_img'];
                                            $ad_h4 = $result_index_delete_advert['ad_h4'];
                                            $ad_h5 = $result_index_delete_advert['ad_h5'];
                                            $ad_catagories = $result_index_delete_advert['ad_catagories'];
                                            ?>

                                            <!-- <form id="update_product_vegetables" action="updateproduct.php?action=update_product_vegetables" method="POST"> !-->
                                            <ul id="<?php echo $index;?>">
                                                <li><input type="text" id="ad_top_img" placeholder="Top Image" value="<?php echo $ad_top_img;?>"></li>
                                                <li> <input  type="text" id="ad_bot_img"  placeholde="Bottom Image" value="<?php echo $ad_bot_img;?>"></li>
                                                <li><input  type="text" id="ad_h4" placeholder="Ad h4" value="<?php echo $ad_h4;?>" /></li>
                                                <li><input  type="text"  id="ad_h5" placeholder="Ad h5" value="<?php echo $ad_h5;?>"/></li>
                                                <li><input  type="text"  id="ad_catagories" placeholder="Ad Catagories" value="<?php echo $ad_catagories;?>"/></li>

                                                <li><button id="delete_advert_button" index="<?php echo $index;?>">Delete</button></li>
                                            </ul>



                                            <!--</form> !-->

                                        <?php
                                        }
                                        echo "</div>";

                                        }
//--------------------------------------------------------------Insert Index col5-------------------------------------------------------------
  function  insert_index_col5(){
   global $db;

  //add new index col5
   if (isset($_POST) && isset($_POST['content_img'])&& isset($_POST['content_h2']) && isset($_POST['content_p'])  && isset($_POST['content_post_catagories']) ){
       $content_img = $_POST['content_img'];
       $content_h2 = $_POST['content_h2'];
       $content_p = $_POST['content_p'];
       $content_post_catagories = $_POST['content_post_catagories'];

       $SQL_INSERT = "INSERT INTO `21104216`.`index_contents_1` (`content_img`, `content_h2`, `content_p`,`content_post_catagories`) VALUES ( '$content_img', '$content_h2', '$content_p','$content_post_catagories');";

       $Insert_index_content = $db->query($SQL_INSERT);
       if ($Insert_index_content){
        echo "success";

        exit;
        }else{
        echo "Update Failed $SQL_INSERT";
           exit;
        }
        }
                                            //display add index content 1 form

        ?>
        <div id="index_col5_add_container">


        <input type="text" id="content_img" placeholder="Content Image" value="">
        <input type="text" id="content_h2" placeholder="Content h2" value="">
        <input type="text" id="content_p" placeholder="content Text" value="">

        <select  id="content_post_catagories" placeholder="Choose Catagories" value="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>

       </select>
        <button id="add_index_col5_button">Add New Content</button>
        </div>
        <?php

        }
//--------------------------------------------------------Update Index Col5-----------------------------------------------------------------------------------------------------------------------------
 function update_index_col5(){
//declare global variable
global $db;

//print_r($_POST);
 if(isset($_POST) && isset($_POST['content_img'])&& isset($_POST['content_h2']) && isset($_POST['content_p'])  && isset($_POST['content_post_catagories'])&& isset($_POST['index'])){
 $index = $_POST['index'];
     $content_img = $_POST['content_img'];
     $content_h2 = $_POST['content_h2'];
     $content_p = $_POST['content_p'];
     $content_post_catagories = $_POST['content_post_catagories'];

  $SQL_UPDATE = "UPDATE `index_contents_1` SET `content_img` = '$content_img', `content_h2` = '$content_h2' , `content_p` = '$content_p', `content_post_catagories` = '$content_post_catagories' WHERE `index` = '$index';";


  $update_index_content = $db->query($SQL_UPDATE);
  if ($update_index_content){
  echo "success";

   exit;
   }else{
   echo "Update Failed $SQL_UPDATE";
    exit;
  }
  }

  $SQL = "SELECT * FROM `index_new_items`";
  $index_content = $db->query($SQL);

   ?>
   <div id="index_content" type="update_index_col5">
   <h2>Update Index Content</h2>
   <?php
   while($index_content_result = $index_content->fetch_assoc()){
   $index = $index_content_result['index'];
   $content_img = $index_content_result['content_img'];
   $content_h2 = $index_content_result['content_h2'];
   $content_p = $index_content_result['content_p'];
   $content_post_catagories = $index_content_result['content_post_catagories'];
 ?>
    <ul id="<?php echo $index;?>">
        <li><input type="text" id="content_img" placeholder="Content Image" value="<?php echo $content_img;?>"></li>
         <li><input  type="text" id="content_h2"  placeholde="Content h2" value="<?php echo $content_h2;?>"></li>
        <li><textarea id="content_p"> <?php echo $content_p;?></textarea></li>
        <li><input  type="text"  id="content_post_catagories" placeholder="Ad Catagories" value="<?php echo $content_post_catagories;?>"/></li>
        <li><button id="update_content_button" index="<?php echo $index;?>">Update Content</button></li>
    </ul>
       <?php
     }
      echo "</div>";
 }

//----------------------------------------------------------delete index Col5------------------------------------------------------------------------
function delete_index_col5(){
global $db;
if(isset($_POST) &&  isset($_POST['index']) ){
                                                // we have some updates to database
$index = $_POST['index'];

$SQL_DELETE = "DELETE FROM `index_contents_1` WHERE `index` = '$index';";

$index_content_delete = $db->query($SQL_DELETE);
if ($index_content_delete){
 echo "success";
  //header('location: index.php');
 }else{

 echo "DELETE Failed <br/> $SQL_DELETE";


  }
  }
  $SQL = "SELECT * FROM `index_contents_1`";
  $delete_content = $db->query($SQL);

   ?>
       <div id="index_content" type="delete_index_col5">
           <h2>Delete Index Advertisement</h2>
           <?php
           while($result_index_delete_content = $delete_content->fetch_assoc()){
               $index = $result_index_delete_content['index'];
               $content_img = $result_index_delete_content['content_img'];
               $content_h2 = $result_index_delete_content['content_h2'];
               $content_p = $result_index_delete_content['content_p'];
               $content_post_catagories = $result_index_delete_content['content_post_catagories'];
               ?>

               <!-- <form id="update_product_vegetables" action="updateproduct.php?action=update_product_vegetables" method="POST"> !-->
               <ul id="<?php echo $index;?>">
                   <li><input type="text" id="content_img" placeholder="Content Image" value="<?php echo $content_img;?>"></li>
                   <li> <input  type="text" id="content_h2"  placeholde="Content h2" value="<?php echo $content_h2;?>"></li>
                   <li><textarea id="content_p"> <?php echo $content_p;?></textarea></li>
                   <li><input  type="text"  id="content_post_catagories" placeholder="Ad Catagories" value="<?php echo $content_post_catagories;?>"/></li>

                   <li><button id="delete_index_content_button" index="<?php echo $index;?>">Delete</button></li>
               </ul>



               <!--</form> !-->

           <?php
           }
           echo "</div>";

           }
 //--------------------------------------------------------Update Features for each Page -----------------------------------------------------------------------------
 function update_features_col3(){
           //declare global variable
           global $db;
          // print_r($_POST);
           //exit;
           if(isset($_POST) && isset($_POST['index'])&& isset($_POST['features_top_h4'])&& isset($_POST['features_top_p']) && isset($_POST['features_img'])  && isset($_POST['features_bot_h3'])&& isset($_POST['features_bot_h4']) && isset($_POST['page_categories']) ){

               $index = $_POST['index'];
               $features_top_h4     = $_POST['features_top_h4'];
               $features_top_p      = $_POST ['features_top_p'];
               $features_img        = $_POST ['features_img'];
               $features_bot_h3     = $_POST ['features_bot_h3'];
               $features_bot_h4     = $_POST['features_bot_h4'];
               $page_categories    = $_POST['page_categories'];

               $SQL_UPDATE = "UPDATE `col3_features` SET `features_top_h4` = '$features_top_h4', `features_top_p` = '$features_top_p' , `features_img` = '$features_img', `features_bot_h3` = '$features_bot_h4',`features_bot_h4` = '$features_bot_h3', `page_categories` = '$page_categories' WHERE `index` = '$index';";


               $update_features_col3 = $db->query($SQL_UPDATE);

               if ($update_features_col3){
                   echo "Successs";
                   //header('location: products.php');
                   exit;
               }else{
                   echo "Update Failed $SQL_UPDATE";
                   exit;
               }
           }

           $SQL = "SELECT * FROM `col3_features`";
           $features = $db->query($SQL);

           ?>
           <div id="features_div" type="update_features_col3">
               <h2>Update Features col3</h2>
               <?php
               while($features_col3_result = $features->fetch_assoc()){
                   $index = $features_col3_result['index'];
                   $features_top_h4     = $features_col3_result['features_top_h4'];
                   $features_top_p      = $features_col3_result ['features_top_p'];
                   $features_img        = $features_col3_result ['features_img'];
                   $features_bot_h3     = $features_col3_result ['features_bot_h3'];
                   $features_bot_h4     = $features_col3_result['features_bot_h4'];
                   $page_categories    = $features_col3_result['page_categories'];

                   ?>

                   <ul id="<?php echo $index;?>">
                       <li><input  type="text"  id="page_categories" placeholder="Page Categories" value="<?php echo $page_categories;?>"/></li>
                       <li><input type="text" id="features_top_h4" placeholder="Features Top Header" value="<?php echo $features_top_h4;?>"></li>

                       <li> <input  type="text" id="features_img"  placeholde="Features Images" value="<?php echo $features_img;?>"></li>
                       <li><input  type="text" id="features_bot_h3" placeholder="Features bottom h3" value="<?php echo $features_bot_h3;?>" /></li>
                       <li><input  type="text"  id="features_bot_h4" placeholder="Features bot h4" value="<?php echo $features_bot_h4;?>"/></li>
                       <li> <textarea id="features_top_p"  placeholde="Features Text"> <?php echo $features_top_p;?></textarea></li>

                       <li><button id="update_features_button" index="<?php echo $index;?>">Update Features Col3</button></li>
                   </ul>


               <?php
               }
               echo "</div>";


               }

//---------------------------------------------------------upload images------------------------------------------
function upload_images(){


  if (isset($_FILES['file'])){

     $IMAGE_DIR = dirname(__FILE__). DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'galleries' . DIRECTORY_SEPARATOR ;

    $name = $_FILES ['file']['name'];
    $tmp_name = $_FILES ['file']['tmp_name'];

    if(!empty($name)){


        if( move_uploaded_file($tmp_name, $IMAGE_DIR.$name)){

            echo "Uploaded $name";
        }else{
            if (file_exists($IMAGE_DIR.$name)){
                echo "failed to move file $name check file does not exist";
            }else{

                echo "Check dir read/write permission's chmod 777";
            }
        }

    }else{
        echo('Please choose a image');
    }
   // move_uploaded_file("")

      return;
  }
 ?>


        <div id ="uploaded" type="upload_images">

                <input id="file" type="file" name="file">

                <button id="file_upload_button" >Upload</button>

        </div>
        <div id="image_container"></div>
<?php


}

?>