<?php
include 'sessionphp.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Vendor list</title>
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header><h2>List of vendors</h2></header>
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
<h4 class= "note"> To edit data <br> <a href="edit_vendor.php">click here</a> </h4>
<div class="tablel">
<br>
<?php
$con = new mysqli("localhost", 'p_user', '1234','project');
if($con->connect_error){
    die($con->connect_error);
} /*else {
    echo "Connection sucessful!";
} */

$sql="SELECT * FROM vendor";
$result = $con->query($sql);
if($result->num_rows > 0){
    
    echo '<table class=table_c>';
    echo "<tr>";
    echo "<th>Vendor no</th>";
    echo "<th>Company name</th>";
    echo "<th>Phone no</th>";
    echo "<th>Alternate Phone no</th>";
    echo "<th>Address</th>";
    echo "</tr>";
    
    while ($row=$result->fetch_assoc()) {
        echo "<tr>";
        echo'<td> ' .$row["vendor_no"].'</td>';
        echo'<td> ' .$row["company_name"].'</td>';
        echo'<td> ' .$row["phone_no"].'</td>';
        echo'<td> ' .$row["alternate_phone_no"].'</td>';
        echo'<td> ' .$row["address"].'</td>';
        echo "</tr>";
    }
    echo "</table>";
   
}
    else{
    echo "NO DATA TO DISPLAY";
}
$con->close();
?>
</div>
<!--<h4 class="">&nbsp&nbsp To edit data &nbsp&nbsp <a href="edit_customer.php">click here</a></h4>-->

<footer class="footerlist"><h2>&copy; 2021-All Rights Reserved.</h2></footer>
</body>
</html>