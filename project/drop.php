<?php
$mysqli = NEW mysqli('localhost','p_user','1234','project');
$resultSet=$mysqli->query("SELECT item_name FROM item");  
?>
<select name="item_name">
<?php
while ($rows =$resultSet->fetch_assoc())
{
 $item_name = $rows['item_name'];
 echo"<option value='$item_name'>$item_name</option>";
}
?>
</select>
