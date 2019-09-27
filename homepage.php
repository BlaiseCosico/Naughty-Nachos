<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Naughty Nachos</title> 
	<meta name="description" content="Essentia Responsive Bootstrap Theme by Bootstrap Master"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/style123.css" rel="stylesheet">
	<link href="css/slider1.css" rel="stylesheet">
	<link href="css/slider2.css" rel="stylesheet">
	<link href="css/slider3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  	
  	<style type="text/css">
    #parallax {
    /* The image used */
    background-image: url("img/place1.jpg");

    /* Set a specific height */
    min-height: 500px; 
	color: white;
	text-align: center;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	}

	#parallax h1{
		padding-top: 15%;
		font-family: Hammersmith One;
		font-size: 70px;
	}

	.fa {
  padding: 15px;
  font-size: 17px;
  width: 50px;
  height: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 4px;
  border-radius: 50%;
  border: 3px solid white;
  
}

.fa:hover {
    opacity: 0.7;
	text-decoration: none;
	color:#595959;
}

.fa-envelope{
	border-radius:none;
	border:none;
	
	
}

.fa-map-marker{
  border-radius:none;
  border:none;
  color: red;
  
  
}

.fa-phone{
  border-radius:none;
  border:none;
  color: white;

 
}
.fa-facebook {
  background: #404040;
  color:white;
  border: 3px solid white;
}

.fa-twitter {
  background: #404040;
  color:white;
  border: 3px solid white;
}

.fa-instagram {
  background: #404040;
  color:white;
  border: 3px solid white;
}




    </style>
   
    <script>
		function Time(){
						
						var choices = ["12:00 NN","12:30 PM","1:00 PM","1:30 PM","2:00 PM", "2:30 PM","3:00 PM","3:30 PM","4:00 PM", "4:30 PM", "5:00 PM", "5:30 PM", "6:00 PM", "6:30 PM", "7:00 PM", "7:30 PM","8:00 PM", "8:30 PM", "9:00 PM","9:30 PM","10:00 PM"];
						
						for(var i=0;i<choices.length-2;i++){
							var opt = document.createElement("option");
							var sel = document.getElementById("timeIn");
							opt.innerHTML = choices[i];
							opt.value = i;
							sel.appendChild(opt);
						}


						for(var x = 2; x<choices.length;x++){
							var opt1 = document.createElement("option");
							var sel1 = document.getElementById("timeOut");
							opt1.innerHTML = choices[x];
							opt1.value = x;
							sel1.appendChild(opt1);
						}
						
									
					}
				function cp(){
			var val = document.getElementById('p').value;
			var num = document.getElementById('n');



			if(document.getElementById('p').value == '(+63)'){
				num.placeholder = "915xxxxxxx";
			}else{
				num.placeholder = "941xxxx";
			}


		}

    </script>

