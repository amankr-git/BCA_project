
<?php
include 'sessionphp.php';
include 'generateid.php';

$cid = generate_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Add customer</title>
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header><h2>Add a new customer<a class="logoutnote" href="logout.php"> Click here<br>Logout&nbsp </a></h2></header>
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
<li><a href="vendor_list.php"><i class="fa fa-address-book"></i> Vendor list</a></li>
<li><a href="create_invoice.php"><i class="fa fa-file"></i> Create Invoice</a></li>
<li><a href="print_bill.php"><i class="fa fa-print"></i> Print Bill</a></li>
<li><i class="fa fa-archive"></i> Stock</li>
<li><i class="fa fa-bar-chart"></i> Report</li>

</ul>
</nav>
</aside>
<main><b>Please provide the following details</b><br><br>
    <form action="connection.php">
    <label for ="customer_no">CNo:</label><br>
    <input type="text" id="customer_no" name="customer_no" value="<?= $cid?>"><br>
    <label for ="name">Name :</label><br>
    <input type="text" id="name" name="name"><br>
    <!--<label for ="last_name">Last name :</label><br>
    <input type="text" id="last_name" name="last_name"><br>-->
    <label for ="phone_no">Phone Number:</label><br>
    <input type="text" id="phone_no" name="phone_no"><br>
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
