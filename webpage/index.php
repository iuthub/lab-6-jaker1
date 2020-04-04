<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>
		<p style="padding-left: 50px">This form validates user input and then displays "Thank You" page.</p>
		<hr/>
		
		<h2>Please, fill below fields correctly</h2>
	
		<?php 


		if ($_POST) {

			$name = $_POST[name];
			$email = $_POST[email];
			$username = $_POST[username];
			$password = $_POST[password];
			$cpassword = $_POST[cpassword];
			$dob = $_POST[dob];
			$gender = $_POST[gender];
			$mstatus = $_POST[mstatus];
			$adress = $_POST[adress];
			$city = $_POST[city];
			$postcode = $_POST[postcode];
			$hphone = $_POST[hphone];
			$mphone = $_POST[mphone];
			$ccnumber = $_POST[ccnumber];
			$ccexpiry = $_POST[ccexpiry];
			$website = $_POST[website];
			$gpa = $_POST[gpa];

			if (empty($name) or !preg_match("/^[^0-9]{2,}$/g", $name)) {
				$error = true;
			}
			if (empty($email) or !preg_match("/^[a-z0-9]+[_a-z0-9\.-]*[a-z0-9]+@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/ig", $email)) {
				$error = true;
			}
			if (empty($username) or !preg_match("/^.{5,}$/g", $username)) {
				$error = true;
			}
			if (empty($password) or !preg_match("/^\w{6,10}$/g", $password) or $password!=$cpassword) {
				$error = true;
			}
			if (empty($dob) or !preg_match("/^(?:(?:19[0-9]{2}|200[0-9]|2010)([-/.]?)(?:(?:0?[1-9]|1[0-2])\1(?:0?[1-9]|1[0-9]|2[0-8])|(?:0?[13-9]|1[0-2])\1(?:29|30)|(?:0?[13578]|1[02])\1(?:31))|(?:19(?:0[48]|[2648][048]|[13579][26])|2000|200[48])([-/.]?)0?2\2(?:29))$/gm", $dob)) {
				$error = true;
			}
			if (empty($adress)) {
				$error = true;
			}			
			if (empty($city)) {
				$error = true;
			}
			if (empty($postcode) or !preg_match("/^[0-9]{6}$/g", $postcode)) {
				$error = true;
			}
			if (empty($hphone) or !preg_match("/^[0-9]{9}$/g", $hphone)) {
				$error = true;
			}
			if (empty($mphone) or !preg_match("/^[0-9]{9}$/g", $mphone)) {
				$error = true;
			}
			if (empty($ccnumber) or !preg_match("/^[0-9]{16}$/g", $ccnumber)) {
				$error = true;
			}
			if (empty($ccexpiry) or !preg_match("/^(?:(?:19[0-9]{2}|200[0-9]|2010)([-/.]?)(?:(?:0?[1-9]|1[0-2])\1(?:0?[1-9]|1[0-9]|2[0-8])|(?:0?[13-9]|1[0-2])\1(?:29|30)|(?:0?[13578]|1[02])\1(?:31))|(?:19(?:0[48]|[2648][048]|[13579][26])|2000|200[48])([-/.]?)0?2\2(?:29))$/gm", $ccexpiry)) {
				$error = true;
			}
			if (empty($website) or !preg_match("/^(http|https):\/\/[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/g", $website)) {
				$error = true;
			}
			if (empty($gpa) or !preg_match("/^[0-9]{1}\.[0-9]{1}$/g", $gpa) or (float)$gpa < 4.5 ) {
				$error = true;
			}




		}










		 ?>






		<form action="" method="post">
			<input type="text" name="name" placeholder="Name" />
			<input type="text" name="email" placeholder="Email" />
			<input type="text" name="username" placeholder="Username" />
			<input type="text" name="password" placeholder="Password" />
			<input type="text" name="cpassword" placeholder="Confirm Password" />
			<input type="text" name="dob" placeholder="Date of Birth" />
			<label> Choose your gender: </label><select name="gender">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select><br /><br />

			<label> Choose your martial status: </label><select name="mstatus">
				<option value="Single">Single</option>
				<option value="Married">Married</option>
				<option value="Divorced">Divorced</option>
				<option value="Widowed">Widowed</option>
			</select><br /><br />
	
			<input type="text" name="adress" placeholder="Adress" />
			<input type="text" name="city" placeholder="City" />
			<input type="text" name="postcode" placeholder="Postal Code" />
			<input type="text" name="hphone" placeholder="Home Phone" />
			<input type="text" name="mphone" placeholder="Mobile Phone" />
			<input type="text" name="ccnumber" placeholder="Credit Card Number" />
			<input type="text" name="ccexpiry" placeholder="Credit Card Expiry Date" />
			<input type="text" name="website" placeholder="Website" />
			<input type="text" name="gpa" placeholder="Overall GPA" />
			
			<button>Submit</button>


		</form>


		<style>
			form{
				padding: 50px;
			}
			input{
				display: block;
				padding: 8px;
				margin-bottom: 15px;
				width: 300px;
				border: 1px solid #e5e5e5;
				border-radius: 5px;
			}
			button{
				background-color: black;
				padding: 10px;
				min-width: 100px;
				text-align: center;
				border: none;
				color: white;
				cursor: pointer;
			}



		</style>
	</body>
</html>