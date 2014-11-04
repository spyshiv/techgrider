<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html"  charset="utf-8" />
<meta http-equiv="content-language" content="en" />
<title>Tech-Grider|News</title>
<link type="text/css" rel="stylesheet" href="decoration/css/cssindex.css"/>
<script type="text/javascript" src="decoration/js/jsindex.js"></script>
<link href="decoration/css/result.css" rel="stylesheet" type="text/css" />
</head>
<body>
     <?php
	    include '../database/profile.php';
	    include 'parts/header.php';
	 ?>
	<div style="padding: 10px;">
<h1 id="latest news" align="center">Latest News</h1>
  
  <div>
    
    <div class="rssDiv">
        <div id="divRss"></div>	
    </div>
    
  </div>
  <div style="clear: both"></div>
</div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
<script src="decoration/js/jquery-2.1.1.min.js"></script>
<!--<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-langs.min.js"></script>-->
<script type="text/javascript" src="decoration/js/result.js"></script>
<?php
			   if($_GET['link']=='theverge')
			   {
				include 'parts/feedlink/theverge.php';
			   }
			   
			   if($_GET['link']=='engadget')
			   {
				include 'parts/feedlink/engadget.php';
			   }
			   
			   	if($_GET['link']=='lifehacker')
			   {
				include 'parts/feedlink/lifehacker.php';
			   }
			   
			   if($_GET['link']=='readwrite')
			   {
				include 'parts/feedlink/readwrite.php';
			   }
			   
			   if($_GET['link']=='techcrunch')
			   {
				include 'parts/feedlink/techcrunch.php';
			   }
			   
			   	if($_GET['link']=='gizmodo')
			   {
				include 'parts/feedlink/gizmodo.php';
			   }
			   
			   if($_GET['link']=='mashable')
			   {
				include 'parts/feedlink/mashable.php';
			   }
			   
			   if($_GET['link']=='wired')
			   {
				include 'parts/feedlink/wired.php';
			   }
			   
			   	if($_GET['link']=='arstechnica')
			   {
				include 'parts/feedlink/arstechnica.php';
			   }
			   
			   if($_GET['link']=='slashdot')
			   {
				include 'parts/feedlink/slashdot.php';
			   }
			   
			   if($_GET['link']=='googleblog')
			   {
				include 'parts/feedlink/googleblog.php';
			   }
			   
			   	if($_GET['link']=='macrumors')
			   {
				include 'parts/feedlink/macrumors.php';
			   }
			   
			   
			   if($_GET['link']=='thenextweb')
			   {
				include 'parts/feedlink/thenextweb.php';
			   }
			   
			   if($_GET['link']=='androidcentral')
			   {
				include 'parts/feedlink/androidcentral.php';
			   }
			   
			   	if($_GET['link']=='digitaltrends')
			   {
				include 'parts/feedlink/digitaltrends.php';
			   }
			   
			   
			   if($_GET['link']=='cnet')
			   {
				include 'parts/feedlink/cnet.php';
			   }
			   
			   if($_GET['link']=='thinkgeek')
			   {
				include 'parts/feedlink/thinkgeek.php';
			   }
			   
			   	if($_GET['link']=='bits')
			   {
				include 'parts/feedlink/bits.php';
			   }
			   
			   if($_GET['link']=='gsmarena')
			   {
				include 'parts/feedlink/gsmarena.php';
			   }
			   
			   if($_GET['link']=='hackernews')
			   {
				include 'parts/feedlink/hackernews.php';
			   }
			   
			   	if($_GET['link']=='tedtalks')
			   {
				include 'parts/feedlink/tedtalks.php';
			   }
			    
			   ?>

</body>
