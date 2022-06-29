<?php

$count= 0;

$vid = null;
$vcname = null;
$vid1 = null;
$vcname1= null;
$vid2 = null;
$vcname2= null;
if(isset($_POST['searchv'])) {
$vcname = $_POST['vcname'];
include 'sqlconnect.php';
$sql = "SELECT * FROM vendor WHERE company_name ='$vcname'";
$result = $con->query($sql);
if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $vid = $row['vendor_no'];
    $count=$count+1;
    echo"$count";
}

}
?>