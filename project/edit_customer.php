<?php
$customer_no = $_GET['customer_no'];
$first_name = null;
include 'sqlconnect.php';
$sql = "SELECT * FROM customer WHERE customer_no ='$customer_no'";
$result = $con->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $first_name = $row['first_name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit customer</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header><h2>Edit customer</h2></header>
<hr>
<div class=flexbox>
<aside>
    <nav>
        <li><a href="#"><i class="fa fa-address-book"></i> Add customer </a></li>
        <li><a href="customer_list.php"><i class="fa fa-address-card-o"></i> Customer List </a></li>
        <li><a href="https://www.w3schools.com/"><i class="fa fa-plus"></i>Item</a></li>
        <li><i class="fa fa-file"></i> Invoice</li>
        <li><i class="fa fa-archive"></i> Stock</li>
        <li><i class="fa fa-bar-chart"></i> Report</li>
    </nav>
</aside>
<main><b>Please provide the following details</b><br><br>
    <form >
    <label for ="customer_no">CNo:</label><br>
    <input type="text" id="customer_no" name="customer_no" value=<?= $customer_no?>>
    <button>Search</button><br>
    <label for ="first_name">First name :</label><br>
    <input type="text" id="first_name" name="first_name"><br>
    <label for ="last_name">Last name :</label><br>
    <input type="text" id="last_name" name="last_name"><br>
</form>
    </main>
</div>
<hr>
<footer><h2>&copy; 2021 Copyright - All Rights Reserved</h2></footer>
</body>
</html>