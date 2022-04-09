<?php
include 'searchcidbyname.php';
include 'SearchByName.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Add customer</title>
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header><h2>BILL DESK</h2></header>
<hr>
<div class=flexbox>
<aside>
<nav>
<ul>
<li><a href="Add_customer.php"><i class="fa fa-address-book"></i> Add customer </a></li>
<li><a href="customer_list.php"><i class="fa fa-list-ul"></i> Customer List </a></li>
<li><a href="Add_item.php"><i class="fa fa-plus"></i> Add Item</a></li>
<li><a href="#"><i class="fa fa-th-list"></i> Item List </a></li>
<li><a href="Add_vendor.php"><i class="fa fa-address-book"></i> Add Vendor</a></li>
<li><a href="vendor_list.php"><i class="fa fa-address-book"></i>Vendor list</a></li>
<li><i class="fa fa-file"></i> Invoice</li>
<li><i class="fa fa-archive"></i> Stock</li>
<li><i class="fa fa-bar-chart"></i> Report</li>
</ul>
</nav>
</aside>
<form class="formsc">
<b> Search by first name and last name</b><br>
    <input type="text" id="first_name" name="first_name" placeholder="First name" value=<?= $first_name ?>><br>
    <input type="text" id="last_name" name="last_name" placeholder="Last name" value=<?= $last_name ?>><br>
    <button name="search1">Search</button><br>
    <label for ="customer_no">Customer No:</label><br>
    <input type="text" id="customer_nu" name="customer_nu" placeholder="Customer no" value="<?= $customer_no ?>"><br> 
</form>
<form class="formsi">
<b>Search item number by item name </b><br>
    <input type="text" id="item_name" name="item_name" placeholder="Item name" value="<?=$item_name?>">
    <button name="searchitem">Search</button><br>
    &nbsp<label for ="item_name">Item number:</label><br>
    <input type="text" id="item_no" name="item_no" placeholder="Item number" value="<?=$iid?>">
</form>
<div class="sform">
<form action="">
    <b>Provide the Item details </b><br>
    <label for ="item_no">Item No:</label>&nbsp
    <input type="text" id="item_no" name="item_no" >
    <label for ="item_name">Item name:</label>
    <input type="text" id="item_name" name="item_name" >
    <label for ="rate">Rate :</label>
    <input type="number" id="rate" name="rate" >
    <label for ="tax">Tax:</label>
    <select name = "tax" class="tax">
            <option value = "0" selected>GST Free</option>
            <option value = "5" >5% GST</option>
            <option value = "12" >12% GST</option>
            <option value = "18" >18% GST</option>
            <option value = "28" >28% GST</option>
    </select>
    <br>
    <label for ="item_no">Item No:</label>&nbsp
    <input type="text" id="item_no" name="item_no" >
    <label for ="item_name">Item name:</label>
    <input type="text" id="item_name" name="item_name" >
    <label for ="rate">Rate :</label>
    <input type="number" id="rate" name="rate" >
    <label for ="tax">Tax:</label>
    <select name = "tax" class="tax">
            <option value = "0" selected>GST Free</option>
            <option value = "5" >5% GST</option>
            <option value = "12" >12% GST</option>
            <option value = "18" >18% GST</option>
            <option value = "28" >28% GST</option>
    </select>
    <br>
    <label for ="item_no">Item No:</label>&nbsp
    <input type="text" id="item_no" name="item_no" >
    <label for ="item_name">Item name:</label>
    <input type="text" id="item_name" name="item_name" >
    <label for ="rate">Rate :</label>
    <input type="number" id="rate" name="rate" >
    <label for ="tax">Tax:</label>
    <select name = "tax" class="tax">
            <option value = "0" selected>GST Free</option>
            <option value = "5" >5% GST</option>
            <option value = "12" >12% GST</option>
            <option value = "18" >18% GST</option>
            <option value = "28" >28% GST</option>
    </select>
    <br>
    <button class="Submit"> Submit</button>
    <button class="button2" type="reset">Reset</button>
</form>
</div>
<br>
</div>
<footer class="footerlist"><h2>&copy; 2021-All Rights Reserved.</h2></footer>
</body>
</html>