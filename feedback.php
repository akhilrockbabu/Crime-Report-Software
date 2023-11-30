<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>feebback</title>
<link rel="stylesheet" href="css/registration.css">
</head>
<body>
<?php
session_start();
?>
<form method="POST" class="signup-form" action="feedback_insertion.php">
<div class="form-header">
<h1>Your Feedbacks are Valuable !</h1>
</div>
<div class="form-body">
<div class="form-group">
<label for="username" class="label-title">Username *</label>
<input type="text" name="username" class="form-input" value="<?php echo $_SESSION["username"]?>" required readonly/>
</div>
<div class="form-group"><br>
<label for="feedback" class="label-title">Write your Review</label>
<textarea rows="5" columns="20" name="feedback" required placeholder="Write about our system"></textarea>
</div>
<div class="form-group"><br>
<label for="rating" class="label-title">Rating *<br>how likely you will reccomend this system to friends and family<br>0 - not likely<br>5 - most likely<br></label>
<select name="rating" required>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
</select>
</div>
<div class="form-group">
<label for="date" class="label-title">Date *</label>
<input type="date" name="date" class="form-input" value="<?php echo date('Y-m-d'); ?>" readonly>
</div>
<div class="form-footer">
<span>* required</span>
<button type="reset" class="btn">CLEAR</button>
<button type="submit" class="btn">SUBMIT</button>
</div>
</form><br>
<form action="user.php" method="POST">
<button type="submit" class="btn"><< BACK</button>
</form>
</div></form>
</body>
</html>