</head>
<body onload = "Time()">
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
						
			<!--start: Row -->
			<div class="row-fluid">
					
				<!--start: Navigation -->
				<div class="navigation"> 
				
					

			      	<div class="navbar">  
					    <div class="navbar-inner">
					      <a class="navbar-brand" href="#">Naughty Nachos</a>
					    </div>
					    <ul class="nav navbar-nav">
					      <li class="active"><a href="#">Home</a></li>
						  <li><a href="WEB/index.php" class="menu">Menu</a></li>
						  <li><a href="#container-aboutus" class="about">About</a></li>
						  <li><a href="Reservation.php" class="services">Reservation</a></li>
						  <li><a href="#contact" class="contact">Contact</a></li>
					    </ul>
					 
					</div>
				
				
				</div>	
				<!--end: Navigation -->	

				<
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->




	<!-- start: 1st Page - Home -->
	<div id="home">

		<div class="demo-1">

	        <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">

					<div class="sl-slide bg-2" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="N"></div>
							<h2>Naughty Nachos</h2>
							<blockquote>
							<p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-1" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="b"></div>
							<h2>Best Sellers</h2>
							<blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p></blockquote>

						</div>
					</div>

					<div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="R"></div>
							<h2>Reservation</h2>
							<blockquote><p>We offer reservations</p><button type = "button">reserve</button></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="I"></div>
							<h2>Donna nobis pacem</h2>
							<blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="t"></div>
							<h2>Acta Non Verba</h2>
							<blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Margi Clarke</cite></blockquote>
						</div>
					</div>
				</div><!-- /sl-slider -->

				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->

	    </div>

	</div>
	<!-- end: 1st Page - Home -->
	
	
	
	<!-- start: 3rd Page - Pricing Tables -->
	<div id="menu" class="color white">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">

							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span>WELCOME TO NAUGHTY NACHOS</span></h2>

						<div class="flex-container">
							<div class ="box">
								<figure class="snip1273">
								  <img src="img/b1.jpg" alt="sample72"/>
									  <figcaption>
									    <h1>ORDER NOW</h1>
									    <p>I don't need to compromise my principles, because they don't have the slightest bearing on what happens to me anyway. </p>
									  </figcaption>
								  		<a href="#"></a>
								</figure>
							</div>
							<div class ="box">
								<figure class="snip1273">
								  <img src="img/sub2.jpg" alt="sample21"/>
									  <figcaption>
									    <h1>BOOK A TABLE</h1>
									    <p>What's the point of wearing your favorite rocketship underpants if nobody ever asks to see 'em?</p>
										  </figcaption>
								  <a href="#"></a>
								 </figure>
							</div>
							<div class ="box">
								<figure class="snip1273">
								  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample72.jpg" alt="sample86"/>
									  <figcaption>
									    <h1>VIEW GALLERY</h1>
									    <p>Given that sooner or later we're all just going to die, what's the point of learning about integers?</p>
									  </figcaption>
										  <a href="#"></a>
								</figure>
							</div>
							
						</div>

				</div>	

			</div>
			<!-- end: Page Title -->
				
			<!-- start: Table -->
			
			<!-- end: Table -->
			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 3rd Page - Pricing Tables -->
	
	<!-- start: 4th Page - Portfolio -->
	<div id="portfolio" class="color white">
		
		<!--start: Container -->
		<div class="container">

			
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 4th Page - Portfolio -->

	<div class="container-aboutus">
	<div class="row-fluid">
		<div class="span12">
			<div class="containe-aboutus">
				<div class="row">
					 <div class="col-sm-8 truly">

			    	<h1 style="font-family: roboto;"><span>ABOUT US</span></h1>

			    	<h3>Welcome to Naugty Nachos, a modern restaurant with innovations on mexican cuisine</h3>


			    	<div class="flex">
			    		<div class="fbox">
			    		  	<p>
						      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempore incididunt ut labore et  dolore magna aliqua.Ut enim ad minim, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						 	</p>
			    		</div>

			    		<div class="fbox">
			    			<p>
			    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempore incididunt ut labore et  dolore magna aliqua.Ut enim ad minim, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			    			</p>
			    		</div>
			    	</div>
			    	  

				      <a href="#" class="btn btn-outlined btn-primary">FIND MORE</a>

			    </div>

			    	<div class="col-sm-4 pics">

				    	<div class = "z">
				    		<div class="imgPlace" style="background-image: url('img/food1.jpg');">
				    				
					    	</div>
			    		</div>

			 		   </div>
				</div>
			</div>
		</div>
	</div>

</div>


	<div id="parallax">
		
			<h1>COME AND GRAB A SLICE</h1>
		
	</div>


	<!-- start: 5th Page - About -->
	<div id="about" class="color white">
		
		<!--start: Container -->
		<div class="container talaga">
			<!--start: Wrapper -->
			<div class="wrapper span12">

							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">
				</div>	

			</div>	
			<!--start: Row -->
	    	<div class="row-fluid">
		
				<div class="span6"> <!--start: span6 -->
					
					<!-- start: About Us -->
			<div class="container"> <!--Start: Container -->
			  <div class="row"> <!--Start: Row -->
			    <div class="col-sm-6 omg" style="text-align:center;">

			    	<h1><span>OUR MENU</span></h1>

			    	  <br><p>
				      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempore </p> <p> incididunt ut labore et  dolore magna aliqua.Ut enim ad minim, quis nostrud </p> <p>exercitation ullamco laboris nisi aliquip ex ea commodo consequat.
				  	  </p>
				      <br>

				      <a href="WEB/index.php" class="btn btn-outlined btn-primary">VIEW MENU</a>

			    </div>

			    <div class="col-sm-6 pics">

				    	<div class = "f">
				    		<div class="imgPlace" style="background-image: url('img/L1.jpg');">
				    				
					    	</div>

					    	<div class="imgPlace" style="background-image: url('img/L2.jpg');">
					    	
					    	</div> 
			    		</div>

			 		   </div>

				  </div> <!--end: Row -->
				</div> <!--end: Container -->
	
					<!-- 
					Naughty Nachos is located at Magiting st. corner Maginhawa Quezon City. You can easily spot us, just right next to ministop. See you here!
					-->

				</div> <!--end: Span 6 -->
				
			</div>
			<!--end: Row -->
			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		<!-- end: Page Title -->	
	</div>

	<div id="parallax2" style="background-image: url('img/place5.jpg');">
		<h2><span>RESERVE A TABLE</span></h2>
		<h1>OPEN HOURS</h1>

		<h3>Monday - Friday: 11:30 AM - 11:00 PM</h3>
		<h3>Saturday - Sunday 11:30 AM - 11:00 PM</h3>

		 <a href="Reservation.php" name = "book" class="btn btn-outlined btn-primary1">BOOK NOW</a>
	
	</div>
		
	
	<!-- end: 5th Page - About -->

	
	
	<!-- start: 6th Page - Reservation -->
