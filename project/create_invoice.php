<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

=======
<?php
include 'sessionphp.php';
include 'searchcidbyname.php';
include 'SearchByName.php';
include 'sqlconnect.php';
include 'specifyinvrows.php';
//include 'calculations.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Create invoice</title>
<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
>>>>>>> 957e577f8371df43000cace160bea2601303bc57
<body>
<header><h2>Create invoice</h2></header>
<hr>
<div class=flexbox>
<aside>
<nav>
<ul>
<li><a href="Add_customer.php"><i class="fa fa-address-book"></i> Add customer </a></li>
<li><a href="customer_list.php"><i class="fa fa-list-ul"></i> Customer List </a></li>
<li><a href="Add_item.php"><i class="fa fa-plus"></i> Add Item</a></li>
<li><a href="item_list.php"><i class="fa fa-th-list"></i> Item List </a></li>
<li><a href="Add_vendor.php"><i class="fa fa-address-book"></i> Add Vendor</a></li>
<li><a href="vendor_list.php"><i class="fa fa-address-book"></i>Vendor list</a></li>
<li><a href="create_invoice.php"><i class="fa fa-file"></i>Create Invoice</a></li>
<li><i class="fa fa-archive"></i> Stock</li>
<li><i class="fa fa-bar-chart"></i> Report</li>
</ul>
</nav>
</aside>
<<<<<<< HEAD
<div> 
<form action="" method="">
<div class="">
<label for ="customer_name">Customer Name:</label>
<input type="text" id="customer_name" name="customer_name" placeholder="Customer name" >
<label for ="phone_no">Phone no:</label>
<input type="number" id="phone_number" name="phone_no" placeholder="Phone no">
<label for ="address">Address:</label>
<input type="text" id="address1" name="address1" placeholder="Address" >
<hr>
</div>
<!---<div class="invoice-item-details">-->
<div class="table2">
<table class="item-details-table" id="bill-particulars">
<button type="button" onclick="appendRow()">Add Row</button>
<tr>
    <th>Serial no.</th>
    <th>Particulars</th>
    <th>Quantity</th>
    <th>Rate</th>
    <th>Amount</th>
 </tr>
    <!--<tr>
        <td>
                               
        </td>
    </tr>-->
                       
    <!-- <tr>
        <td></td>
   </tr> -->

 </table>

</div>
</form>
<hr>
<label for ="tax">Tax</label>
<input type="text" id="tax" name="tax" placeholder="tax" >
<label for ="discount">Discount:</label>
<input type="text" id="discount" name="discount" placeholder="Discount" >
<label for ="total">Total:</label>
<input type="text" id="total" name="total" placeholder="Total" >
<button>Submit</button>

<div>
    <script>
        appendRow();
        appendRow();
        function appendRow() {

            let tableRow = document.createElement("tr");   
            document.getElementById("bill-particulars").appendChild(tableRow); 
            
            let tableDataSno = document.createElement("td");
            tableRow.appendChild(tableDataSno);
            let inputSno = document.createElement("input");
            tableDataSno.appendChild(inputSno);

            let tableDataPart = document.createElement("td");
            tableRow.appendChild(tableDataPart);
            let inputPart = document.createElement("input");
            tableDataPart.appendChild(inputPart);

            let tableDataQuantity= document.createElement("td");
            tableRow.appendChild(tableDataQuantity);
            let inputQuantity = document.createElement("input");
            tableDataQuantity.appendChild(inputQuantity);
            
        

            let tableDataRate = document.createElement("td");
            tableRow.appendChild(tableDataRate);
            let inputRate = document.createElement("input");
            tableDataRate.appendChild(inputRate);

            let tableDataAmount = document.createElement("td");
            tableRow.appendChild(tableDataAmount);
            let inputAmount = document.createElement("input");
            tableDataAmount.appendChild(inputAmount);
        }

    </script>
</body>

=======
<div>
<div style="width: 100%;">
<div style="width: 50%; height: 75px; float: left; background: #1DCDFE;"> 
<label for ="company name">Bill From:</label>
<input type="text" id="company name" name="company name" placeholder="Company name" ><br>
<label for ="phone_no">Phone no :</label>
<input type="number" id="phone_no" name="phone_no" placeholder="Phone no">
<label for ="address">Address  :</label>
<input type="text" id="address1" name="address1" placeholder="Address" ><br>
</div>
<div style="margin-left: 50%; height: 75px; background: #34F5C5; text-align: center;">
<form method="POST" >
<label for ="rowsr">Rows required:</label>
<input type="number" id="rowsr" name="rowsr" placeholder="">
<button name="searchnorow">Search</button>
</form>
</div>
<!--<label for ="date">Date:</label>
<input type="text" id="date" name="date">-->
<span id='datenew1'></span>
<script>
    var d=  Date();
    document.getElementById('datenew1').innerHTML = d;
   
