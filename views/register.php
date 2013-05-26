<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->

<!-- errors & messages --->
<?php

// show negative messages
if ($registration->errors) {
    foreach ($registration->errors as $error) {
        echo $error;    
    }
}

// show positive messages
if ($registration->messages) {
    foreach ($registration->messages as $message) {
        echo $message;
    }
}

?>

<!-- -->   
<?
	require_once("../classes/Registration.php");

	$registration = new Registration();

?>
<!-- register form -->
<form method="POST" action="register.php" name="registerform">
	<label for="login_input_username">ID: </label>
	<input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />

	<label for="login_input_password_new">Password: <label>
	<input id="login_input_password_new" class="login_input" type="password" name="user_password_new" required autocomplete="off" />

	<label for="login_input_password_repeat">Password: <label>
	<input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" required autocomplete="off" />

	<label for="login_input_email"><label>
	<input id="login_input_email" class="login_input" type="email" pattern="(.*){3,64}" name="user_email" required />

	<label for="login_input_firstname"><label>
	<input id="login_input_firstname" class="login_input" type="text" name="firstname" required />

	<label for="login_input_middlename">
	<input id="login_input_middlename" class="login_input" type="text" name="middlename" />
				
	<label for="login_input_lastname"><label>
	<input id="login_input_lastname" class="login_input" type="text" name="lastname" required />

	<label for="login_input_phone"><label>
	<input id="login_input_phone" class="login_input" type="text" name="phone" required />

	<label for="login_input_address"><label>
	<input id="login_input_address" class="login_input" type="text" name="address" required />

	<label for="login_input_sex"><label>					
	<input id="login_input_sex" class="login_input" type="text" name="sex" required />
	
	<label for="login_input_county"><label>
	<input id="login_input_country" class="login_input" type="text" name="country" />
	
	<label for="login_input_birth"><label>
	<input id="login_input_birth" class="login_input" type="date" name="birth" />
	
	<input type="submit" name="register" value="Register" />
</form>