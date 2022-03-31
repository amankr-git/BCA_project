<!DOCTYPE html>
<html>
<head>
<title>Add customer</title>
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header><h2>List of customers</h2></header>
<hr>
<div class=flexbox>
<aside>
<nav>
<li><a href="Add_customer.php"><i class="fa fa-address-book"></i> Add customer </a></li>
<li><a href="customer_list.php"><i class="fa fa-address-card-o"></i> Customer List </a></li>
<li><a href="Add_item.php"><i class="fa fa-plus"></i>Item</a></li>
<li><i class="fa fa-file"></i> Invoice</li>
<li><i class="fa fa-archive"></i> Stock</li>
<li><i class="fa fa-bar-chart"></i> Report</li>
</nav>
</aside>

<?php
$con = new mysqli("localhost", 'p_user', '1234','project');
if($con->connect_error){
    die($con->connect_error);
} /*else {
    echo "Connection sucessful!";
} */

$sql="SELECT * FROM customer";
$result = $con->query($sql);
if($result->num_rows > 0){
    
    echo '<table border=1 class=table_c>';
    echo "<tr>";
    echo "<th>Customer no</th>";
    echo "<th>First name</th>";
    echo "<th>Last name</th>";
    echo "<th>Phone no</th>";
    echo "<th>Address</th>";
    echo "</tr>";
    
    while ($row=$result->fetch_assoc()) {
        echo "<tr>";
        echo'<td> ' .$row["customer_no"].'</td>';
        echo'<td> ' .$row["first_name"].'</td>';
        echo'<td> ' .$row["last_name"].'</td>';
        echo'<td> ' .$row["phone_no"].'</td>';
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

<h4>&nbsp&nbsp To edit data<br>&nbsp&nbsp <a href="edit_customer.php">click here</a></h4>

</body>
</html>