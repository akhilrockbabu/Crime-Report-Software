<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Register crime</title>
<link rel="stylesheet" href="css/registration.css">
</head>
<body>
<?php
session_start();
?>
<form method="POST" class="signup-form" action="insert_crime.php">
<div class="form-header">
<h1>REGISTER CRIME</h1>
</div>
<div class="form-body">
<div class="form-group">
<label for="username" class="label-title">Username *</label>
<input type="text" name="username" class="form-input" value="<?php echo $_SESSION["username"]?>" required readonly/>
</div>
<div class="form-group">
<label for="complaint_title" class="label-title">Complaint Title *</label>
<input type="text" name="complaint_title" class="form-input" placeholder="enter the category complaint belongs to" required/>
</div>
<div class="form-group">
<label for="name_of_suspect" class="label-title">Name of Suspect</label>
<input type="text" name="name_of_suspect" class="form-input" placeholder="enter suspect name if known">
</div>
<div class="form-group">
<label for="date_of_crime" class="label-title">Date of Crime *</label>
<input type="date" name="date_of_crime" class="form-input" value="<?php echo date('Y-m-d'); ?>" required>
</div>
<div class="form-group"><br>
<label for="crime_location" class="label-title">Crime Location *</label>
<textarea rows="5" columns="20" name="crime_location" required placeholder="enter the location where crime occurs"></textarea>
</div>
<div class="form-group"><br>
<label for="complaint_details" class="label-title">Complaint Details *</label>
<textarea rows="5" columns="20" name="complaint_details" required placeholder="elaborate the crime"></textarea>
</div>
<div class="form-group"><br>
<label for="victim_details" class="label-title">Victim Details *</label>
<textarea rows="5" column="30" name="victim_details" required placeholder="enter the victim details"></textarea>
</div>
<div class="form-footer">
<span>* required</span>
<button type="reset" class="btn">CLEAR</button>
<button type="submit" class="btn">REGISTER</button>
</div>
</form><br>
<form action="user.php" method="POST">
<button type="submit" class="btn"><< BACK</button>
</form>
</div></form>
</body>
</html>