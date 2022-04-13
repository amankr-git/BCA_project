
<?php
include 'sessionphp.php';
include 'generateid.php';

$vid = generate_vid();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Add vendor</title>
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header><h2>Add a new vendor</h2></header>
<hr>
<div class=flexbox>
<aside>
<nav>
<ul>
<li><a href="Add_customer.php"><i class="fa fa-address-book"></i> Add customer </a></li>
<li><a href="customer_list.php"><i class="fa fa-list-ul"></i> Customer List </a></li>
<li><a href="Add_item.php"><i class="fa fa-plus"></i> Add Item</a></li>
<li><a href="item_list.php"><i class="fa fa-th-list"></i> Item List </a></li>
<li><a href="Add_vendor.php"><i class="fa fa-address-book"></i> Add Vendor</a></li>
<li><a href="vendor_list.php"><i class="fa fa-address-book"></i>Vendor list</a></li>
<li><a href="create_invoice.php"><i class="fa fa-file"></i>Create Invoice</a></li>
<li><i class="fa fa-archive"></i> Stock</li>
<li><i class="fa fa-bar-chart"></i> Report</li>
</ul>
</nav>
</aside>
<main><b>Please provide the following details</b><br><br>
    <form action="vconnect.php">
    <label for ="vendor_no">VNo:</label><br>
    <input type="text" id="vendor_no" name="vendor_no" value="<?= $vid?>"><br>
    <label for ="company_name">Comapany Name :</label><br>
    <input type="text" id="company_name" name="company_name"><br>
    <label for ="phone_no">Phone Number:</label><br>
    <input type="text" id="phone_no" name="phone_no"><br>
    <label for ="phone_no2">Alternate Phone Number:</label><br>
    <input type="text" id="phone_no2" name="phone_no2"><br>
    <label for ="address">Address :</label><br>
    <input type="text" id="address" name="address"><br><br><br>
    <button class="button1"> Submit</button>
    <button class="button2" type="reset">Reset</button>
    </form>
</main>
</div>
<hr>
<footer><h2>&copy; 2021 Copyright - All Rights Reserved</h2></footer>
</body>
</html>
