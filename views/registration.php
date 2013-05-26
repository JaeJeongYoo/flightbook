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


<!-- register form -->
<form method="POST" action="index.php?signin" name="registerform">
	<label for="login_input_username">*ID: </label>
	<input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
	<br />
	
	<label for="login_input_password_new">*Password: </label>
	<input id="login_input_password_new" class="login_input" type="password" name="user_password_new" required autocomplete="off" />
	<br />

	<label for="login_input_password_repeat">*Password: </label>
	<input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" required autocomplete="off" />
	<br />

	<label for="login_input_email">*E-Mail: </label>
	<input id="login_input_email" class="login_input" type="email" pattern="(.*){3,64}" name="user_email" required />
	<br />

	<label for="login_input_firstname">*First Name: </label>
	<input id="login_input_firstname" class="login_input" type="text" name="firstname" required />
	<br />

	<label for="login_input_middlename">Middle Name: </label>
	<input id="login_input_middlename" class="login_input" type="text" name="middlename" />
	<br />

	<label for="login_input_lastname">*Last Name: </label>
	<input id="login_input_lastname" class="login_input" type="text" name="lastname" required />
	<br />

	<label for="login_input_phone">*Phone Number: </label>
	<input id="login_input_phone" class="login_input" type="text" name="phone" required />
	<br />

	<label for="login_input_address">*Address: </label>
	<input id="login_input_address" class="login_input" type="text" name="address" required />
	<br />

	<label for="login_input_sex">*Sex: </label>					
	<input value="male" id="login_input_sex" class="login_input" type="radio" name="sex" required />
	<input value="female" id="login_input_sex" class="login_input" type="radio" name="sex" required />
	<br />

	<label for="login_input_county">Country: <label>
	<select id="login_input_country" class="login_input" name="country">
		<option value="korea">KOREA</option>
		<option value="united states">USA</option>
	</select>
	<br />

	<label for="login_input_birth">Birth Date: <label>
	<input id="login_input_birth" class="login_input" type="date" name="birth" />
	<br />

	<input type="submit" name="register" value="Register" />
</form>