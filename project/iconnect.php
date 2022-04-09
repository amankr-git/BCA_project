<?php
$con = new mysqli("localhost", 'p_user', '1234','project');
if($con->connect_error){
    die($con->connect_error);
}/* else {
    echo "Connection sucessful!";
}*/
$item_no = $_GET['item_no'];
$item_name = $_GET['item_name'];
$rate = $_GET['rate'];
$tax = $_GET['tax'];
$description = $_GET['description'];
$vcname= $_GET['vcname'];
$vendor_no= $_GET['vendor_id'];
$opening_stock=$_GET['opening_stock'];
$purchased_rate=$_GET['purchased_rate'];

$sql = "INSERT into item values('$item_no','$item_name','$rate','$tax','$description','$vcname','$vendor_no','$opening_stock','$purchased_rate')";
if($con->query($sql)== true)
{
    echo "Your data is successfully submitted.";
}
else{
    echo $con->error;
}
?>