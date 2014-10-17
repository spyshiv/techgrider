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

			<div class="element">
			     <div class="element_head">
                  <img src="Images/newsImg/Engadget.png" height="32px" width="32px" />
				  </div>
				  <a href="result.php?link=engadget">
				  <div><strong><p>Engadget</p></strong></div>
				  </a>				 
				 <a href="check.php?link=engadget"><div  class="add_to_library" id="engadget"><b><p title="Add To Library" align="center">+</p></b>
				  </div></a>
				 <p>Engadget is a web magazine with obsessive daily coverage of everything new in gadgets and consumer electronics</p>
				 <a href="result.php?link=engadget"><center><img src="Images/newsImg/wallpaper/Engadget.jpg" height="200px" width="300px" /></center></a> 
		      </div>

		     <div class="element">
			     <div class="element_head">
                  <img src="Images/newsImg/lifehacker.png" height="32px" width="32px" />
				  </div>
				  <a href="result.php?link=lifehacker">
				  <div><strong><p>Life Hacker</p></strong></div>
				  </a>			 
				 <a href="check.php?link=lifehacker"><div  class="add_to_library" id="life_hacker"><b><p title="Add To Library" align="center">+</p></b>
				  </div></a>
				 <p>This is a private feed for friends and partners of Lifehacker, containing full editorial posts.It will not carry advertise</p>
				 <a href="result.php?link=lifehacker"><center><img src="Images/newsImg/wallpaper/lifehacker.jpg" height="200px" width="300px" /></center></a> 
		      </div>
			  </br></br>
       </div>

       <div class="row">
               <div class="element">
			      <div class="element_head">
					<img src="Images/newsImg/Readwrite.png" height="32px" width="32px" />
			      </div>
				  <a href="result.php?link=readwrite"><div>
				    <strong><p>Read Write</p></strong>
				  </div></a>
				  <a href="check.php?link=readwrite"><div  class="add_to_library" id="readwrite"><b><p title="Add To Library" align="center">+</p></b>
				  </div></a>
				  <p>The latest news, analysis and conversation in all things web, tech and social media from the http://t.co/rp2Ar....</p>
				  <a href="result.php?link=readwrite"><center><img src="Images/newsImg/wallpaper/Readwrite.jpg" height="200px" width="300px" /></center></a>
			  </div>
 

	       <div class="element">
				     <div class="element_head">
	                  <img src="Images/newsImg/Techcrunch.png" height="32px" width="32px" />
					  </div>
					  <a href="result.php?link=techcrunch"><div>
					  <strong><p>Tech Crunch</p></strong>				 
					 </div></a>
					  <a href="check.php?link=techcrunch"><div  class="add_to_library" id="tech_crunch"><b><p title="Add To Library" align="center">+</p></b>
					  </div></a>
					 <p>TechCrunch is a group-edited blog that profiles the companies, products and events defining and transforming t...</p>
					 <a href="result.php?link=techcrunch"><center><img src="Images/newsImg/wallpaper/Techcrunch.jpg" height="200px" width="300px" /></center></a> 
			      </div>

			 <div class="element">
				     <div class="element_head">
	                  <img src="Images/newsImg/Gizmodo.png" height="32px" width="32px" />
					  </div>
					  <a href="result.php?link=gizmodo"><div>
					  <strong><p>Gizmodo</p></strong>				 
					 </div></a>
					 <a href="check.php?link=gizmodo"><div  class="add_to_library" id="gizmodo"><b><p title="Add To Library" align="center">+</p></b>
					  </div></a>
					 <p>Gizmodo is a design and technology blog. It is part of the Gawker Media network run by Nick Denton and runs on the Kinja platform</p>
					 <a href="result.php?link=gizmodo"><center><img src="Images/newsImg/wallpaper/Gizmodo.jpg" height="200px" width="300px" /></center></a>
			      </div>
	     </div>
         </br></br>

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