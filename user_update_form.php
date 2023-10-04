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
</style>
<body text="red">
<center><h1>EDIT YOUR DETAILS</h1></center><br>
<form method="POST" action="user_update.php"><?php
session_start();
$username=$_SESSION["username"];
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
$q="select * from user where username='$username'";
$r=mysql_query($q,$con);
while($row=mysql_fetch_array($r))
{
?>
<center>
    <table align="middle" border="1">
        <tr>
            <th>USERNAME (cannot change) </th>
            <th><input type="text" name="username" value="<?php echo $row['username'];?>" width="50" height="70" readonly></th>
        </tr>
        <tr>
            <th>FULLNAME</th>
            <th><input type="text" name="fullname" value="<?php echo $row['fullname'];?>"></th>
        </tr>
        <tr>
            <th>PASSWORD</th>
            <th><input type="text" name="password" value="<?php echo $row['password'];?>"></th>
        </tr>
        <tr>
            <th>EMAILID</th>
            <th><input type="emailid" name="emailid" value="<?php echo $row['emailid'];?>"></th>
        </tr>
        <tr>
            <th>AADHAR NO:</th>
            <th><input type="text" name="aadharno" value="<?php echo $row['aadharno'];?>"></th>
        </tr>
<?php
}
mysql_close($con);
?>
    </table></center><br><br>
<center>
<button id="myButton2" class="button"><span>UPDATE</span></button>
<script type="text/javascript">
document.getElementById("myButton2").onclick = function () {
location.href = "user_update.php";
};
</script>
</form><br><br>
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