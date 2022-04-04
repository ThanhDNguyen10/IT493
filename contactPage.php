<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
	<link rel = "icon" href = "https://images.squarespace-cdn.com/content/v1/5ee021e639af8035429c7bcb/1594685918419-HR11AMAXM2LGC1N0650J/favicon.ico?format=100w" type = "image/x-icon">	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Contact Us</title>
</head>
<body>
	<div class="bg-parallax">
	
	<header id="header">
        <nav class="banner">
            <div class="wrapper">
                <p class="banner__promo">We are back to normal hours. Contact us to schedule an appointment today!</p>
            </div>
        </nav>
		
		
		<nav class="navigation">
			
			
				<a href="" class="custom-logo-link" rel="home"><img width="268" height="155" 
				src="https://images.squarespace-cdn.com/content/v1/5ee021e639af8035429c7bcb/1599175895814-R5NCRQTL9ISLDY8M45FW/Embassy-Tattoo-Logo-Thin.png?format=1500w" class="custom-logo" alt="" </a>
				
				
				
                <ul class="navigation__list">
					
                    <li><a href="https://embassytattoo.com/">Home</a></li>
                    <li><a href="https://embassytattoo.com/artists">Artist</a></li>
                    <li><a href="https://embassytattoo.com/about">About Us</a></li>
                    <li><a href="https://embassytattoo.com/faq">FAQ</a></li>    
                    
					<a href="https://www.instagram.com/embassytattoo/"><i class="fa fa-instagram insta"></i></a>
					<a href="https://www.yelp.com/biz/embassy-tattoo-washington"><i class="fa fa-yelp yelp"></i></a>
					<a href="https://www.facebook.com/EmbassyTattooDC/"><i class="fa fa-facebook fb"></i></a>
					
                </ul>
			
		</nav>
    </header>
	
    <br>
    
	<h1>Contact Us</h1>    
    
    <section class="section-book">
            
			<div class="form-content">
			
					<div class="left">
						<h2>Note <span class="ast">*</span></h2>
						<br>
						<p>We appreciate your interest and highly recommend reading our FAQ prior to filling out our contact form. For piercing, please contact the shop directly, we are typically available the same day. For tattoos, please use contact form. 
						Response time is based on artist availability, we will be in touch as soon as possible. If you are flexible on the artist requested, please be sure note that. Thank you!</p>
						<br>
						<p>Customer is required to book a consultation first before scheduling an appointment.</p>
					</div>
					<div class="right">
						<form action="contact.php" method="post">
							<br>
							<p>What are you booking today?</p>
								<div class="inline" onclick="myFunction()">
								  <label>
									<input type="radio" name="Confirmation" value="Consultation" checked>
									Consultation       
								  </label>
								  <label>
									<input type="radio" name="Confirmation" value="Appointment">
									Apppointment
								  </label>
								</div>
							<br>
							<p>Full Name <span class="wpforms-required-label">*</span></p>
							<div class="form__group">
								<input type="text" name="fname" id="name" placeholder="First Name" required>
								<input type="text" name="lname" id="name" placeholder="Last Name" required>
							</div>
							<br>
							<p>Email <span class="wpforms-required-label">*</span></p>	
							<div class="form__group">
								<input type="email" name="email" id="email" placeholder="Email" required>
							</div>
							<br>
							<p>Phone <span class="wpforms-required-label">*</span></p>	
							<div class="form__group">
								<input type="phone" name="phone" id="phone" placeholder="Ex: 7031238900" required>
							</div>
							<br>
							<p>Tattoo Description and Placement</p>
							<div class="form__group">
								<textarea name="description" id="description" cols="30" rows="7"></textarea>
							</div>
							<br>
							<p>Specific Artist Requested? <span class="wpforms-required-label">*</span></p>
							<div class="form__group">
								<div class="form__dropdown-group">
									<select name="artists" id="artists" size="1" required>
										<option value="">--Select an artist--</option>
										<option value="Fernando Gonzalez">Fernando Gonzalez</option>
										<option value="Memo Gonzalez">Memo Gonzalez</option>
										<option value="Kevin Avila">Kevin Avila</option>
										<option value="Ethan Xin Xu">Ethan Xin Xu</option>
										<option value="Pablo Barragan">Pablo Barragan</option>
										<option value="Roman Avila">Roman Avila</option>
										<option value="Brandon Dais">Brandon Dais</option>
									</select>              
								</div>
								<br>
							<p>Will you consider another artist if the artist you selected is not available?</p>
								  <label>
									<input type="radio" name="available" value="Yes" checked>
									Yes       
								  </label>
								  <label>
									<input type="radio" name="available" value="No">
									No
								  </label>
								</div>
								<br>
								<p>Upload Your Photo References</p>
								<div class="form__files">
									<input type="file" name="photos" id="photos" multiple>
								</div>
								<br>
								<input class="button" type="submit" value="Submit">
							</div>
						</form>
                
               
        </div>
    </section>
	
	
    
	<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                     <div class="col-sm-3 col-md-3 item">
                        <div id="footer__logo">
					    <img rel="home"><img width="168" height="100"
						src="https://images.squarespace-cdn.com/content/v1/5ee021e639af8035429c7bcb/1599175895814-R5NCRQTL9ISLDY8M45FW/Embassy-Tattoo-Logo-Thin.png?format=1500w"
						class="custom-logo" alt="" </a>
			        	</div>
						
                     </div>
                    <div class="col-sm-3 col-md-3 item">
                        <h3>Location</h3>
                        <ul>
                            <li><a target="_blank" href=""https://www.google.com/maps/place/Embassy+Tattoo/@38.9235856,-77.0431588,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7b7d914cbe5c9:0x42ac9ef65f2493eb!8m2!3d38.9235814!4d-77.0409701?shorturl=1"">Address</a></li>
                        </ul>
                    </div>
					
                    <div class="col-sm-3 col-md-3 item">
                        <h3>Contact</h3>
                        <ul>
                            <li><a href="">Schedule a Consultation</a><li>
                            <li>(202) 733-3846</li>
                            <li><a href="mailto: embassyta2@gmail.comm">Email Us</a><li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-md-3 item text">
                        <h3>Hours</h3>
                        <ul>
                             <li>Monday - Saturday</li>
                             <li>12 - 10PM</li>
                             <li>Sunday</li>
                             <li>12 - 8PM</li>
                        </ul>
                    </div>
                    <div class="col item social">
                          <h3>Follow Us</h3>
                        <a href="https://www.instagram.com/embassytattoo/"><i class="fa fa-instagram insta"></i></a><a href="https://www.yelp.com/biz/embassy-tattoo-washington"><i class="fa fa-yelp yelp"></i></a><a href="https://www.facebook.com/EmbassyTattooDC/"><i class="fa fa-facebook fb"></i></a></div>
                </div>
                <p class="copyright">Team Echo. All Rights Reserved © 2022<br>This is a IT 492/493 Team Echo's school project.</p>
            </div>
        </footer>
    </div>
	
	
</body>
<script src="script.js" async></script>
<script>
	function myFunction() {
	  alert("Customer is required to book a consultation before scheduling an appointment!");
	}
</script>
</html>