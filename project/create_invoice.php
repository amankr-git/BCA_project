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

</html>