<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="decoration/css/signstyle1.css" />
<!--link for css And Js Properties-->
<link type="text/css" rel="stylesheet" href="decoration/css/cssindex.css"/>
<script type="text/javascript" src="decoration/js/jsindex.js"></script>
<!---->
</head>
<body>
      <?php
	    include 'parts/header.php';
	 ?>

<div style="text-align: center;">
		<section id="content">
		<form action="" method="post">
			<h2>Login </h2>
			<div>
				<input name="username" type="text" placeholder="Username" required="" id="username" />
			</div>
			<div>
				<input name="password" type="password" placeholder="********" required="" id="password" />
			</div>
			<div>
				<input name="submit" type="submit" value="Log in" />
				<!--<span><?php //echo $error; ?></span>-->
			<!--	<a href="#">Lost your password?</a>-->
				<a href="signup.php">Register</a>
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="../withoutlogin/home.php">Continue Without Login</a>
		</div><!-- button -->
	</section><!-- content -->	
</div>
</body>
</html>