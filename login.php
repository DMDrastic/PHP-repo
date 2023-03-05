<?php


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
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
<div style="font-size: 20px;margin: 10px;color: white">Login</div>
<form action="" method="post">
    <input type="text" name="user_name" id="text"><br><br>
    <input type="password" name="password" id="text"><br><br>

    <input type="submit" value="Login"id="button"><br><br>

    <a href="signup.php">Click to Sign Up</a><br><br>
</form>

</div>

</body>
</html>