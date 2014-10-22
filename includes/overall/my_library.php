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
	?>
    

  </div>
  </div>
</body>