
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>
<body>
<a href="logout.php">Log Out</a>
<br>
<h1>This is the index page</h1>
    <br>
    <br>
    Hello, Username.
</body>
</html>

<?php
session_start();

// Include the database connection file
require_once 'connection.php';

// Include the functions file
require_once 'functions.php';


$user_data = check_login($con);//connection abrreviated to con.

?>



