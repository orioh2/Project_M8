<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My form</title>
	</head>
	<body>
		<h1>M8</h1>
		<form action="<?php echo site_url('form/showform');?>" method="post">
			name : <input type="text" name="name" required><br>
			lname : <input type="text" name="lname" required><br>
			<button type="submit">Save</button>
		</form>
	</body
</html>