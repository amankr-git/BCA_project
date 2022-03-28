<?php
$con = new mysqli("localhost", 'p_user', '1234','project');
if($con->connect_error){
    die($con->connect_error);
}/* else {
    echo "Connection sucessful!";
}*/
$customer_no = $_GET['customer_no'];
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$phone_no = $_GET['phone_no'];
$address = $_GET['address'];

$sql = "INSERT into customer values('$customer_no','$first_name','$last_name','$phone_no','$address')";
if($con->query($sql)== true)
{
    echo "Your data is successfully submitted.";
}
else{
    echo $con->error;
}
?>


