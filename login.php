<html>
<head>
   <style>
    .error{
background-color: red;
color: yellow;
font-style: italic;
}
      body{
            background-image: url("images/gunbg.png");
            background-size: cover;
        }
    </style>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet"  href="css/login.css">
</head>
<body>
<center> 
<?php
 $usererr=$passerr="";
 $username=$password="";
 if($_POST) 
 { 
if(empty($_POST["username"]))
$usererr="username is required";
else 
$username=$_POST["username"];
if(empty($_POST["password"]))
$passerr="password is required";
else 
$password=$_POST["password"];
}
?>
    <main>
        <div class="row">
            <div class="colm-logo">
                <img src="images/logo2.png" height="150" width="600" alt="Logo">
                <h3>Register your crimes instantly.</h3>
            </div>
            <div class="colm-form">
                <div class="form-container">
<form method="POST">
<input type="text" name="username" placeholder="Enter your username">
<span class="error">
<?php 
echo $usererr;
?>
</span>
<input type="password" name="password" placeholder="Enter your password">
<span class="error">
<?php 
echo $passerr;
?>
</span> 
<button class="btn-login">Login</button>
<button type="reset" class="btn-login">Clear</button>
</form>
<form action="registration.php">
<button class="btn-new">Create new Account</button>
</form>
</div></div></div></main>
<?php
session_start();
$con=mysql_connect("localhost","root",""); 
if(!$con) 
{ 
echo "couldn't connect to server".mysql_error($con);
}
$db=mysql_select_db("project",$con);
if(!$db)
{
echo "cannot connect to database".mysql_error($con);
}
if($_POST)
{
$q="select * from login where username='$username' and password='$password'"; 
$result=mysql_query($q,$con); 
if(mysql_num_rows($result)>0)
{ 
$_SESSION["username"]=$username;
$row=mysql_fetch_array($result);
$r=$row['role'];
if($r=='admin')
header('location:admin.php');
else if($r=='user')
header('location:user.php');
else 
echo "invalid username or password";
}
}
mysql_close($con); 
?>
</body>
</html>