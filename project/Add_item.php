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
        <li><a href="Add_customer.php"><i class="fa fa-address-book"></i> Add customer </a></li>
        <li><a href="customer_list.php"><i class="fa fa-address-card-o"></i> Customer List </a></li>
        <li><a href="Add_item.php"><i class="fa fa-plus"></i> Add Item</a></li>
        <li><i class="fa fa-file"></i> Invoice</li>
        <li><i class="fa fa-archive"></i> Stock</li>
        <li><i class="fa fa-bar-chart"></i> Report</li>
    </nav>
</aside>
<main><b>Please provide the item details </b><br><br>
<form>
    <label for ="item_no">Item No:</label><br>
    <input type="text" id="item_no" name="item_no" >
    <hr>
    <label for ="first_name">Item name :</label><br>
    <input type="text" id="first_name" name="first_name" ><br>
    <label for ="description">Description:</label><br>
    <textarea id="description" name="description" rows="4" clos="40" ></textarea>
    <br>
    <hr>
    <label for ="first_name">Selling price :</label><br>
    <input type="number" id="first_name" name="first_name" ><br>
    <label for ="address">Others :</label><br>
    <input type="text" id="address" name="address" ><br><br>
    <button class="Submit"> Submit</button>
</form>
    </main>
</div>
<hr>
<footer><h2>&copy; 2021 Copyright - All Rights Reserved</h2></footer>
</body>
</html>