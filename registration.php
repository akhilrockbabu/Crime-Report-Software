<!DOCTYPE html>
<html>
<head>
<style>
.error{
background-color: red;
color: yellow;
font-style: italic;
}
</style>
<meta charset="utf-8">
<title>HTML CSS Register Form</title>
<link rel="stylesheet" href="css/registration.css">
</head>
<body>
<?php
$usererr=$passerr=$nameerr=$emailerr=$aadharerr="";
$username=$password=$fullname=$emailid=$aadharno="";
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
if(empty($_POST["fullname"]))
$nameerr="name is required";
else
$fullname=$_POST["fullname"];
if(empty($_POST["aadharno"]))
$aadharerr="aadhar number is required";
elseif(!is_numeric($_POST["aadharno"]))
$aadharerr="must be an integer";
elseif(strlen($_POST["aadharno"])<12||strlen($_POST["aadharno"])>12)
$aadharerr="aadhar number should be 12 digits";
else
$aadharno=$_POST["aadharno"];
if(empty($_POST["emailid"]))
$emailerr="emailid is required";
else
{
$emailid=$_POST["emailid"];
if(!filter_var($emailid,FILTER_VALIDATE_EMAIL))
echo "email id is invalid";
}
}
?>
<form method="POST" class="signup-form">
<!-- form header -->
<div class="form-header">
<h1>Create Account</h1>
</div>
<!-- form body -->
<div class="form-body">

<!-- Firstname and Lastname -->
<div class="horizontal-group">
<div class="form-group left">
<label for="fullname" class="label-title">Full name *</label>
<input type="text" name="fullname" class="form-input" placeholder="enter your full name"/>
<span class="error">
<?php
echo $nameerr;
?>
</span>
</div>
<div class="form-group right">
<label for="username" class="label-title">username *</label>
<input type="text" name="username" class="form-input" placeholder="enter your username"/>
<span class="error">
<?php
echo $usererr;
?>
</span>
</div>
</div>

<!-- Email -->
<div class="form-group">
<label for="emailid" class="label-title">Email id *</label>
<input type="emailid" name="emailid" class="form-input" placeholder="enter your email">
<span class="error">
<?php
echo $emailerr;
?>
</span>
</div>

<!-- Passwrod and confirm password -->
<div class="horizontal-group">
<label for="password" class="label-title">Password *</label>
<input type="password" name="password" class="form-input" placeholder="enter your password">
<span class="error">
<?php
echo $passerr;
?>
</span>
</div>
<!-- Email -->
<div class="form-group"><br>
<label for="aadharno" class="label-title">aadhar no*</label>
<input type="text" name="aadharno" class="form-input" placeholder="enter your aadhar no">
<span class="error">
<?php
echo $aadharerr;
?>
</span>
</div>
<!-- form-footer -->
<div class="form-footer">
<button type="reset" class="btn">CLEAR</button><br><br>
<button type="submit" class="btn">CREATE</button>
<span>* required</span>
</div>
</form><br>
<form action="login.php" method="POST">
<button type="submit" class="btn">EXISTING USER ?</button>
</form>	
<?php
$role="user";
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo"couldn't connect to server".mysql_error($con);
}  
$db=mysql_select_db("project",$con);
if(!$db)
{
echo"cannot connect to database".mysql_error($con);
}
if($_POST)
{
if($nameerr==""&&$emailerr==""&&$aadharerr==""&&$usererr==""&&$passerr=="")
{
$query="insert into user values('$fullname','$username','$password','$emailid','$aadharno')";
if(mysql_query($query,$con))
?>
<script>
alert("you are registered succesfully");
window.location.replace("login.php");
</script>
<?php
$q="insert into login values('$username','$password','$role')";
mysql_query($q,$con);
}
else
{
echo "registeration failed";
}
}
mysql_close($con);
?>
</body>
</html>