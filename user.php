<html>
<head>
<style>
body{
background-image: url("images/crime2.png");
background-size: cover;
}
label{
display:inline-block;
width:150px;
}
.button
{
display: inline-block;
background-color: #ff3333;
font-size: 20px;
padding: 26px 13px;
border-radius: 35px;
border: 3px solid black;
color: #ffff00;
transition-duration: 0.4s;
width: 40%;
cursor: pointer;
}
.button:hover {
background-color: white;
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
</style>
</head>
<body>
<h1>
<?php
session_start();
echo "WELCOME ".$_SESSION["username"];
echo"!"
?>
</h1><center><br><br><br><br><br><br><br><br><br>
<button id="myButton1" class="button"><span>REGISTER CRIME</span></button>
<script type="text/javascript">
document.getElementById("myButton1").onclick = function () {
location.href = "register_crime.php";
};
</script><br><br>
<button id="myButton2" class="button"><span>UPDATE YOUR DETAILS</span></button>
<script type="text/javascript">
document.getElementById("myButton2").onclick = function () {
location.href = "user_update_form.php";
};
</script>
<br><br>
<button id="myButton3" class="button"><span>CHECK YOUR COMPLAINT STATUS</span></button>
<script type="text/javascript">
document.getElementById("myButton3").onclick = function () {
location.href = "status.php";
};
</script>
<br><br>
<button id="myButton4" class="button"><span>LOGOUT</span></button>
<script type="text/javascript">
document.getElementById("myButton4").onclick = function () {
location.href = "login.php";
};
</script>
<button id="myButton5" class="button"><span> Write About Us </span></button>
<script type="text/javascript">
document.getElementById("myButton5").onclick = function () {
location.href = "feedback.php";
};
</script><br><br>
</center>
</body>
</html>