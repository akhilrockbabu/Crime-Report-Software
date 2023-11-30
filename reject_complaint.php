<?php
session_start();
$complaint_id=$_GET["complaint_id"];
$con=mysql_connect("localhost","root","");
if(!$con)
 echo "couldn't connect to server".mysql_error($con);
$db=mysql_select_db("project",$con);
if(!$db)
echo "cannot connect to database".mysql_error($con);
$q="update crime set status='rejected' where complaint_id=$complaint_id";
if(mysql_query($q,$con))
?>
<script>
alert("COMPLAINT with complaint id :<?php echo $complaint_id; ?> is REJECTED");
window.location.replace("complaints.php");
</script>
<?php
mysql_close($con);
?>