<html>
<head>
  <title>Tech-Grider|Sign Up</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="decoration/css/signstyle1.css" />
	<!--<link type="text/css" rel="stylesheet" href="style.css"/>-->
	<link type="text/css" rel="stylesheet" href="decoration/css/cssindex.css"/>
<script type="text/javascript" src="decoration/js/jsindex.js"></script>
</head>

<body>
   <?php
	    include 'parts/header.php';
	 ?>
	  <div style="text-align: center;">
		<section id="content">
		<form action="<?php $_PHP_SELF ?>" method="post">
			<h2>Join Tech-Grider</h2>
			<div>
				<input name="firstname" type="text" placeholder="First Name" required="" id="firstname" />
			</div>
			<div>
				<input name="lastname" type="text" placeholder="Last Name" required="" id="lastname" />
			</div>
			<div>
				<input name="username" type="text" placeholder="User Name" required="" id="username" />
			</div>
			<div>
				<input name="password" type="password" placeholder="Choose A Password" required="" id="password" />
			</div>
			<div>
				<input name="email" type="email" placeholder="Email Address" required="" id="email" />
			</div>
			<!--<div>
				<input name="password" type="password" placeholder="Repeat Password" required="" id="password" />
			</div>-->
			<div>
				<input name="submit" type="submit" value="Sign Up" />
				<a href="loginpage.php">Already Member?</a>
				
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="../withoutlogin/home.php">Continue Without Login</a>
		</div><!-- button -->
	</section><!-- content -->
</div>
	 <?php
if(isset($_POST['submit']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $firstname = addslashes ($_POST['firstname']);
   $lastname = addslashes ($_POST['lastname']);
   $username = addslashes ($_POST['username']);
   $password = addslashes ($_POST['password']);
   //$repeatpassword = addslashes ($_POST['repeatpassword']);
   $email = addslashes ($_POST['email']);
}
else
{  
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   //$repeatpassword = $_POST['repeatpassword'];
   $email = $_POST['email'];
   
}

</body>
</html>