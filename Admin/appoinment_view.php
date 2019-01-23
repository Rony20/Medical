	<?php
   include 'dbconnect.php'; 
   $sql=mysql_query("SELECT * from `appoinment`");
	?>

	<html lang="zxx" class="no-js">
	<head>
  <style type="text/css">
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid PINK;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #ccffcc;}
#customers tr:nth-child(odd){background-color: #ffffcc;}

#customers tr:hover {background-color: #00ff00;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: Red;
    color: white;
}
  </style>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="Rony" content="MySite">
		<title>Medical</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/mystyle.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			

		</head>
		<body>	
		  <header id="header">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-left">
			  				<a href="tel:+9530123654896"><span class="lnr lnr-phone-handset"></span> <span class="text"><span class="text">+953 012 3654 896</span></span></a>
				  			<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">kayakalpclinic@gmail.com</span></span></a>			
			  			</div>
			  			
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><h2 style="font-family:Comic sans ms; color:grey;">&ensp;&ensp;Kaya<font color="pink">Kalp</font></font><sub><font style="font-family: comic sans ms;font-size: 15px;color:white;font-weight: none">&ensp;Skin & Hair Care Clinic</font></sub></h2></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.html">Home <span class="fa fa-home"</a></li>
			          <li><a href="appoinment_view.php">Appointments <span class="fa fa-diagnoses"></a></li>
			          <li><a href="index.html">Logout <span class="fa fa-user-circle"></a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								View Appointments				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="appoinment_view.php"> Appointments</a></p>
						</div>	
					</div>
				</div>
			</section>
			<br>
			<br>
			<br>
			<!-- End banner Area -->

			
			<!-- start consultant area -->
			<div id="h1"><h1 style="font-family: comic sans ms;text-align: center;color:#0ec15c;"> View Appointments </h1></div>
			<br><br>
			<div class="container">
  <table class="table" id="customers">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
       <th>Mobile</th>
        <th>Date</th>
        <th>Age</th>
         <th>Message</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $i=1;
   while($row=mysql_fetch_array($sql)){

   			if($row['Status']==0)
   			{
   				echo"<tr>";
                echo "<td>".$i++." | <a href='confirm_app.php?id={$row['Email']}' class='btn btn-primary'> Confirm</a> </td>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['Email']."</td>";
               	echo "<td>".$row['Mobile']."</td>";
               	echo "<td>".$row['Date']."</td>";
               	echo "<td>".$row['Age']."</td>";
          		echo "<td>".$row['Message']."</td>";
				echo "</tr>";
   			}
          
          }
          ?>

      </tbody>
  </table>
</div>

			<!-- End consultant area -->

<br>
<br>
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2  col-md-6">
							<div class="single-footer-widget">
								<h6>Top Products</h6>
								<ul class="footer-nav">
									<li><a href="#">Face Cleanser for sensitive skin</a></li>
									<li><a href="#">Purifying Spot corrector</a></li>
									<li><a href="#">Purifying toner</a></li>
									<li><a href="#">Skin rejuvanating serum</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Contact Us</h6>
								<p>
									1st Floor, Balaji Complex, Nehru Park Society
									Near Trimurti Hospital, Sardar Baug Road
									Junagadh, Gujarat 362001
									India
								</p>
								<h4>+91 97276 00066</h4>
								<h4>kayakalpclinic@gmail.com</h4>
							</div>
						</div>							
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
											</div> 
										
											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn circle">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div> 
										</div>		
										<div class="info"></div>
									</form>
								</div>		
							</div>
						</div>					
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">KayaKalp Clinic</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>					
					</div>
				</div>
			</footer>
			<!-- End footer Area -->
<!-- Model-->

		


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>