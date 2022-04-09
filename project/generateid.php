<?php
function generate_id()
{
$con = new mysqli("localhost", 'p_user', '1234','project');
if($con->connect_error){
    die($con->connect_error);
}/* else {
    echo "Connection sucessful!";
} */
$sql = "select customer_no from customer order by customer_no desc limit 1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cid = $row['customer_no'];
    $cid = substr($cid, 1);
    $cid = $cid + 1;
    if ($cid < 10)
        $cid = "C00$cid";
    else if ($cid < 100)
        $cid = "C0$cid";
    else if ($cid < 1000)
        $cid = "C$cid";
} else {
    $cid = 'C001';
}
$con->close();
return $cid;
}

function generate_vid()
{
$con = new mysqli("localhost", 'p_user', '1234','project');
if($con->connect_error){
    die($con->connect_error);
}/* else {
    echo "Connection sucessful!";
} */
$sql = "select vendor_no from vendor order by vendor_no desc limit 1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $vid = $row['vendor_no'];
    $vid = substr($vid, 1);
    $vid = $vid + 1;
    if ($vid < 10)
        $vid = "V00$vid";
    else if ($vid < 100)
        $vid = "V0$vid";
    else if ($cid < 1000)
        $vid = "V$vid";
} else {
    $vid = 'V001';
}
$con->close();
return $vid;
}


function generate_iid()
{
$con = new mysqli("localhost", 'p_user', '1234','project');
if($con->connect_error){
    die($con->connect_error);
}/* else {
    echo "Connection sucessful!";
} */
$sql = "select item_no from item order by item_no desc limit 1";
//$sql = "select vendor_no from vendor order by vendor_no desc limit 1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $iid = $row['item_no'];
    $iid = substr($iid, 1);
    $iid = $iid + 1;
    if ($iid < 10)
        $iid = "I00$iid";
    else if ($iid < 100)
        $iid = "I0$iid";
    else if ($iid < 1000)
        $iid = "I$iid";
} else {
    $iid = 'I001';
}
$con->close();
return $iid;
}