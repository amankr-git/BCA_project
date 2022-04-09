<div class="tablel">
<?php
$con = new mysqli("localhost", 'p_user', '1234','project');
if($con->connect_error){
    die($con->connect_error);
} /*else {
    echo "Connection sucessful!";
} */

$sql="SELECT * FROM customer";
$result = $con->query($sql);
if($result->num_rows > 0){
    
    echo '<table class=table_c>';
    echo "<tr>";
    echo "<th>Customer no</th>";
    echo "<th>First name</th>";
    echo "<th>Last name</th>";
    echo "<th>Phone no</th>";
    echo "<th>Address</th>";
    echo "</tr>";
    
    while ($row=$result->fetch_assoc()) {
        echo "<tr>";
        echo'<td> ' .$row["customer_no"].'</td>';
        echo'<td> ' .$row["first_name"].'</td>';
        echo'<td> ' .$row["last_name"].'</td>';
        echo'<td> ' .$row["phone_no"].'</td>';
        echo'<td> ' .$row["address"].'</td>';
        echo "</tr>";
    }
    echo "</table>";
   
}
    else{
    echo "NO DATA TO DISPLAY";
}
$con->close();
?>
</div>
<!--<h4 class="">&nbsp&nbsp To edit data &nbsp&nbsp <a href="edit_customer.php">click here</a></h4>-->

<footer class="footerlist"><h2>&copy; 2021-All Rights Reserved.</h2></footer>
</body>
</html>