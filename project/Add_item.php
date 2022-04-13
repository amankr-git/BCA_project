<?php
include 'sessionphp.php';
include 'generateid.php';
include 'SearchByName.php';
$iid = generate_iid();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add item details </title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header><h2>Add new item</h2></header>
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
<!--</div>-->
<main><b class="note">Please provide both item and vendor details </b><br>
<div class="parent">
<div class="sform1">
<form>
<b>Provide the vendor details  </b><br><br>
    <label for ="vcname">Vendor Name :</label>
    <input type="text" id="vcname" name="vcname" value="<?= $vcname?>">
    <button name="searchi">Search</button><br>
    <label for ="vendor_id">Vendor Id:</label>
    <span class="tab"><input type="text" id="vendor_id" name="vendor_id" value="<?= $vid?>"></span>
    </form>
 </div>
 <div class="sform">
<form action="iconnect.php">
    <b>Provide the Item details </b><br><br>
    <label for ="item_no">Item No:</label>&nbsp&nbsp&nbsp&nbsp
    <input type="text" id="item_no" name="item_no" value="<?= $iid?>"><br>
    <label for ="item_name">Item name:</label>
    <input type="text" id="item_name" name="item_name" ><br>
    
    <label for ="rate">Rate :</label>
    <span class="tab"><input type="number" id="rate" name="rate" ></span><br>
    <label for ="tax">Tax (in %):</label>
    <select name = "tax" class="tax">
            <option value = "0" selected>GST Free</option>
            <option value = "5" >5% GST</option>
            <option value = "12" >12% GST</option>
            <option value = "18" >18% GST</option>
            <option value = "28" >28% GST</option>
    </select><br><br>
    <label for ="description">Description:</label><br>
    <textarea id="description" name="description" rows="3" clos="30" ></textarea><br>
    
    <label for ="opening_stock">Opening stock :</label>
    <input type="number" id="opening_stock" name="opening_stock">&nbsp&nbsp<br>
    <label for ="purchased_rate">Purchased Rate:</label>
    <input type="number" id="purchased_rate" name="purchased_rate" ><br>
    
    <input type="hidden" name="vcname" value="<?= $vcname?>">
    <input type="hidden" name="vendor_id" value=<?= $vid ?>>
    <br>
    <button class="Submit"> Submit</button>
    <button class="button2" type="reset">Reset</button>
</form>
</main>
</div>

<div>
<!--<footer><h2>&copy; 2021 Copyright - All Rights Reserved</h2></footer>-->
<footer class="footerlist"><h2>&copy; 2021-All Rights Reserved.</h2></footer>
</body>
</html>