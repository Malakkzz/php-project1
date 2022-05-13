<?php 
	session_start();
	if(empty($_SESSION['user_id']) || empty($_SESSION['status'])){
        ?>
        <script>
            location="signup.php";
        </script>
        <?php
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive food website design tutorial </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css" />

<script src="jquery.min.js" ></script>

<script src="myscript.js"></script>

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>Panadora</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="Menu.php">Menu</a>
        <a href="Reservation.php">Reservation</a>
        <a href="about.php">About</a>
    </nav>
    <?php
        if(empty($_SESSION['status'])){
    
    ?>
    <a href="login.php" class="btn" style="margin-right:-200px">Log In</a>
    <a href="signup.php" class="btn">Sign Up</a>
    <?php } 
    else{
        ?>
        <form action="index.php" method="POST">
            <input type="submit" value="Log out" name="signout-submit" class="btn">
        </form>
        <?php
    }

    ?>

</header>

 

<div class="parallax" onclick="remove_class()">
	
	<div class="parallax_head" style="background-image: url('images/rest.jpg') ;">
		
		<h2>Reserve</h2>
		<h3>Table Space</h3>
		
	</div>
	
</div>

<div class="content" onclick="remove_class()">
	
	<div class="inner_content">
		
		<form method="post" action="index.php" class="hr_book_form">
			
			<h2 class="form_head"><span >BOOK A TABLE</span></h2>
			<p class="form_slg">We offer you the best reservation services</p>
			
			<!-- <?php echo "<br/>".$msg; ?> -->
			
			<div class="left">
				
				<div class="form_group">
					 
					 <label>No of Guest</label>
					<input type="number" placeholder="How many guests" min="1" name="nb_of_seats" id="guest" required>
					
				</div>
				
				<div class="form_group">
					
					<label>Email</label>
					<input type="email" name="reservation_email" placeholder="Enter your email" required>
					
				</div>
				
				<div class="form_group">
					
					<label>Phone Number</label>
					<input type="text" name="reservation_phone" placeholder="Enter your phone number" required>
					
				</div>
				
				<div class="form_group">
					
					<label>Date</label>
					<input type="date" name="reservation_date" placeholder="Select date for booking" required>
					
				</div>
				
				
			</div>
			
			<div class="left">
				
				<div class="form_group">
					
                    <label>Suggestions <small><b>(E.g No of Plates, How you want the setup to be)</b></small></label>
					<textarea name="reservation_suggestion" placeholder="your suggestions" required></textarea>
					
				</div>
				
				<div class="form_group">
					
					<input type="submit" class="btn" style="width:100%;" name="reservation_submit" value="MAKE YOUR BOOKING" />
					
				</div>
				
			</div>
			
			<p class="clear"></p>
			
		</form>
		
	</div>
	
</div>

<div class="content" onclick="remove_class()">
	
	<div class="inner_content">
	
		<div class="contact">
			
			<div class="left">
				
				<h3>LOCATION</h3>
				<p>Lebanon, Beirut</p>
				<p>Lebanese University</p>
				
			</div>
			
			<div class="left">
				
				<h3>CONTACT</h3>
				<p>71 271 156</p>
				<p>Panadora.rest@gmail.com</p>
				
			</div>
			
			<p class="left"></p>
			
			<div class="icon_holder">
				
				<a href="#"><img src="images/Facebook.png" alt="image/icons/Facebook.png" /></a>
				<a href="#"><img src="images/Google+.png" alt="image/icons/Google+.png"  /></a>
				<a href="#"><img src="images/Twitter.png" alt="image/icons/Twitter.png"  /></a>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<!-- <div class="footer_parallax" onclick="remove_class()">
	
	<div class="on_footer_parallax">
		
		<p>&copy; <?php /* echo strftime("%Y", time()); */ ?> <span>MyRestaurant</span>. All Rights Reserved</p>
		
	</div>
	
</div> -->

<section class="footer">

    <div class="share">
        <a href="#" class="btn">facebook</a>
        <a href="#" class="btn">twitter</a>
        <a href="#" class="btn">instagram</a>
        <a href="#" class="btn">pinterest</a>
        <a href="#" class="btn">linkedin</a>
    </div>
<div>
    <h1 class="credit"> Contact Us : <span> 71 271 156 </span></h1>
    <h1 class="credit"> Email : <span> Panadora.rest@gmail.com </span></h1>
    <h1 class="credit"> Aall rights reserved!   </h1>

</section>

</body>
</html>