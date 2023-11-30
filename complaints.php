<html>
<head>
<style>
.button
{
display: inline-block;
background-color: coral;
font-size: 20px;
padding: 26px 13px;
border-radius: 10px;
border: 3px solid black;
color: white;
transition-duration: 0.4s;
width: 10%;
height: 7%;
cursor: pointer;
}
.button:hover {
background-color: limegreen;
color: black;
}
.button span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.button span:after {
content: '\00bb';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.button:hover span {
padding-right: 25px;
}

.button:hover span:after {
opacity: 1;
right: 0;
}
table{
    width:90%;
}
tr:nth-child(odd) {
    background-color:  #66b3ff;
}
tr:nth-child(even) {
    background-color: #0073e6;
}
th {
    text-align: center;
  color: white;
}
tr:hover {
    background-color: coral;
}
td{
    text-align: center;
}
tr{
    height: 80px;
    text-align: center;
}
label{
display:inline-block;
width:150px;
}
label{
display:inline-block;
width:150px;
}
</style>
</head>
<body bgcolor="white" text="red">
<h1><center>ALL COMPLAINTS</center></h1>
<center>
<table border="1">
<tr>
<th>COMPLAINT ID</th>
<th>USERNAME</th>
<th>COMPLAINT TITLE</th>
<th>NAME OF SUSPECT</th>
<th>DATE</th>
<th>CRIME LOCATION</th>
<th>COMPLAINT DETAILS</th>
<th>VICTIM DETAILS</th>
<th colspan="2">ACTION</th>
</tr>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
 echo"couldn't connect to server".mysql_error($con);
$db=mysql_select_db("project",$con);
if(!$db)
echo"cannot connect to database".mysql_error($con);
$q="select * from crime where status='not yet approved'";
$r=mysql_query($q,$con);
while($row=mysql_fetch_array($r))
{
$complaint_id=$row['complaint_id'];
$username=$row['username'];
$complaint_title=$row['complaint_title'];
$name_of_suspect=$row['name_of_suspect'];
$date_of_crime=$row['date_of_crime'];
$crime_location=$row['crime_location'];
$complaint_details=$row['complaint_details'];
$victim_details=$row['victim_details'];
?>
<tr>
<th><?php echo $complaint_id;?></th>
<th><?php echo $username;?></th>
<th><?php echo $complaint_title;?></th>
<th><?php echo $name_of_suspect;?></th>
<th><?php echo $date_of_crime;?></th>
<th><?php echo $crime_location;?></th>
<th><?php echo $complaint_details;?></th>
<th><?php echo $victim_details;?></th>
<th><a href="accept_complaint.php?complaint_id=<?php echo $complaint_id;?>">ACCEPT</a></th>
<th><a href="reject_complaint.php?complaint_id=<?php echo $complaint_id;?>">REJECT</a></th>
</tr>
<?php
}
mysql_close($con);
?>
</table><br>
<form action="admin.php" method="POST">
<button id="myButton1" class="button"><span> << BACK </span></button>
<script type="text/javascript">
document.getElementById("myButton1").onclick = function () {
location.href = "admin.php";
};
</script>
</form>
</center>
</body>
</html>