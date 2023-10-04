<html>
<body>
<?php
$username=$_POST["username"];
$feedback=$_POST["feedback"];
$rating=$_POST["rating"];
$date=$_POST["date"];
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
$query="insert into feedback(username,feedback,rating,date) values('$username','$feedback','$rating','$date')";
if(mysql_query($query,$con))
{
?>
<script>
alert("Thankyou for your Valuable feedback !");
window.location.replace("user.php");
</script>
<?php
}
else
{
    echo "registration failed";
}
mysql_close($con);
?>
</center>
</body>
</html>


