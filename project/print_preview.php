<?php
include 'sessionphp.php';
include 'generateid.php';
$Inv_id = get_Invid();
include 'sqlconnect.php';

?>

<?php
//$Inv_id= null;
//$inv_no = null;
//$Invid= null;
$CUSTOMER_NO = null;
$CUSTOMER_NAME = null;
$CUSTOMER_PHNO = null;
$tax= null;
$total= null;
$discount= null;
if(isset($_POST['search'])) {
$Inv_id = $_POST['Invid'];
$sql = "SELECT * from invoice_main inner join customer ON invoice_main.CUSTOMER_NO= customer.customer_no WHERE INVOICE_NO ='$Inv_id'";
$result = $con->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $CUSTOMER_NO = $row['CUSTOMER_NO'];
    $CUSTOMER_NAME  = $row['name'];
    $CUSTOMER_PHNO = $row['phone_no'];
    $tax  = $row['TAX'];
    $discount  = $row['DISCOUNT'];
    $total  = $row['TOTAL'];
}
}

//}
?>
<!DOCTYPE html>
<html>
<head>
<title>Bill Preview</title>
<link rel="stylesheet" href="app1.css">
</head>
<body>
<div class="billpreview">
<div class="">

<b><u>ABC COMPANY. &nbsp&nbsp PH.NO-1234567890</u></b><br>

<form method="post">
<br>
<label for ="inv_no">Invoice no:</label>
<input type="text" id="Invid" name="Invid" placeholder="inv_no" value=<?="$Inv_id"?>>&nbsp&nbsp&nbsp&nbsp
<button name="search" id="search" >Search </button>
<form>
<br><br>
<label for ="customer_no">CustomerID:</label>
<?php echo $CUSTOMER_NO ?>&nbsp
<label for ="customer_name">Name:</label>
<?php echo $CUSTOMER_NAME ?>&nbsp
<label for ="phone_no">Ph no:</label>
<?php echo $CUSTOMER_PHNO ?>&nbsp
</div>
<br>
<?php

$sql="SELECT * from invoice_item_test inner join item ON invoice_item_test.item_no= item.item_no WHERE INVOICE_NO ='$Inv_id'";
$result = $con->query($sql);
if($result->num_rows > 0){
    
    echo '<table class=table_c>';
    echo "<tr>";
    echo "<th>SN</th>";
    echo "<th>Pdt_no</th>";
    echo "<th>Pdt_Name</th>";
    echo "<th>Rate</th>";
    echo "<th>Qty</th>";
    echo "<th>Amt</th>";
    echo "</tr>";
    
    while ($row=$result->fetch_assoc()) {
        echo "<tr>";
        echo'<td> ' .$row["serial_no"].'</td>';
        echo'<td> ' .$row["item_no"].'</td>';
        echo'<td> ' .$row["item_name"].'</td>';
        echo'<td> ' .$row["rate"].'</td>';
        echo'<td> ' .$row["quantity"].'</td>';
        echo'<td> ' .$row["Amount"].'</td>';
        echo "</tr>";
    }//invoice_no,,item_no,quantity,rate,Amount
    echo "</table>";
   
}
    else{
    echo "NO DATA TO DISPLAY";
}
$con->close();
?>
<br>
<label for ="tax">Tax:</label>
<?php echo $tax ?>&nbsp
<label for ="discount">Discount:</label>
<?php echo $discount ?>&nbsp
<label for ="grandtotal">Total:</label>
<?php echo $total ?>&nbsp
</div>
<div>
<button type="button" onclick="printme()" id="print">Print</button>
</div>
<script>
    function printme(){
       document.getElementById("print").style.display="none";
        window.print();
    }
</script>
</body>
</html>