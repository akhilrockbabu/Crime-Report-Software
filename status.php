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
    width:60%;
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
</style>
</head>
<body bgcolor="white" text="red">
<h1><center>
<?php
session_start();
?>
</center></h1><br><br>
<h1><center><b>YOUR COMPLAINT STATUS</b></center></h1><br><br>
<form method="POST"> 
<center>
<table border="1">
<tr>
<th>COMPLAINT ID</th>
<th>COMPLAINT TITLE</th>
<th>NAME OF SUSPECT</th>
<th>STATUS</th>
</tr>
<?php
$username=$_SESSION["username"];
$con=mysql_connect("localhost","root","");
if(!$con)
 echo"couldn't connect to server".mysql_error($con);
$db=mysql_select_db("project",$con);
if(!$db)
echo"cannot connect to database".mysql_error($con);
$q="select * from crime where username='$username'";
$r=mysql_query($q,$con);
while($row=mysql_fetch_array($r))
{
$complaint_id=$row['complaint_id'];
$complaint_title=$row['complaint_title'];
$name_of_suspect=$row['name_of_suspect'];
$status=$row['status'];
?>
<tr>
<th><?php echo $complaint_id;?></th>
<th><?php echo $complaint_title;?></th>
<th><?php echo $name_of_suspect;?></th>
<th><?php echo $status;?></th>
</tr>
<?php
}
mysql_close($con);
?>
</form>
</table><br>
<form action="user.php" method="POST">
<button id="myButton1" class="button"><span> << BACK </span></button>
<script type="text/javascript">
document.getElementById("myButton1").onclick = function () {
location.href = "user.php";
};
</script>
</form>
</center>
</body>
</html>