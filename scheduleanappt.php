
<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','holyfamilycounselingcenter@gmail.com');
	define('MESSAGE_SUBJECT','Holy Family Website Form');
	define('REPLY_TO', 'holyfamilycounselingcenter@gmail.com');
	define('FROM_ADDRESS', 'holyfamilycounselingcenter@gmail.com');
	define('REDIRECT_URL', 'index.html');
	
	require_once('validation.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="description" content="Remodeling in Atlanta, GA. Focused on providing high-quality construction and remodeling services and complete customer satisfaction. Buford, Braselton, Suwanee, Johns Creek, Dacula, and Atlanta Area.">
<meta name="keywords" content="atlanta remodeling, atlanta construction, atlanta remodeling company, atlanta construction company, remodeling atlanta ga, construction company atlanta ga, remodeling, construction, basement remodeling, bathroom remodeling, kitchen remodeling, basements, additions, decks, screen porches, painting, water damage,
Roofs"/>
<meta name="author" content="Carter Guthrie carterguthrie.com">

<title>Holy Family Counseling Center: Our Mission</title>
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />


</head>

<body>
<!-- Website content -->

<div class="container-fluid">

<!-- First Row -->


<!-- Mobile Nav Row 
	<div class="row">
	  <div class="col-sm-1 hidden-xs hidden-md hidden-lg"></div>
		<div class="col-xs-12 col-sm-10 hidden-md hidden-lg white-background">
		   <br>
			<img src="images/layout/menu-icon2.png" class="toggle" width="55px" align="right" alt="Elite Remodeling Atlanta">
  	  	
   			<nav class="mobile-nav toggle-info">
   				<ul> <br><br><br>
   					<li class="mobile-main-nav li-mobile-style"><a href="index.html" title="Elite Remodeling Atlanta Home Page">Home</a></li>
		<li class="mobile-main-nav li-mobile-style"><a href="#"title="Elite Remodeling Atlanta Services">Services</a></li>
   							<ul class="mobile-dropdown-nav">
								<li class="dropdown-mobile-size"><a href="homeowners.html"title="Elite Remodeling Atlanta Homeowners">- Homeowners</a></li>
								<li class="dropdown-mobile-size"><a href="realestateagents-investors.html">- Real Estate Agents & Investors</a></li>
   							</ul>
   					<li class="mobile-main-nav li-mobile-style"><a href="about.html" title="Elite Remodeling Atlanta About Us">About Us</a></li>
   					<li class="mobile-main-nav li-mobile-style"><a href="contact.php" title="Elite Remodeling Atlanta Contact Page">Contact</a></li>
   					<li class="mobile-main-nav li-mobile-style"><a href="diytips.html" title="Elite Remodeling Atlanta Top DIY Projects">Top DIY Projects</a></li>
   					<li class="mobile-main-nav li-mobile-style"><a href="makecents.html">Improvements That Make Cents</a></li>
   					<li class="mobile-main-nav li-mobile-style"><a href="http://eliteremodelingatlantallc.tumblr.com/">Gallery</a></li>
   					<li class="mobile-main-nav li-mobile-style"><a href="careers.html">Careers</a></li>
   				</ul>
   			</nav>
		
			<br>
		</div>
	</div>
	
	-->

<!-- Second row -->

	<div class="row">
	<div class="hidden-xs col-sm-1 col-md-1"></div>
	

		
		
<!-- Main Content -->
		
	<div class="col-xs-12 col-sm-10 col-md-10 white-background outside-border">
		<div class="inside-border">
		<br>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<a href="index.html" alt="Holy Family Counseling Center"><img src="images/layout/logo-01.png" alt="Holy Family Counseling Center Logo" class="img-responsive" width="520px"></a>
			</div>
			
			<div class="col-xs-12 col-sm-6">
				<h2 class="hidden-xs hidden-sm appointmentstyle"><strong>Make An Appointment: </strong><br> <a href="tel:678-993-8494">(678) 993-8494</a> <br> holyfamilycouncelingcenter@gmail.com</h2>
				<br><br>
					<h1 class="hidden-xs hidden-sm locationheader">Click <a href="alllocations.html" alt="All Locations"><strong>HERE</strong></a> for All Locations</h1>
			</div>
		</div>
		
		
 		<!-- Networks Side Tab -->
 						
		
		   
		   <!--
		   <div class="network-style hidden-xs">
			<a href="https://www.youtube.com/channel/UCxzi-kopbreOFSzpEZlIctA" title="Holy Family" target="_blank"><img src="images/layout/u.png" onmouseover="this.src='images/layout/u2.png'" onmouseout="this.src='images/layout/u.png'"  alt="Holy Family" class="img-responsive nav-location" width="30px"></a>
				
					<a href="https://twitter.com/EliteRemodelAtl" title="Holy Family" target="_blank"><img src="images/layout/t.png" onmouseover="this.src='images/layout/t2.png'" onmouseout="this.src='images/layout/t.png'"  alt="Holy Family" class="img-responsive nav-location" width="30px"></a>
				
				<a href="https://plus.google.com/u/0/+EliteRemodelingAtlantaLLCBuford/about" title="Holy Family" target="_blank"><img src="images/layout/g.png" onmouseover="this.src='images/layout/g2.png'" onmouseout="this.src='images/layout/g.png'"  alt="Holy Family" class="img-responsive nav-location" width="30px"></a>
				
				<a href="http://www.facebook.com/Eliteremodelingatlantallc" title="Holy Family" target="_blank"><img src="images/layout/f.png" onmouseover="this.src='images/layout/f2.png'" onmouseout="this.src='images/layout/f.png'"  alt="Holy Family" class="img-responsive nav-location" width="30px"></a>
				<br class="hidden-lg hidden-md hidden-xs">
		</div>
		
		-->
		
	
  		
  		
  		
<!-- Main Nav -->   		
   		<div class="nav-border hidden-xs hidden-sm">
         		
        	<ul class="main-nav">
      			<li><a href="index.html">Home</a></li>

      				<li class="dropdown red-hover">
        				<a href="#">About Us</a>
       	 					<ul class="drop-nav">
          						<li><a href="ourmission.html">Our Mission</a></li>
          						<li><a href="ourstaff.html">Our Staff</a></li>
          						<li><a href="locations.html">Our Locations</a></li>    
        					</ul>
      				</li>
      				<li class="dropdown red-hover">
        				<a href="#">Services</a>
       	 					<ul class="drop-nav">
          						<li><a href="whowehelp.html">Who We Help</a></li>
          						<li><a href="whatwehelp.html">What We Help</a></li>    
        					</ul>
      				</li>
      				<li class="dropdown red-hover">
        				<a href="#">Programs & Groups</a>
       	 					<ul class="drop-nav">
          						<li><a href="programsforparishes.html">Programs For Parishes</a></li>
          						<li><a href="groups.html">Groups</a></li>
          						<li><a href="retreats.html">Recommended Retreats</a></li>
          						<li><a href="programsardiocese.html">Programs offered by the Archdiocese of Atlanta</a></li>    
        					</ul>
      				</li>
      				<li class="dropdown red-hover">
        				<a href="#">Resources</a>
       	 					<ul class="drop-nav">
          						<li><a href="books.html">Frequently Recommended Books</a></li>             						<li><a href="blog.html">HFCC Blog</a></li>

        					</ul>
      				</li>
      				<li class="dropdown red-hover">
        				<a href="#">Contact Us</a>
       	 					<ul class="drop-nav">
          						<li><a href="scheduleanappt.php">Schedule an Appt.</a></li>
          						<li><a href="alllocations.html">Locations</a></li>
          						<li><a href="faq.html">Frequently Asked Questions</a></li>    
        					</ul>
      				</li>
      				<li class="dropdown red-hover">
        				<a href="forms.html">Forms</a>
       	 					<ul class="drop-nav">
          						<li><a href="intakeforms.html">Intake Forms</a></li>
          						<li><a href="medicalforms.html">Medical Release Forms</a></li>   
        					</ul>
      				</li>
    		</ul>
         </div>	
         
         		<!-- End of Main Nav -->		
      		 	
      		 <br class="hidden-xs">
<!-- Slide Show  , class: for margin -->  
	<div class="row">
		<div class="col-xs-12">
			<h1 class="align-center"><strong>Schedule an Appointment</strong></h1>
				<br><br>
		</div>
	</div>
    		     		 
	<div class="row">
	<div class="col-xs-12 col-sm-1"></div>
		<div class="col-xs-12 col-sm-9">
			
			
					<br>
				<p class="aboutsubheader align-center"><strong>To speak to our Intake Coordinator to get more information or to schedule an appointment, please call 678-993-8494 or fill out the form by completing the following information below.</strong></p>
				
				<div class="container">
            			
						
                		   
                		       		<?php include('inc/form3.php'); ?>
                		       		<br><br>
                		 
            			
        			</div>
        			
        			<p class="aboutsubheader">This form will be transmitted directly to our Intake Coordinator who will keep your information confidential.  We will contact you as soon as possible during normal business hours.  Emails will not be answered on Saturday or Sunday.</p>
        			
        			<p class="aboutsubheader">If this is an emergency, please call 911 or go to your nearest emergency room.</p>
				
				
		<!--- Next --->
	

			
			
			
	<br><br><br><br>																	
	
		</div>
		<div class="col-xs-12 col-sm-2"></div>
	</div>

  
<!-- Main home page info -->     		 	   		 	
	<div class="row">
	
	
	<div class="row">
		<div class="col-xs-6 col-sm-3">
			<a href="letushelpyou.html" title="Let Us Help You"><img src="images/layout/helpyou.png" onmouseover="this.src='images/layout/helpyou2.png'" onmouseout="this.src='images/layout/helpyou.png'" width="270px"   alt="Let Us Help You" class="img-responsive align-center"></a>
		</div>
		
		<div class="col-xs-6 col-sm-3">
			<a href="letushelpyourrelationship.html" title="Let Us Help Your Relationship"><img src="images/layout/helprelationship.png" onmouseover="this.src='images/layout/helprelationship2.png'" onmouseout="this.src='images/layout/helprelationship.png'" width="270px"   alt="Let Us Help Your relationshi[" class="img-responsive align-center"></a>
		</div>
		
		<div class="col-xs-6 col-sm-3">
			<a href="letushelpyourfamily.html" title="Let Us Help Your Family"><img src="images/layout/helpfamily.png" onmouseover="this.src='images/layout/helpfamily2.png'" onmouseout="this.src='images/layout/helpfamily.png'" width="270px"   alt="Let Us Help Your Family" class="img-responsive align-center"></a>
		</div>
		
		<div class="col-xs-6 col-sm-3">
			<a href="letushelpyourorganization.html" title="Let Us Help Your Organization"><img src="images/layout/helpwork.png" onmouseover="this.src='images/layout/helpwork2.png'" onmouseout="this.src='images/layout/helpwork.png'"  width="270px"  alt="Let Us Help Your Organization" class="img-responsive align-center"></a>
		</div>
	</div><!-- Row Ends -->
		
		<div class="row">
				<div class="hidden-xs col-sm-1"></div>
			<div class="col-xs-12 col-sm-10">
				<h1 class="main-header-style"><strong>HOLY FAMILY COUNSELING CENTER</strong> PROVIDES COUNSELING FROM A CATHOLIC CHRISTIAN PERSPECTIVE AND PLACES VALUE IN THE FAMILY AS WELL AS THE DIGNITY OF THE INDIVIDUAL.
VALUE IN THE FAMILY AS WELL AS THE DIGNITY OF THE INDIVIDUAL.</h1>
		<br>
			</div>
				<div class="hidden-xs col-sm-1"></div>
			
		</div>
		<div class="row">
		  <div class="hidden-xs col-sm-1"></div>
			<div class="col-xs-12 col-sm-3">
				<a href="scheduleanappt.php" title="Programs"><img src="images/layout/app.png" onmouseover="this.src='images/layout/app2.png'" onmouseout="this.src='images/layout/app.png'" alt="Programs" class="img-responsive align-center"></a>
				
			</div>
			
			<div class="col-xs-12 col-sm-3">
				<a href="locations.html" title="Locations"><img src="images/layout/locations.png" onmouseover="this.src='images/layout/locations2.png'" onmouseout="this.src='images/layout/locations.png'" alt="Locations" class="img-responsive align-center"></a>
				
			</div>
			
			<div class="col-xs-12 col-sm-3">
				<a href="forms.html" title="Forms"><img src="images/layout/pg.png" onmouseover="this.src='images/layout/pg2.png'" onmouseout="this.src='images/layout/pg.png'" alt="Programs" class="img-responsive align-center"></a>
				
			</div>
		   <div class="hidden-xs col-sm-1"></div>
		</div>
		
		<br>
		
		<div class="row">
			<div class="col-xs-12 col-sm-5">
				<br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs"><img src="images/layout/frontdoor.jpg" alt="Holy Family" class="img-responsive align-center" width="90%">
			</div>
			
			<div class="col-xs-12 col-sm-6">
				<h3 class="aboutheader"><strong>Holy Family Counseling Center Provides</strong></h3>
				<br>
					<p class="aboutsubheader">Holy Family Counseling Center is made up of Catholic therapists of
varying backgrounds who have come together to offer aid to those
who wish to receive counseling and psychotherapy that will not
compromise their personal value system.</p>
		
					<p class="aboutsubheader">We provide counseling from a Catholic, Christian perspective for
couples, individuals and families placing value in the dignity of the
individual and marriage as well as the family.</p><br>
			
				<a href="philosophy.html" title="Our Philosophy"><p class="aboutsubheader-link"><strong><u>- Learn More About Holy Family Counseling Center</u></strong></p></a><br>
					<a href="ourstaff.html" title="Our Staff"><p class="aboutsubheader-link"><strong><u>- Our Staff</u></strong></p></a><br>
					<a href="scheduleanappt.php" title="Make An Appointment"><p class="aboutsubheader-link"><strong><u>- Make An Appointment</u></strong></p></a> <br>
					<a href="faq.html" title="Frequently Asked Questions"><p class="aboutsubheader-link"><strong><u>- Frequently Asked Questions</u></strong></p></a>
					
					<br><br>
			</div>
		</div>
		
		
		
		
	</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
<!-- Footer Row -->

	<div class="row">
		
		<div class="col-xs-12 col-sm-12 red">
			<br>
				
					
<!-- Footer Nav -->	
		
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<h4 class="nav-header-styles">Let Us Help</h4>
				<nav class="nav-footer align-center">
					<ul>
						<li><a href="index.html" title="Holy Family" class="nav-footer-border">Let us help you.</a></li>
						<li><a href="homeowners.html" title="Holy Family">Let us help your relationship.</a></li>
						<li><a href="about.html" title="Holy Family">Let us help your family.</a></li>
						<li><a href="contact.php" title="Holy Family">Let us help your organization or parish.</a></li>
						
					</ul>
				</nav>
			</div>
			
			<div class="col-xs-12 col-sm-4">
				<h4 class="nav-header-styles">Contact Information</h4><br>
					<p class="contactinfostyle"><strong>Main Duluth Location</strong>
					<br>
					1810 Peachtree Industrial Blvd #120 <br> Duluth, GA 30097
					<br><br>
					Phone: (678) 993-8494
				       <br>
				    Fax: (678) 473-7972
					</p>
					
					
					<p class="contactinfostyle">Click <a href="alllocations.html" alt="All Locations" class="contact-here-style"><strong>HERE</strong></a> ALL Locations</p>
				
			</div>
			
			<div class="col-xs-12 col-sm-4">
				<h4 class="nav-header-styles">Main Information</h4>
				<nav class="nav-footer align-center">
					<ul>
						<li><a href="index.html" title="Holy Family" class="nav-footer-border">Home</a></li>
						<li><a href="#" title="Holy Family">Services</a></li>
						<li><a href="#" title="Holy Family">Programs & Groups</a></li>
						<li><a href="#" title="Holy Family">Contact Us</a></li>
						<li><a href="#" title="Holy Family">Forms</a></li>
						
					</ul>
				</nav>
				<div class="network-style2">
	<br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg">
				<a href="#" title="Holy Family Counciling Center" target="_blank"><img src="images/layout/u.png" onmouseover="this.src='images/layout/u2.png'" onmouseout="this.src='images/layout/u.png'"  alt="Holy Family Counciling Center" class="img-responsive nav-location" width="40px"></a>
				
					<a href="#" title="Holy Family Counciling Center" target="_blank"><img src="images/layout/t.png" onmouseover="this.src='images/layout/t2.png'" onmouseout="this.src='images/layout/t.png'"  alt="Holy Family Counciling Center" class="img-responsive nav-location" width="40px"></a>
				
				<a href="#" title="Holy Family" target="_blank"><img src="images/layout/g.png" onmouseover="this.src='images/layout/g2.png'" onmouseout="this.src='images/layout/g.png'"  alt="Holy Family Counciling Center" class="img-responsive nav-location" width="40px"></a>
				
				<a href="#" title="Holy Family Counciling Center" target="_blank"><img src="images/layout/f.png" onmouseover="this.src='images/layout/f2.png'" onmouseout="this.src='images/layout/f.png'"  alt="Holy Family Counciling Center" class="img-responsive nav-location" width="40px"></a>
				
				
			</div>
			
			</div>
		</div>
			
									
				
				
	<br>
				
			
			<br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg">

		</div>
	  
	</div>



</div>
</div><!-- END OF Container-Fluid -->
	</div>
	
	</div>
<!-- END OF Website content -->

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
    
    
</body>
</html>
