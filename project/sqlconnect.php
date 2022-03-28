<?php
$con = new mysqli("localhost", 'p_user', '1234','project');
if($con->connect_error){
    die($con->connect_error);
} /*else {
    echo "Connection sucessful!";
}*/
