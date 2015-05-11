<div class="wrapper col7">
    <div id="footer">
        <div id="footlogo">

            <?php
            $SQL = "SELECT * FROM `Footer_contact`";
            $footer_contact = $db->query($SQL);
            while($result_footer_contact = $footer_contact->fetch_assoc()){
                $footer_img = $result_footer_contact['footer_img'];
                $footer_h3 = $result_footer_contact ['footer_h3'];
                $footer_name = $result_footer_contact ['footer_name'];
                $footer_phone = $result_footer_contact ['footer_phone'];
                $footer_email = $result_footer_contact['footer_email'];

                ?>

                <a href="contact.php">
                    <img src="<?php echo $footer_img;?>"/>
                    <h3> <?php echo $footer_h3;?></h3>
                    </br>

                    <h4> <?php echo $footer_name;?></h4>
                    <h5><?php echo $footer_phone;?></h5>
                    <h5><?php echo $footer_email;?></h5>

                </a>

            <?php
            }
            ?>


        </div>
        <div id="footnav">
            <ul id="footnava">
            <?php
            $SQL = "SELECT * FROM `footer_nav_login_supplier` WHERE `footer_catagories` = 'menu'";
            $footer_nav_login_supplier = $db->query($SQL);
            $result_footer_nav_login_supplier = $footer_nav_login_supplier->fetch_assoc();

            $footer_h2 = $result_footer_nav_login_supplier['footer_h2'];
            ?>
                <h2><?php echo $footer_h2;?></h2>
                <?php
                $SQL = "SELECT * FROM `footer_nav_login_supplier` WHERE `footer_catagories` = 'menu'";
                $footer_nav_login_supplier = $db->query($SQL);

            while($result_footer_nav_login_supplier = $footer_nav_login_supplier->fetch_assoc()){

                $footer_link = $result_footer_nav_login_supplier ['footer_link'];
                $footer_link_name = $result_footer_nav_login_supplier ['footer_link_name'];

                ?>
                <li><a href="<?php echo $footer_link; ?>"> <?php echo $footer_link_name; ?></a> </li>


            <?php
            }
            ?>
            </ul>
        </div>
        <div id="footlogin">
            <ul id="footlogina">
                <?php
                $SQL = "SELECT * FROM `footer_nav_login_supplier` WHERE `footer_catagories` = 'info'";
                $footer_nav_login_supplier = $db->query($SQL);
                $result_footer_nav_login_supplier = $footer_nav_login_supplier->fetch_assoc();

                $footer_h2 = $result_footer_nav_login_supplier['footer_h2'];
                ?>
                <h2><?php echo $footer_h2;?></h2>
                <?php
                $SQL = "SELECT * FROM `footer_nav_login_supplier` WHERE `footer_catagories` = 'info'";
                $footer_nav_login_supplier = $db->query($SQL);

                while($result_footer_nav_login_supplier = $footer_nav_login_supplier->fetch_assoc()){

                    $footer_link = $result_footer_nav_login_supplier ['footer_link'];
                    $footer_link_name = $result_footer_nav_login_supplier ['footer_link_name'];

                    ?>
                    <li><a href="<?php echo $footer_link; ?>"> <?php echo $footer_link_name; ?></a> </li>


                <?php
                }
                ?>
            </ul>
        </div>
        <div id="footsupplier">
            <ul id="footsuppliera">
                <?php
                $SQL = "SELECT * FROM `footer_nav_login_supplier` WHERE `footer_catagories` = 'supplier'";
                $footer_nav_login_supplier = $db->query($SQL);
                $result_footer_nav_login_supplier = $footer_nav_login_supplier->fetch_assoc();

                $footer_h2 = $result_footer_nav_login_supplier['footer_h2'];
                ?>
                <h2><?php echo $footer_h2;?></h2>
                <?php
                $SQL = "SELECT * FROM `footer_nav_login_supplier` WHERE `footer_catagories` = 'supplier'";
                $footer_nav_login_supplier = $db->query($SQL);

                while($result_footer_nav_login_supplier = $footer_nav_login_supplier->fetch_assoc()){

                    $footer_link = $result_footer_nav_login_supplier ['footer_link'];
                    $footer_link_name = $result_footer_nav_login_supplier ['footer_link_name'];

                    ?>
                    <li><a href="<?php echo $footer_link; ?>"> <?php echo $footer_link_name; ?></a> </li>


                <?php
                }
                ?>
            </ul>

        </div>
        <div id="footsocial">

            <?php
            $SQL = "SELECT * FROM `footer_social` ";
            $footer_social = $db->query($SQL);
            $results_footer_social = $footer_social->fetch_assoc();
            $footer_h2 = $results_footer_social['footer_h2'];
            ?>


            <h2><?php echo $footer_h2; ?></h2>
            <table>
                <tr>
                    <?php
                    $SQL = "SELECT * FROM `footer_social` ";
                    $footer_social = $db->query($SQL);
            ////fetching the
            while($results_footer_social = $footer_social->fetch_assoc()){

                $footer_social_link =        $results_footer_social['footer_social_link'];
                $footer_social_name=   $results_footer_social['footer_social_name'];

                ?>
                <td><a href="<?php echo $footer_social_link; ?>"> <img src="<?php echo $footer_social_name;?>" width="40" height="40" alt=""/></a></td>

            <?php
            }

            //we have a submenu
            ?>
                </tr>
            </table>

        </div>

    </div>
</div>