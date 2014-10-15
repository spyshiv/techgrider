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