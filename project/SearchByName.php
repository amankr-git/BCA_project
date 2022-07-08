<?php
$vid = null;
$vcname = null;
if(isset($_GET['searchi'])) {
$vcname = $_GET['vcname'];
include 'sqlconnect.php';
$sql = "SELECT * FROM vendor WHERE company_name ='$vcname'";
$result = $con->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $vid = $row['vendor_no'];
}
}
?>

<?php
$iid = null;
$item_name = null;
if(isset($_GET['searchitem'])) {
$item_name = $_GET['item_name'];
include 'sqlconnect.php';
$sql = "SELECT * FROM item WHERE item_name ='$item_name'";
$result = $con->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $iid = $row['item_no'];
}
}
?>