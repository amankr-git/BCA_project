<?php
$customer_no = null;
$first_name = null;
$last_name = null;
if(isset($_GET['search1'])) {
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
include 'sqlconnect.php';
$sql = "SELECT * FROM customer WHERE first_name ='$first_name'AND last_name='$last_name'";
$result = $con->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $customer_no = $row['customer_no'];
}
}
?>


