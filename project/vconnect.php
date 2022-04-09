<?php
$con = new mysqli("localhost", 'p_user', '1234','project');
if($con->connect_error){
    die($con->connect_error);
}/* else {
    echo "Connection sucessful!";
}*/
$vendor_no = $_GET['vendor_no'];
$company_name = $_GET['company_name'];
$phone_no = $_GET['phone_no'];
$phone_no2 = $_GET['phone_no2'];
$address = $_GET['address'];

$sql = "INSERT into vendor values('$vendor_no','$company_name','$phone_no','$phone_no2','$address')";
if($con->query($sql)== true)
{
    echo "Your data is successfully submitted.";
}
else{
    echo $con->error;
}
?>