<div id="about" class="color white">
		
		<!--start: Container -->
		<div class="container talaga">
			<!--start: Wrapper -->
			<div class="wrapper span12">

							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">
				</div>	

			</div>	
			<!--start: Row -->
	    	<div class="row-fluid">
		
				<div class="span6"> <!--start: span6 -->
					
					<!-- start: About Us -->
			<div class="container"> <!--Start: Container -->
			  <div class="row"> <!--Start: Row -->

			  	  <div class="col-sm-6 pics">

				    	<div class = "f">
				    		<div class="imgPlace" style="background-image: url('img/L1.jpg');">		
					    		</div>

					    	<div class="imgPlace" style="background-image: url('img/L2.jpg');">
					    		</div> 
			    		</div>
			 	</div>

			    <div class="col-sm-6 omg" style="text-align:center;">

			    	<h1><span>MORE STUFF</span></h1>

			    	  <br><p>
				      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempore </p> <p> incididunt ut labore et  dolore magna aliqua.Ut enim ad minim, quis nostrud </p> <p>exercitation ullamco laboris nisi aliquip ex ea commodo consequat.
				  	  </p>
				      <br>

				    

			    </div>

			  

				  </div> <!--end: Row -->
				</div> <!--end: Container -->
	
					<!-- 
					Naughty Nachos is located at Magiting st. corner Maginhawa Quezon City. You can easily spot us, just right next to ministop. See you here!
					-->

				</div> <!--end: Span 6 -->
				
			</div>
			<!--end: Row -->
			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		<!-- end: Page Title -->	

	<!-- End: 6th Page - Reservation -->


	
	<div id="parallax" style="background-image: url(img/place3.jpg);"></div>

	<!-- start: 7th Page - Contact -->
	<!-- /////////////////////////////////////////////// -->
	<div id="contact" class="color black">

		<!--start: Container -->
		<div class="container">

			<div class ="row">
				 <div class="col-sm-6" style="background-color: #404040;">
				 <br>
				 <br>
				 	<h1 align= "center" color="yellow" >GET IN TOUCH</h1>
					<center>
				 	<ul>
						<li></br></li>
					
				 		<li><i class="fa fa-envelope" style="font-size:24px; color:white; align:right" ></i>• 95 Magiting Cor. Maginhawa •</br>
						</li>
							
						<li><i class="fa fa-map-marker" style="font-size:24px ; color:white; align:left"></i> • NaughtyNachos@gmail.com •</li>
						
						<li font size="20px"><i class="fa fa-phone" style="font-size:24px; color:white; align:right"></i> • 09167973104 • </li>
						
						<li></br></li>
						
				 	</ul>
					</center>
					
					
					<center>
					<a href="#" class="fa fa-facebook" color="white"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-instagram"></a>
					</center>

					<br><br>

				 </div> <!--end of col-sm-6-->

 					<div class="col-sm-6">
					<form name = "contact" action = "sendmessage.php" method = "POST">
						<br>
						<br>
						<br>
					 	<input id="name" name="name" type="text" placeholder="NAME" class="form-control">
						<br>
					 	<input id="email" name="email" type="text" placeholder="EMAIL" class="form-control">
					 	<br>
						<textarea class="form-control" id="message" name="message" placeholder="MESSAGE" style="height:200px;" ></textarea>
						<br>
						<input type = "submit" name = "submit" value = "Send Message">
					</form>
				</div> <!--end of col-sm-6 v2-->

			</div> <!-- end of row -->
		</div> <!--end: Container -->
		
		
	</div>
	<!-- end: 7th Page - Contact -->

	
	<footer>
		<div class ="row">
			<div class="col-sm-4">
				<h2>ADDRESS:</h2>
				Magiting st. corner Maginhawa Quezon City

			</div>

			<div class="col-sm-4">
				<h2>RESERVATION:</h2>
				contact@nachos.com

			</div>

			<div class="col-sm-4">
				<h2>OPEN HOURS</h2>
				<p>Monday-Friday: 10 AM - 11 PM</p>
				Saturday - Sunday: 10 AM - 11 PM
			</div>

		</div>

		<div id="copyright">
			<br>
			Naughty Nachos Est. 2014 &copy 
			<br>
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-instagram"></a>

		</div>
		<div id="social">
			<a href="http://facebook.com/naughtnachos" rel="tooltip" title="Facebook" class="facebook">Facebook</a>
			
		</div>

		
	</footer>	

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flexslider.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/fancybox.js"></script>
<script type="text/javascript" src="js/twitter.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>

<script type="text/javascript" src="js/excanvas.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script defer="defer" src="js/custom.js"></script>
<script type="text/javascript">	
	$(function() {
	
		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {

					initEvents();
					
				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {

						slitslider.next();
						return false;

					} );

					$navArrows.children( ':first' ).on( 'click', function() {
						
		  				slitslider.previous();
						return false;

					} );

					$nav.each( function( i ) {
					
						$( this ).on( 'click', function( event ) {
							
							var $dot = $( this );
							
							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );
							
							}
							
							slitslider.jump( i + 1 );
							return false;
						
						} );
						
					} );

				};

				return { init : init };

		})();

		Page.init();
	
	});
</script>
<!-- end: Java Script -->

</body>
</html>