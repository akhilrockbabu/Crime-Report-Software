<?php
session_start();
$username=$_GET["username"];
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
$q1="delete from login where username='$username'";
$q2="delete from user where username='$username'";
if(mysql_query($q1,$con))
echo "user deleted";
else
echo "not updated";
if(mysql_query($q2,$con))
?>
<script>
alert("USER REMOVED SUCCESSFULLY !");
window.location.replace("view_users.php");
</script>
<?php
mysql_close($con);
?>
