<?php
$string="";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>number to word</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<form action="getwordsumit" method="get">
<input type="number" id="total" name="number()" placeholder="number" >
<input type = "button" value = "convert"  name="word" ><br>
<input type="text" id="total" name="text" placeholder="text" value = "<?= $string?>" >
</form>
</body>




 
