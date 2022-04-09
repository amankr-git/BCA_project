<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Yourself</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
<header class="loginheader"><h2>Login details</h2></header>
    <div>
        <form class="form" action="LoginConnect.php" method="POST">
            <p><b>Please provide the required details</b></p>
            <div>
                <label for="user_id">User Id</label><br>
                <input type="text" name="user_id" id="">
            </div>
            <div>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="">
            </div>
            <div>
            <br> <button>Login</button>
            </div>
        </form>
       
       
    </div>
    <footer class="footerlist"><h2> &copy; 2021 Copyright - All Rights Reserved</h2></footer>
</body>
</html>