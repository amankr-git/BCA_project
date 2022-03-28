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