<?php
session_start();
?>

<?php
$user_id = $_POST['user_id'];
$password = $_POST['password'];

include 'sqlconnect.php';

$sql = "SELECT * FROM user WHERE username='$user_id' AND password='$password'";

$result = $con->query($sql);

if($result->num_rows>0) {
    $_SESSION['user_name']=$user_id;
    echo "<script>window.location.href='Add_customer.php'</script>";
} else {
    echo "Login failed!";
}

$con->close();