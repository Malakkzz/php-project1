<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Panadora resturant </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>


</head>

<body>

    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Panadora</a>
    
        <div id="menu-bar" class="fas fa-bars"></div>
    
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="Menu.php">Menu</a>
            <a href="Reservation.php">Reservation</a>
            <!--<a href="#popular">popular</a>        <a href="#order">order</a>-->
            <a href="#AboutUs2">About</a>
            
        </nav>
        <?php
            if(empty($_SESSION['status'])){
        
        ?>
        <div>
            <a href="login.php" class="btn" >Log In</a>
            <a href="signup.php" class="btn">Sign Up</a>
        </div>
        
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

    <section>
    
    <div class="container1">
        
        <img src="images/pancakes-2291908__340.webp" alt="food">
        
        <div class="about_detailes">

            <!-- <h1 class="heading1"> ABOUT <span>US</span> </h1> -->

            <h2>We Provide Good Quality Food For Your Family</h2>
            <p><b class="Pandora">Panadora</b> is your place to enjoy good food with the comfort and familiarity of home!</p><br>
            <p><b class="Pandora">Panadora</b> was born out of a vision to provide you a simple yet warm and comfortable dining experience!</p><br>
            <p>We only strive to give you the warmest of welcome and service you truly deserve! </p><br>
            <p>We only serve the heartiest, healthiest dishes, lovingly prepared and generously served.</p><br>
            <p>Being at <b class="Pandora">Panadora</b> is being with family! <b class="Pandora">Panadora</b> is yours!</p><br><br>
        
            <!-- <p><b class="Address">Our Location: Beirut,<b class="Pandora"> Lebanese University</b></b></p><br> -->

            <!-- <div id="map"></div>
            <script
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
              defer
            ></script> -->
        </div>
        
    </div>
</section><br><br>
<section>
    <h1 class="heading"> Our <span>Location</span> </h1>
    <!-- <p><b class="Address">Our Location: Beirut,<b class="Pandora"> Lebanese University</b></b></p><br> -->

             <div id="map"></div>
            <script
              src="https://maps.googleapis.com/maps/api/js?callback=initMap&v=weekly"
              defer
            ></script>
</section>
    

    <section class="AboutUs2" id="AboutUs2">
        <h1 class="heading"> Organization’s <span>story</span></h1><br><br>
        <div class="AboutUs"><img src="images/silverware-1667988__340.webp" alt="Resturant"></div>
        
        <div class="AboutUs1">
            
            <h2> Organization’s story</h2>
            <p>Organizer, Craig Stephen, opened the first PanadoraRestaurant in Beirut, Lebanon on September 6, 2021.</p><br>
            <p><b class="Pandora">  Panadora</b> Panadora Restaurant are well known with a substantial gathering of people including families, </p><br>
            <p>kids, seniors, and business experts. Our benevolent condition is perfect for praising unique events, </p><br>
            <p> facilitating a business lunch, or assembling for a flavorful dinner with loved ones.</p><br>
            <p>Open day by day for lunch and dinner,’ Panadora offers a choice of naturally arranged things</p><br>
            <P>utilizing just the best fixings accessible. Top picks incorporate Certified Angus Beef, crisp fish,</P><br><P>rotisserie chicken.</P><br>
            <p><b class="Pandora">Contact Us : </b><b class="Phone">71 271 156</b></p>
            <!-- <p>
                Organization’s story
    
    Organizer, Craig Stephen, opened the first PanadoraRestaurant in Beirut, Lebanon on September 6, 2021.
    
    Panadora Restaurant are well known with a substantial gathering of people including families, kids, seniors, and business experts. Our benevolent condition is perfect for praising unique events, facilitating a business lunch, or assembling for a flavorful dinner with loved ones.
    
    Open day by day for lunch and dinner,’ Panadora offers a choice of naturally arranged things utilizing just the best fixings accessible. Top picks incorporate Certified Angus Beef, crisp fish, rotisserie chicken, 
    
    
            </p> -->
        </div>
        
    </section><br><br><br>
    

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
        <h1 class="credit"> All rights reserved!   </h1>
    
    </section>
    
    <!-- scroll top button  -->
    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>
    
    <!-- loader  -->
    <!-- <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div> -->
    
    
    <!-- custom js file link  -->
    <script src="script.js"></script> 
    
</body>
</html>