<?php
	header('Content-Type: text/html; charset=UTF-8');

	require_once("config/db.php");
	require_once("classes/Login.php");
	require_once("classes/Registration.php");

	$login = new Login();
	$registration = new Registration();



?>



<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script language="javascript">
		<!--
			function login(){
				form=document.loginForm;
				if(form.userId.value==""){
					alert("아이디를 입력해주세요.");
					form.userId.focus();
					return false;
				}else if(form.userPassword.value==""){
					alert("비밀번호를 입력해주세요.");
					form.userPassword.focus();
					return false;
				}else{	
					return true;
				}
			}
		//-->
		</script>
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div id="headerMenu">
					<?php
					
					if($login->isUserLoggedIn() == false){

					?>
						<div id="loginBox">
							<form method="POST" action="./index.php" name="loginform" onSubmit="return login();">
								<label for="login_input_username">ID:</label>
								<input type="text" class="login_input" id="login_input_username" name="user_name" required />
								<label for="login_input_password">Password:</label>
								<input type="password" class="login_input" id="login_input_password" name="user_password" autocomplete="off" required/>
								<input type="submit" name="login" value="Log in" />
							</form>
						</div>
						<div id="headerBox">
							<a href="./index.php?signin">Sign In</a>&nbsp;/
							<a href="#" target="_new">Contact Us</a>
						</div>
					<?php
					
					}else{

					?>
						<div id="logoutBox">
							<a href="index.php?logout">Logout</a>&nbsp;/
							<a href="#">Contact Us</a>
						</div>
					
					<?php
					
					}
					
					?>
		
				</div>
			</header>
			<nav>
				<?php 
					if($_SESSION['user_name']){
						echo "<div id='profile'>Hello, ".$_SESSION['user_name']."</div>"; 
					}
				?>
			</nav>
			<article>
				<?php
				if(isset($_GET["signin"])){
				?>
				<!-- --->
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
				<?php
					include("views/registration.php");
				}
				?>
<!--
					<div id="articleTitle">
						<h3>flight searching</h3>
					</div>
					<div id="searching">
						<div id="searchingBox">
							<form method="POST" action="">
								<label>Departure City</label><input type="text" id="dCity" name="dCity" />
								<label>Arrival City</label><input type="text" id="aCity" name="aCity" />
								<label>Departure Date</label><input type="date" id="dDate" name="dDate" />
								<label>Departure Date</label><input type="date" id="aDate" name="aDate" />
								<input type="submit" id="submit" name="submit" />
							</form>
						</div>
					</div>
					<div>
					</div>
-->
			</article>
		</div>
	</body>
</html>