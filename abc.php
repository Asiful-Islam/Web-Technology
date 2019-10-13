<?php

$f_name = $l_name = $email = $pass = $c_pass = "";

$f_name_err = $l_name_err = $email_err = $pass_err = $c_pass_err = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(empty($_POST['f_name'])){
		$f_name_err = "First Name cannot be empty!";
	}
	else{
		$f_name = $_POST['f_name'];
	}
	
	if(empty($_POST['l_name'])){
		$l_name_err = "Last Name cannot be empty!";
	}
	else{
		$l_name = $_POST['l_name'];
	}
	
	if(empty($_POST['email'])){
		$email_err = "E-mail cannot be empty!";
	}
	else{
		$email = $_POST['email'];
	}
	
	if(empty($_POST['pass'])){
		$pass_err = "Password cannot be empty!";
	}
	else{
		$pass = $_POST['pass'];
	}
	
	if(empty($_POST['c_pass'])){
		$c_pass_err = "Password Confirmation cannot be empty!";
	}
	else{
		$c_pass = $_POST['c_pass'];
	}
	
	if(!empty($_POST['pass']) && !empty($_POST['c_pass'])){
		if($pass != $c_pass){
			$c_pass_err = "Password doesn't match!";
		}
	}
}

?>

<html>

	<head>
		<title>Registration</title>
	</head>
	
	<body>
		<h1>User Registration</h1>
		<label style="color:red">* Required field</label>
		<br><br>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<label>First Name: </label><label style="color:red">*</label>
			<input type="text" name="f_name" value="<?php echo $f_name; ?>">
			<label style="color:red"><?php echo $f_name_err; ?></label>
			<br>
			<label>Last Name: </label><label style="color:red">*</label>
			<input type="text" name="l_name" value="<?php echo $l_name; ?>">
			<label style="color:red"><?php echo $l_name_err; ?></label>
			<br>
			<label>E-mail: </label><label style="color:red">*</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
			<label style="color:red"><?php echo $email_err; ?></label>
			<br>
			<label>Password: </label><label style="color:red">*</label>
			<input type="password" name="pass" value="<?php echo $pass; ?>">
			<label style="color:red"><?php echo $pass_err; ?></label>
			<br>
			<label>Confirm Password: </label><label style="color:red">*</label>
			<input type="password" name="c_pass" value="<?php echo $c_pass; ?>">
			<label style="color:red"><?php echo $c_pass_err; ?></label>
			<br><br>
			<label>Passport: </label><br>
			<input type="radio" name="passport" value="passport_yes" checked> Yes
			<input type="radio" name="passport" value="passport_no" <?php if((isset($_POST['passport'])) && ($_POST['passport']=="passport_no")) echo "checked" ?>> No
			<input type="radio" name="passport" value="passport_processing" <?php if((isset($_POST['passport'])) && ($_POST['passport']=="passport_processing")) echo "checked" ?>> Processing
			<br><br>
			<label>Gender: </label><br>
			<select name="gender">
				<option value="male" <?php if((isset($_POST['gender'])) && ($_POST['gender']=="male")) echo "selected" ?>> Male </option>
				<option value="female" <?php if((isset($_POST['gender'])) && ($_POST['gender']=="female")) echo "selected" ?>> Female </option>
				<option value="others" <?php if((isset($_POST['gender'])) && ($_POST['gender']=="others")) echo "selected" ?>> Others </option>
			</select>
			<br><br>
			<label>Education: </label><br>
			
			<input type="checkbox" name="ssc" value="ssc" <?php if((isset($_POST['ssc'])) && ($_POST['ssc']=="ssc")) echo "checked" ?>> SSC<br>
			<input type="checkbox" name="hsc" value="hsc" <?php if((isset($_POST['hsc'])) && ($_POST['hsc']=="hsc")) echo "checked" ?>> HSC<br>
			<input type="checkbox" name="bsc" value="bsc" <?php if((isset($_POST['bsc'])) && ($_POST['bsc']=="bsc")) echo "checked" ?>> BSC
			<br><br>
			<input type="submit" value="Submit">
			<input type="reset">
		</form>
		
		<br><br>
		
		<h2><u>Your Information: </u></h2><br>
		
		<label>First Name: <?php echo $f_name; ?></label><br>
		<label>Last Name: <?php echo $l_name; ?></label><br>
		<label>Email: <?php echo $email; ?></label><br>
		<label>Password: <?php echo $pass; ?></label><br>
		<label>Confirmation Password: <?php echo $c_pass; ?></label>
		
	</body>	
	
</html>













