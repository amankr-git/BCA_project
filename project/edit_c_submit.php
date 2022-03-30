<?php

$customer_no = $_GET['cu_no'];
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$phone_no = $_GET['phone_no'];
$address = $_GET['address'];
include 'sqlconnect.php';

$sql = "UPDATE customer SET first_name ='$first_name',last_name ='$last_name',phone_no ='$phone_no',address ='$address' WHERE customer_no='$customer_no'";
if($con->query($sql)==true){
    echo"Data got updated";
} else{
    echo $con->error;
}

?>