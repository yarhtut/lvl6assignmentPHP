
<link rel="stylesheet" href="stylesheet/update.css"/>
<?php
/**
 * Created by PhpStorm.
 * User: 21104216
 * Date: 17/05/14
 * Time: 1:08 PM
 */
// our main update
session_start();

if (isset($_SESSION['logged_in']) == false) {
    header('location: admin.php');
    exit;
}

require_once("database.php");
require_once("admin.php");
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
//top_social_facebook
function top_social__facebook_get(){
    //declare global variable
    global $db;

   //print_r($_POST);
    if (isset($_POST) && isset($_POST['social_image'])&& isset($_POST['social_link']) ){
        // we have some updates to database
       //$social_name  =       $_POST['social_name'];
        $social_image  =       $_POST['social_image'];
        $social_link  =       $_POST['social_link'];
        $SQL_UPDATE = "UPDATE `social` SET `social_image` = '$social_image', `social_link` = '$social_link' WHERE `index` = '1';";

        //print_r($SQL_UPDATE);
       // exit;
        $social_update = $db->query($SQL_UPDATE);
        if ($social_update){
            header('location: index.php');
        }else{
            echo "Update Failed";
        }
    }

    $SQL = "SELECT * FROM `social` ";
    $social_results = $db->query($SQL);

    $social_details = $social_results->fetch_assoc();

   // $social_name =     $social_details['social_name'];
    $social_image =    $social_details['social_image'];
    $social_link =    $social_details['social_link'];
    ?>
    <body id="aa">
    <form id="top_social_facebook" action="#" method="POST">
       <input type="text" name="social_image" placeholder="Social Image" value="<?php echo $social_image;?>"><br/>
        <input  type="text" name="social_link"  placeholde="Social Link"value="<?php echo $social_link;?>"><br/>
        <input id="update_button" type="submit" type="submit" name="Submit" value="Update">

    </form>
    </body>
<?php
}
//delete the top social facebook icon and link
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
//update the top social twitter
function top_social__twitter_get(){
    //declare global variable
    global $db;

    if (isset($_POST) && isset($_POST['social_image'])&& isset($_POST['social_link']) ){
        // we have some updates to database
        $social_image  =       $_POST['social_image'];
        $social_link  =       $_POST['social_link'];
        $SQL_UPDATE = "UPDATE `social` SET `social_image` = '$social_image', `social_link` = '$social_link' WHERE `index` = '2';";

       // print_r($SQL_UPDATE);
       //  exit();
        $social_update = $db->query($SQL_UPDATE);
        if ($social_update){
            header('location: index.php');
        }else{
            echo "Update Failed";
        }
    }

    $SQL = "SELECT * FROM `social` ";
    $social_results = $db->query($SQL);

    $social_details = $social_results->fetch_assoc();

    $social_image =    $social_details['social_image'];
    $social_link =    $social_details['social_link'];
    ?>
    <body id="aa">
    <form id="top_social_twitter" action="#" method="POST">
        <input type="text" name="social_image" placeholder="Social Image" value="<?php echo $social_image;?>"><br/>
        <input  type="text" name="social_link"  placeholde="Social Link"value="<?php echo $social_link;?>"><br/>
        <input id="update_button" type="submit" type="submit" name="Submit" value="Update">

    </form>
    </body>
<?php
}
//delete the top social twitter icon and link
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
////update the top social google +
function top_social__google_get(){
    //declare global variable
    global $db;

    if (isset($_POST) && isset($_POST['social_image'])&& isset($_POST['social_link']) ){
        // we have some updates to database
        $social_image  =       $_POST['social_image'];
        $social_link  =       $_POST['social_link'];
        $SQL_UPDATE = "UPDATE `social` SET `social_image` = '$social_image', `social_link` = '$social_link' WHERE `index` = '3';";

        // print_r($SQL_UPDATE);
        //  exit();
        $social_update = $db->query($SQL_UPDATE);
        if ($social_update){
            header('location: index.php');
        }else{
            echo "Update Failed";
        }
    }

    $SQL = "SELECT * FROM `social` ";
    $social_results = $db->query($SQL);

    $social_details = $social_results->fetch_assoc();

    $social_image =    $social_details['social_image'];
    $social_link =    $social_details['social_link'];
    ?>
    <body id="aa">
    <form id="top_social_twitter" action="#" method="POST">
        <input type="text" name="social_image" placeholder="Social Image" value="<?php echo $social_image;?>"><br/>
        <input  type="text" name="social_link"  placeholde="Social Link"value="<?php echo $social_link;?>"><br/>
        <input id="update_button" type="submit" type="submit" name="Submit" value="Update">

    </form>
    </body>
<?php
}
//delete the top social twitter icon and link
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