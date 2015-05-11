<?php
session_start();

if (isset($_SESSION['logged_in']) == false) {
    header('location: admin.php');
    exit;
}

require_once("database.php");

?>

<link rel="stylesheet" href="stylesheet/client.css"/>
<script src="libs/jquery.min.js"></script>
<body id="aa">
<div id="client">
    <ul id="client_table">
        <h2>Customer Order List</h2>
        <h6><a href="admin.php" title="Back to the homepage"><img src="images/admin/home.png" width="40px" height="40px"><p>Capital Organic<p></p></a></h6>
        <li id="no">NO</li>
        <li id="name">Name</li>
        <li id="email">Email</li>
        <li id="phone">Phone</li>
        <li id="address">Address</li>
        <li id="product">Product</li>
        <li id="fun">Update/delete</li>
    </ul>

    <?php
    $SQL = "SELECT * FROM `enquiry_form`";
    $enquiry_info= $db->query($SQL);

    while($result_enquiry_info = $enquiry_info->fetch_assoc()){
        $index =$result_enquiry_info['index'];
        $name = $result_enquiry_info['name'];
        $email = $result_enquiry_info['email'];
        $phone = $result_enquiry_info['telephone'];
        $address = $result_enquiry_info['address'];
        $purchase_items = $result_enquiry_info['purchase_items'];

        ?>
        <ul class="client_table" >
            <li id="no"><?php echo $index; ?></li>
            <li id="name"><?php echo $name; ?></li>
            <li id="email"><?php echo $email; ?></li>
            <li id="phone"><?php echo $phone; ?></li>
            <li id="address"><?php echo $address; ?></li>
            <li id="purchase_items"><?php echo $purchase_items;?></li>
            <li id="upd"><a href="#">Update</a></li>
            <li id="del"><a href="#">Delete</a></li>

        </ul>

    <?php
    }
    ?>
    <script>
        $(".client_table").each(function(){
            var this_div = $(this);
            var items = $(this).attr("products");

            //make sure we have products by json
            var products;
            try{
                products = JSON.parse(items);

            }catch(e){

            }


            //test object
            if (typeof products == "object"){
                //we have products
                $.each(products,function(index,product){


                    $("#purchase_items", this_div).append("<div>"+product.name+"</div>")
                })

            }

        })
    </script>



</div>
</body>