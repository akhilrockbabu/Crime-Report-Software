<html>
<body>
<?php
$username=$_POST["username"];
$complaint_title=$_POST["complaint_title"];
$name_of_suspect=$_POST["name_of_suspect"];
$date_of_crime=$_POST["date_of_crime"];
$crime_location=$_POST["crime_location"];
$complaint_details=$_POST["complaint_details"];
$victim_details=$_POST["victim_details"];
$status="not yet approved";
echo $username,$complaint_title,$name_of_suspect,$date_of_crime;
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
$query="insert into crime(username,complaint_title,name_of_suspect,date_of_crime,crime_location,complaint_details,victim_details,status) values('$username','$complaint_title','$name_of_suspect','$date_of_crime','$crime_location','$complaint_details','$victim_details','$status')";
if(mysql_query($query,$con))
{
?>
<script>
alert("crime registered succesfully");
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


