<?php

//Make short Variable names
$fname = $_REQUEST['first_name_field'];
$lname = $_REQUEST['last_name_field'];
$phone = $_REQUEST['phone_field'];
$email = $_REQUEST['email_field'];
$hidden = $_REQUEST['hidden_field'];
$comments = $_REQUEST['comments_field'];
$gender = $_REQUEST['gender_field'];
$available = $_REQUEST['available_field'];
$age = $_REQUEST['age_field'];

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <title>Lab Form Processing Script</title>
		<style>
		.box {
		  border: 1px solid #444;
		  background-color: #ccc;
		  margin: 20px 20px;
		  padding: 5px 20px;
		}
		</style>
	</head>
	<body>
		<div style="text-align:center;">
			<h2>ITMD-361 Lab 5 Lab Form Processing Script</h2>
			<p>This page will display the results of the form that was submitted to it.</p>
		</div>
		<svg width="100%" height="1">
			<line x1="0" y1="0" x2="100%" y2="0" stroke="#ccc" stroke-width="1"></line>
		</svg>
		<h1>Thank you for your ITMD-361 form submission, <?php echo htmlentities($fname) ?>!</h1>
		<div class="box">
			<h2>This section contains the information provided in the my info section:</h2>
			<p><strong>First Name:</strong> <?php echo htmlentities($fname) ?></p>
			<p><strong>Last Name:</strong> <?php echo htmlentities($lname) ?></p>
			<p><strong>Phone Number:</strong> <?php echo htmlentities($phone) ?></p>
			<p><strong>Email Address:</strong> <?php echo htmlentities($email) ?></p>
			<p><strong>Gender:</strong> <?php echo htmlentities($gender) ?></p>
			<p><strong>Age:</strong> <?php echo htmlentities($age) ?></p>
		</div>
		<div class="box">
			<h2>This section contains the information provided in the availibility section:</h2>
			<h3>Days Selected as Available:</h3>
			<?php
				if (is_array($available)){
					foreach ($available as $ckvalue) {
						echo ('<p>' . htmlentities($ckvalue) . '</p>');
					}
				} else {
					echo ('<p>' . htmlentities($available) . '</p>');
				}
			?>
			<h3>Comments:</h3>
			<p><?php echo nl2br(htmlentities($comments)) ?></p>
		</div>
		<div class="box">
			<h2>This section contains the hidden information:</h2>
			<p><strong>HTML Form created by:</strong> <?php echo htmlentities($hidden) ?></p>
		</div>
	</body>
</html>