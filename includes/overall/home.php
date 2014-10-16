<!doctype html>
<html>
<head>
<title>Tech-Grider|Home</title>
<!--link for css And Js Properties-->
<link type="text/css" rel="stylesheet" href="decoration/css/cssindex.css"/>
<link type="text/css" rel="stylesheet" href="decoration/css/home.css">
<script type="text/javascript" src="decoration/js/jsindex.js"></script>
<script src="decoration/js/jquery-2.1.1.min.js"></script>
<!---->
<!---->
<!---->
</head>
<body>
     <div id="whole" align="center">
      <h1 id="home">Home</h1>
         <div class="row">
         <div class="element">
			      <div class="element_head">
					<img src="Images/newsImg/verge.png" height="32px" width="32px" />
			      </div>
				  <a href="result.php?link=theverge">
				    <div><strong><p>The Verge</p></strong></div>
				  </a>	
				  <a href="check.php?link=theverge"><div class="add_to_library" id="the_verge"><b><p title="Add To Library" align="center">+</p></b>
				  </div></a>
				  <p>The Verge was founded in 2011 in partnership with Vox Media, and covers the intersection of technology, science, art, and culture.</p>
				  <a href="result.php?link=theverge"><center><img src="Images/newsImg/wallpaper/Verge.jpg" height="200px" width="300px" /></center></a>
			  </div>

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
</html>