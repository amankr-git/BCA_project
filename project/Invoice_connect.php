<?php
$con = new mysqli("localhost", 'p_user', '1234','project');
if($con->connect_error){
    die($con->connect_error);
}

$row=0;
$invoice_no=$_POST["inv_no"];
$sno=$_POST["sno"];
$item_no=$_POST["itemno"];
$particular_names=$_POST["ParticularNames"];
$quantity=$_POST["quantity"];
$rate=$_POST["rate"];
$amount=$_POST["amount"];

//$invoice_date='2022-02-11';
$cust_no=$_POST["customer_no"];
//$cust_name=$_POST["customer_name"];
//$cust_phno=$_POST["phone_no"];
//CUSTOMER_NAME,CUSTOMER_PHNO,CUSTOMER_ADDRESS,'$cust_name','$cust_phno','$cust_address'
//$cust_address=$_POST["address"];
$tax=$_POST["tax"];
$discount=$_POST["discount"];
$total=$_POST["total"];

for($i=0; $i<count($sno); $i++){
    echo "$invoice_no $sno[$i] $item_no[$i] $particular_names[$i] $quantity[$i] $rate[$i] $amount[$i] <br>";
}

$sql2 = "INSERT INTO INVOICE_MAIN(INVOICE_NO,INVOICE_DATE,CUSTOMER_NO,TAX,DISCOUNT,TOTAL)VALUES('$invoice_no',CURDATE(),'$cust_no','$tax','$discount','$total')";
 
if($con->query($sql2)== true)
    {
        echo "Your data is successfully submitted in 'INVOICE_MAIN' TABLE.<br>";

        
        for($i=0; $i<count($sno); $i++){
            $sql = "INSERT INTO invoice_item_test(invoice_no,serial_no,item_no,quantity,rate,Amount)VALUES('$invoice_no','$sno[$i]','$item_no[$i]','$quantity[$i]','$rate[$i]','$amount[$i]')";
            }
            
            if($con->query($sql)== true)
            {
                echo "Your data is successfully submitted in 'invoice_item_test' TABLE.";
            }
            //else{
               // echo $con->error;
            //}
    }
    else{
        echo $con->error;
    }

?>