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
    <link rel="stylesheet" href="css/login.css">

</head>

<body>


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <div class="c-logo">
                            <a href="#" class="logo"><i class="fas fa-utensils"></i>
                                <span style="font-size: 20px ; font-weight: bolder;
                color:#666;"> Panadora</span>
                            </a>

                        </div>
                        <h2 class="form-title">Log in</h2>
                        <form action="index.php" method="POST" class="register-form" id="register-form">

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group ">
                                <input type="submit" value="Log in" name="login-submit" class="btn">
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/p-2.jpg" alt="sing up image" style="border-radius:10px"></figure>
                        <div class="back-to-home">
                            <a href="index.php" class="btn" style="width:100%">Back to home</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>