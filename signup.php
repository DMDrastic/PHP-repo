



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up </title>
</head>
<body>
    
<style type="text/css">
#text{
height:25px;
border-radius:5px;
padding:4px;
border: solid thin #aaa;
width:100%;
}

#button{
    padding:10px;
    width:100px;
    color:white;
    background-color:lightblue;
    border:none;
}

#box{
    background-color:grey;
    margin:auto;
    width:300px;
    padding:20px;
}

</style>

<div id="box">
<div style="font-size: 20px;margin: 10px;color: white">Sign up</div>
<form action="" method="post">
    <input type="text" name="user_name" id="text"><br><br>
    <input type="password" name="password" id="text"><br><br>

    <input type="submit" value="Signup"id="button"><br><br>

    <a href="login.php">Click to Log in</a><br><br>
</form>

</div>

</body>
</html>

<?php
session_start();

// Include the database connection file
require_once 'connection.php';

// Include the functions file
require_once 'functions.php';


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //Something was posted
   $user_name = $_POST['user_name'];
   $password = $_POST['password'];

   if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

    //save to db
    $user_id = random_num(20);
    $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
    mysqli_query($con,$query);

    header("Location: login.php");
    die;
   }else{
    echo "Please enter some valid information!";
   }

}

?>
