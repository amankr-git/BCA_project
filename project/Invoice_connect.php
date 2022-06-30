<?php
$row=0;
$sno=$_POST["sno"];
$item_no=$_POST["itemno"];
$particular_names=$_POST["ParticularNames"];
$quantity=$_POST["quantity"];
$rate=$_POST["rate"];
$amount=$_POST["amount"];

for($i=0; $i<count($sno); $i++){
    echo "$sno[$i] $item_no[$i]  $particular_names[$i]  $quantity[$i] $rate[$i] $amount[$i]<br>";
}