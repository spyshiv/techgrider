<!doctype html>
<html>
<head>
<title>Tech-Grider|Library</title>
<!--link for css And Js Properties-->
<link type="text/css" rel="stylesheet" href="decoration/css/cssindex.css"/>
<link type="text/css" rel="stylesheet" href="decoration/css/home.css">
<script type="text/javascript" src="decoration/js/jsindex.js"></script>
<script src="decoration/js/jquery-2.1.1.min.js"></script>
</head>

<body>
<div id="whole" align="center">
<h1 id="home">My Library</h1>
  <div class="row">
     <?php
	    $newslist=array('theverge','engadget','lifehacker','readwrite','techcrunch','gizmodo','mashable','wired','arstechnica','slashdot','googleblog','macrumors','thenextweb','androidcentral','digitaltrends','cnet','thinkgeek','bits','gsmarena','hackernews','tedtalks');
		$connection = mysql_connect("localhost", "root", "");
		// Selecting Database
		$db = mysql_select_db("shiv", $connection);
    	for($i=0;$i<sizeof($newslist);$i++)
	{
		  $news=$newslist[$i];
		  
			$user_check=$_SESSION['login_user'];
			// SQL Query To Fetch Complete Information Of User
			$ses_sql=mysql_query("select user_id from users where username='$user_check'", $connection);
			$row = mysql_fetch_assoc($ses_sql);
			$user_id =$row['user_id'];
			//echo $user_id;
			

		
		// SQL query to fetch information of registerd users and finds user match.
		$query= mysql_query("select * from library where $news='$news' and user_id=$user_id", $connection);
		 $rows = mysql_num_rows($query);
		if ($rows == 1 and $news=='engadget') {
		 include 'parts/library/engadget.php';
		 }
		 if ($rows == 1 and $news=='theverge') {
		 include 'parts/library/theverge.php';
		 }
		 if ($rows == 1 and $news=='lifehacker') {
		 include 'parts/library/lifehacker.php';
		 }
		 
		 
		 if ($rows == 1 and $news=='readwrite') {
		 include 'parts/library/readwrite.php';
		 }
		 if ($rows == 1 and $news=='techcrunch') {
		 include 'parts/library/techcrunch.php';
		 }
		 if ($rows == 1 and $news=='gizmodo') {
		 include 'parts/library/gizmodo.php';
		 }
		 
		 if ($rows == 1 and $news=='mashable') {
		 include 'parts/library/mashable.php';
		 }
		 if ($rows == 1 and $news=='wired') {
		 include 'parts/library/wired.php';
		 }
		 if ($rows == 1 and $news=='arstechnica') {
		 include 'parts/library/arstechnica.php';
		 }
		 
		 if ($rows == 1 and $news=='slashdot') {
		 include 'parts/library/slashdot.php';
		 }
		 if ($rows == 1 and $news=='googleblog') {
		 include 'parts/library/googleblog.php';
		 }
		 if ($rows == 1 and $news=='macrumors') {
		 include 'parts/library/macrumors.php';
		 }
		 
		 if ($rows == 1 and $news=='thenextweb') {
		 include 'parts/library/thenextweb.php';
		 }
		 if ($rows == 1 and $news=='androidcentral') {
		 include 'parts/library/androidcentral.php';
		 }
		 if ($rows == 1 and $news=='digitaltrends') {
		 include 'parts/library/digitaltrends.php';
		 }
		 
		 if ($rows == 1 and $news=='cnet') {
		 include 'parts/library/cnet.php';
		 }
		 if ($rows == 1 and $news=='thinkgeek') {
		 include 'parts/library/thinkgeek.php';
		 }
		 if ($rows == 1 and $news=='bits') {
		 include 'parts/library/bits.php';
		 }
		 
		 if ($rows == 1 and $news=='gsmarena') {
		 include 'parts/library/gsmarena.php';
		 }
		 if ($rows == 1 and $news=='hackernews') {
		 include 'parts/library/hackernews.php';
		 }
		 if ($rows == 1 and $news=='tedtalks') {
		 include 'parts/library/tedtalks.php';
		 }
	}
	
		 // else echo 'no new Elements are inserted in library';
?>
  </div>
  
<a href="#" class="back-to-top">Back to Top</a>
        <script>
            
			jQuery(document).ready(function() {
				var offset = 220;
				var duration = 500;
				jQuery(window).scroll(function() {
					if (jQuery(this).scrollTop() > offset) {
						jQuery('.back-to-top').fadeIn(duration);
					} else {
						jQuery('.back-to-top').fadeOut(duration);
					}
				});
				
				jQuery('.back-to-top').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
				})
			});		
</script>
  </div>
</body>