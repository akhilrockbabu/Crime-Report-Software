<html>
<head>
<style>
label{
display:inline-block;
width:150px;
}
</style>
</head>
<body bgcolor="white" text="red"><center>
<br><br><br>
<?php
$username=$_POST["username"];
$password=$_POST["password"];
$fullname=$_POST["fullname"];
$emailid=$_POST["emailid"];
$aadharno=$_POST["aadharno"];
echo $username;
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
$q1="update user set password='$password',fullname='$fullname',emailid='$emailid',aadharno='$aadharno' where username='$username'";
$q2="update login set password='$password' where username='$username'";
?><h2><?php
if(mysql_query($q1,$con))
echo " >>>> your password maybe have been changed ";
else
echo "not updated";
if(mysql_query($q2,$con))
?>
<script>
alert("PLEASE LOGIN AGAIN");
window.location.replace("login.php");
</script>
<?php
mysql_close($con);
?></h2>
</center>
</body>
</html>