<?php
    session_start();
    include "conn.php";

    if(empty($_SESSION['user_id']) || empty($_SESSION['status'])){
        ?>
<script>
location = "index.php";
</script>
<?php
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title> Panadora resturant </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
    .rating_stars {
        margin-top: 15px;
        display: inline-block;
        font-size: 20px;
        font-weight: 200;
        color: #918f8f;
        position: relative;
    }

    .rating_stars span .fa,
    .rating_stars span.active-low .fa-star-o,
    .rating_stars span.active-high .fa-star-o {
        display: inline-block;
    }

    .rating_stars span .fa-star-o {
        display: inline-block;
    }

    .rating_stars span.s.active-high .fa-star {
        display: inline-block;
        color: #feb645;
    }

    .rating_stars span.s.active-low .fa-star-half-o {
        display: inline-block;
        color: #feb645;
    }

    .rating_stars span.r {
        position: absolute;
        top: 0;
        height: 20px;
        width: 10px;
        left: 0;
    }

    .rating_stars span.r.r0_5 {
        left: 0px;
    }

    .rating_stars span.r.r1 {
        left: 10px;
        width: 11px;
    }

    .rating_stars span.r.r1_5 {
        left: 21px;
        width: 13px;
    }

    .rating_stars span.r.r2 {
        left: 34px;
        width: 12px;
    }

    .rating_stars span.r.r2_5 {
        left: 46px;
        width: 12px;
    }

    .rating_stars span.r.r3 {
        left: 58px;
        width: 11px;
    }

    .rating_stars span.r.r3_5 {
        left: 69px;
        width: 12px;
    }

    .rating_stars span.r.r4 {
        left: 81px;
        width: 12px;
    }

    .rating_stars span.r.r4_5 {
        left: 93px;
        width: 12px;
    }

    .rating_stars span.r.r5 {
        left: 105px;
        width: 12px;
    }

    /* Just to make things look pretty ;) */
    </style>

</head>

<body>

    <!-- header section starts  -->

    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Panadora</a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="index.php">Menu</a>
            <a href="#about">About</a>
        </nav>
        <a href="signup.php" class="btn">Sign Up</a>

    </header>


    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> our customers <span>reviews</span> </h1>

        <div class="box-container">
            <?php
        if(isset($_POST["submit"])  && (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["feedback"])  && !empty($_POST["rating"])) ){
            
            $a=$crud->insertfeedback($_SESSION['user_id'],$_POST["feedback"]);
            $b=$crud->insertrating($_SESSION['user_id'],$_POST["rating"]);
            if(!$a && !$b){
                ?>
            <script>
            alert("Error adding your feedback.");
            </script>
            <?php
            }
            else{
                 ?>
            <script>
            location = "feedback.php";
            </script>
            <?php
            }
        }
        else{
            $d=$crud->getfeedback();
            
            $feedback_userid = 1;
            $userid=5;
            $username=1;
            $userimage=1;

                $f=1;
                while($c = $d->fetch(PDO::FETCH_ASSOC)){
                   $e=$crud->getuser();
                   $f=$c['f_desc'];
                   $feedback_userid = $c['user_id'];
                   while($k = $e->fetch(PDO::FETCH_ASSOC)){
                       $userid=$k['user_id'];
                       if($userid == $feedback_userid){
                            $username = $k['user_name'];
                            $userimage = $k['user_image'];
                            break;
                       }

                   }
                ?>


            <div class="box">
                <?php echo '<img alt='.$username.' src=images/'.$userimage.' >' ?>
                <h3><?php echo $username; ?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p><?php echo $f; ?></p>
            </div>

            <?php
                }

        }
        
        
    ?>


        </div><br>





        <div class="btn1" onclick="myFunction()">Your Feedback.
            <span class="popuptext" id="myPopup"></span>
        </div>

        <div class="PopupScreen ">
            <form class="Design" action="feedback.php" method="POST">
                <div class="c-logo">
                    <a href="#" class="logo"><i class="fas fa-utensils"></i>
                        <span style="font-size: 20px ; font-weight: bolder;
                color:#666;"> Panadora</span>
                    </a>
                </div>


                <div class="inputBox content">

                    <label for="fname">Name:</label>
                    <input type="text" id="fname" name="name" placeholder="name" class="input">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="email" class="input">

                    <label for="feedback">Feedback:</label>
                    <textarea placeholder="Write your feedback here:" name="feedback" id="feedback" cols="30"
                        rows="5"></textarea>


                </div>
                <div>
                    <span class="rating_stars rating_0" style="margin-left:26%; margin-top:-5px">
                        <span class='s' data-low='0.5' data-high='1'><i class="fa fa-star-o"></i><i
                                class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class='s' data-low='1.5' data-high='2'><i class="fa fa-star-o"></i><i
                                class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class='s' data-low='2.5' data-high='3'><i class="fa fa-star-o"></i><i
                                class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class='s' data-low='3.5' data-high='4'><i class="fa fa-star-o"></i><i
                                class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class='s' data-low='4.5' data-high='5'><i class="fa fa-star-o"></i><i
                                class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>

                        <span class='r r0_5' data-rating='1' data-value='0.5'></span>
                        <span class='r r1' data-rating='1' data-value='1'></span>
                        <span class='r r1_5' data-rating='15' data-value='1.5'></span>
                        <span class='r r2' data-rating='2' data-value='2'></span>
                        <span class='r r2_5' data-rating='25' data-value='2.5'></span>
                        <span class='r r3' data-rating='3' data-value='3'></span>
                        <span class='r r3_5' data-rating='35' data-value='3.5'></span>
                        <span class='r r4' data-rating='4' data-value='4'></span>
                        <span class='r r4_5' data-rating='45' data-value='4.5'></span>
                        <span class='r r5' data-rating='5' data-value='5'></span>
                    </span>
                    <input type="hidden" name="rating" id="rating_val" value="0" />
                </div>
                <div class="btns">
                    <input type="submit" value="Submit" name="submit" class="btn2"
                        style="margin-right: 1rem;margin-left: 0.5rem;">
                    <input type="button" value="Close" class="btn2" style="margin-left: 4rem;" onclick="myFunction()">
                </div>


            </form>
        </div>

    </section>

    <!-- review section ends -->
    <section class="about" id="about">
        <h1 class="heading">Our <span>Story</span></h1>
        <div class="content">
            <p><b>Panadora</b> is your place to enjoy good food with the comfort and familiarity of home!
                <b>Panadora</b> was born out of a vision to provide you a simple yet warm and comfortable dining
                experience! We only strive to give you the warmest of welcome and service you truly deserve! We only
                serve the heartiest, healthiest dishes, lovingly prepared and generously served. Being at
                <b>Panadora</b> is being with family! <b>Panadora</b> is yours!
            </p>
        </div>

    </section>

    <!-- about section ends -->


    <!-- footer section  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="btn">facebook</a>
            <a href="#" class="btn">twitter</a>
            <a href="#" class="btn">instagram</a>
            <a href="#" class="btn">pinterest</a>
            <a href="#" class="btn">linkedin</a>
        </div>

        <h1 class="credit"> created by <span> mr. web designer </span> | all rights reserved! </h1>

    </section>
    <script src="script.js"></script>
    <script>
    jQuery(document).ready(function($) {

        $('.rating_stars span.r').hover(function() {
            // get hovered value
            var rating = $(this).data('rating');
            var value = $(this).data('value');
            $(this).parent().attr('class', '').addClass('rating_stars').addClass('rating_' + rating);
            highlight_star(value);
        }, function() {
            // get hidden field value
            var rating = $("#rating").val();
            var value = $("#rating_val").val();
            $(this).parent().attr('class', '').addClass('rating_stars').addClass('rating_' + rating);
            highlight_star(value);
        }).click(function() {
            // Set hidden field value
            var value = $(this).data('value');
            $("#rating_val").val(value);

            var rating = $(this).data('rating');
            $("#rating").val(rating);

            highlight_star(value);
        });

        var highlight_star = function(rating) {
            $('.rating_stars span.s').each(function() {
                var low = $(this).data('low');
                var high = $(this).data('high');
                $(this).removeClass('active-high').removeClass('active-low');
                if (rating >= high) $(this).addClass('active-high');
                else if (rating == low) $(this).addClass('active-low');
            });
        }
    });
    </script>
</body>

</html>