</script>
<!--<label for ="Time">Time:</label>
<input type="TIME" id="Time" name="Time" placeholder="Time">-->
<hr>
<b>Customer details |</b>
<label for ="customer_name">Customer Name:</label>
<input type="text" id="customer_name" name="customer_name" placeholder="Customer name" >
<label for ="phone_no">Phone number:</label>
<input type="number" id="phone_no" name="phone_no" placeholder="Phone no">
<label for ="address">Address:</label>
<input type="text" id="address1" name="address1" placeholder="Address" ><br>
<!--<div>-->
<hr>
<b>Dropdown to View |  Customer Details</b>
<?php
$resultSet=$con->query("SELECT name,customer_no FROM customer");  
?>
<select name="customer_no">
<?php
while ($rows =$resultSet->fetch_assoc())
{
$customer_no = $rows['customer_no'];
echo"<option value='customer_no'>CNo: $customer_no</option>";
 $name = $rows['name'];
 echo"<option value='name'>Name: $name</option>";
 //$last_name = $rows['last_name'];
 //echo"<option value='last_name'>LName: $last_name</option>";

}
?>
</select>
<!--</div>-->
&nbsp
<!--<div>-->
<b>Item name & number</b>
<?php
//$mysqli = NEW mysqli('localhost','p_user','1234','project');
$resultSet=$con->query("SELECT item_no,item_name FROM item");  
?>
<select name="item_name">
<?php
while ($rows =$resultSet->fetch_assoc())
{
 $item_no = $rows['item_no'];
 echo"<option value='$item_no'>No: $item_no</option>";
 $item_name = $rows['item_name'];
 echo"<option value='$item_name'>Name: $item_name</option>";
}
?>
</select>
<!--</div>-->
<!--</div>-->
<hr>
<div class="">
<b>Provide the Item details </b><br>
<form >
    <?php
    //echo "$rowsr";
    for($i=1;$i<=$rowsr;$i++){
        ?>
    <label for ="serialno">SL.No <?=$i?>:</label>&nbsp
    <input type="text" id="item_no<?=$i?>" name="item_no<?=$i?>" placeholder="Item No" >
    <!--<label for ="item_name<?=$i?>">Item name:</label>-->
    <input type="text" id="item_name<?=$i?>" name="item_name<?=$i?>" placeholder="Item Name" >
    <!--<label for ="rate<?=$i?>">Rate :</label>-->
    <input type="number" id="rate<?=$i?>" name="rate<?=$i?>"  placeholder="Rate">
    <!--<label for ="tax<?=$i?>">Tax:</label>-->
    <input type="text" id="Quantity<?=$i?>" name="Quantity<?=$i?>" placeholder="Quantity" >
    <!--<select name = "tax<?=$i?>" class="tax<?=$i?>"  placeholder="Tax">
            <option value = "0" selected>GST Free</option>
            <option value = "5" >5% GST</option>
            <option value = "12" >12% GST</option>
            <option value = "18" >18% GST</option>
            <option value = "28" >28% GST</option>
    </select>-->
    <input type="text" id="Amount<?=$i?>" name="Amount<?=$i?>" placeholder="Amount"  >
    <br>
    <?php
    }
    ?>
    <hr>
    <div class="gtotal">
    <label for ="company name">Tax :&nbsp</label>
    <input style="margin-left: 64%;" type="text" id="tax" name="tax" placeholder="tax" ><br>
    <label for ="company name">Total:</label>
    <input style="margin-left: 64%;" type="text" id="total" name="total" placeholder="total" >
    <!--<input type = "button" value = "Add" onclick="add()">--><br>
    <?php
    include 'calculations.php'?>
    <label for ="company name">Discount</label>
    <input style="margin-left: 62%;" type="text" id="discount" name="discount" placeholder="Discount" ><br>
    <label for ="company name">GTotal:</label>
    <input style="margin-left: 63%;" type="text" id="gtotal" name="gtotal" placeholder="Grand Total" >
    <input type = "button" value = "calculate" onclick="add()">
    <br>
    <div>
    <button class="Submit"> Submit</button>
    <button class="button2" type="reset">Reset</button>
</form>

</div>

<br>
<br>
</div>
<!--<footer class="footerlist"><h2>&copy; 2021-All Rights Reserved.</h2></footer>-->
</body>
>>>>>>> 957e577f8371df43000cace160bea2601303bc57
</html>