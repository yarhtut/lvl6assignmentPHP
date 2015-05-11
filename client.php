<?php
session_start();

if (isset($_SESSION['logged_in']) == false) {
    header('location: admin.php');
    exit;
}

require_once("database.php");

?>

<link rel="stylesheet" href="stylesheet/client.css"/>
<body id="aa">
<div id="client">
    <ul id="client_table">
        <h2>Client Contact list Table</h2>
        <h6><a href="admin.php" title="Back to the homepage"><img src="images/admin/home.png" width="40px" height="40px"><p>Capital Organic</p></a></h6>
        <li id="no">NO</li>
        <li id="name">Name</li>
        <li id="email">Email</li>
        <li id="phone">Phone</li>
        <li id="textarea">Address</li>
        <li id="fun">Function</li>
        </ul>

        <?php
        $SQL = "SELECT * FROM `contact_form`";
        $contact_info= $db->query($SQL);

        while($result_contact_info = $contact_info->fetch_assoc()){
            $index =$result_contact_info['index'];
            $name = $result_contact_info['name'];
            $email = $result_contact_info['email'];
            $phone = $result_contact_info['telephone'];
            $textarea = $result_contact_info['textarea'];

            ?>
            <ul class="client_table">
            <li id="no"><?php echo $index; ?></li>
            <li id="name"><?php echo $name; ?></li>
            <li id="email"><?php echo $email; ?></li>
            <li id="phone"><?php echo $phone; ?></li>
            <li id="textarea"><?php echo $textarea; ?></li>
                <li id="upd"><a href="#">Update</a></li>
                <li id="del"><a href="#">Delete</a></li>

            </ul>

        <?php
        }
        ?>




</div>
</body>