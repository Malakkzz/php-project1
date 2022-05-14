<?php
session_start();
include "conn.php";
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
    <link rel="stylesheet" href="css/menu.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Panadora</a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="Menu.php">Menu</a>
            <a href="Resrvation.php">Reservation</a>
            <a href="about.php">About</a>
        </nav>
        <a href="login.php" class="btn">Sign Up</a>

    </header>


    <section>
        <div class="wrapper">
            <div class="title">
                <h4><span>Fresh food for good health </span>Our Menu</h4>
            </div>
        </div>
    </section>

    <section class="review" id="review">

        <h1 class="heading"> popular <span>items</span> </h1>

        <div class="item-container">
            <?php
            $items = $crud->getitem();
            if (isset($_POST['breakfast'])) {
                $_SESSION['categoryid'] = 1;
                while ($a = $items->fetch(PDO::FETCH_ASSOC)) {
                    if ($a['category_id'] == 1) {
            ?>
                        <div class="box">
                            <span class="price"> <?php echo $a['item_price']?></span>
                            <img src="<?php echo $a['item_image']?>" alt="">
                            <h3><?php echo $a['item_name']?></h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p><?php echo $a['item_desc']?></p>
                        </div>

            <?php
                    }
                }
            }
            if (isset($_POST['lunch'])) {
                $_SESSION['categoryid'] = 2;
                while ($a = $items->fetch(PDO::FETCH_ASSOC)) {
                    if ($a['category_id'] == 2) {
            ?>
                        <div class="box">
                            <span class="price"> <?php echo $a['item_price']?></span>
                            <img src="<?php echo $a['item_image']?>" alt="">
                            <h3><?php echo $a['item_name']?></h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p><?php echo $a['item_desc']?></p>
                        </div>

            <?php
                    }
                }
            }
            if (isset($_POST['dinner'])) {
                $_SESSION['categoryid'] = 3;
                while ($a = $items->fetch(PDO::FETCH_ASSOC)) {
                    if ($a['category_id'] == 3) {
            ?>
                        <div class="box">
                            <span class="price"> <?php echo $a['item_price']?></span>
                            <img src="<?php echo $a['item_image']?>" alt="">
                            <h3><?php echo $a['item_name']?></h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p><?php echo $a['item_desc']?></p>
                        </div>

            <?php
                    }
                }
            }
            if (isset($_POST['dessert'])) {
                $_SESSION['categoryid'] = 4;
                while ($a = $items->fetch(PDO::FETCH_ASSOC)) {
                    if ($a['category_id'] == 4) {
            ?>
                        <div class="box">
                            <span class="price"> <?php echo $a['item_price']?></span>
                            <img src="<?php echo $a['item_image']?>" alt="">
                            <h3><?php echo $a['item_name']?></h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p><?php echo $a['item_desc']?></p>
                        </div>

            <?php
                    }
                }
            }
            if (isset($_POST['drinks'])) {
                $_SESSION['categoryid'] = 5;
                while ($a = $items->fetch(PDO::FETCH_ASSOC)) {
                    if ($a['category_id'] == 5) {
            ?>
                        <div class="box">
                            <span class="price"> <?php echo $a['item_price']?></span>
                            <img src="<?php echo $a['item_image']?>" alt="">
                            <h3><?php echo $a['item_name']?></h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p><?php echo $a['item_desc']?></p>
                        </div>

            <?php
                    }
                }
            }
            if (isset($_POST['ice-cream'])) {
                $_SESSION['categoryid'] = 6;
                while ($a = $items->fetch(PDO::FETCH_ASSOC)) {
                    if ($a['category_id'] == 6) {
            ?>
                        <div class="box">
                            <span class="price"> <?php echo $a['item_price']?></span>
                            <img src="<?php echo $a['item_image']?>" alt="">
                            <h3><?php echo $a['item_name']?></h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p><?php echo $a['item_desc']?></p>
                        </div>

            <?php
                    }
                }
            }
            ?>
            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-1.jpg" alt="">
                <h3>tasty burger</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="Menu.php" class="btn">Check it out !</a>
            </div>

            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-2.jpg" alt="">
                <h3>tasty cakes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="Menu.php" class="btn">Check it out !</a>
            </div>

            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-3.jpg" alt="">
                <h3>tasty sweets</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="Menu.php" class="btn">Check it out !</a>
            </div>
        </div>

    </section>
    <div class="wrapper2">
        <div class="addItem">
            <a href="#" class="btn">Add Item</a>
        </div>
    </div>




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
            <h1 class="credit"> All rights reserved! </h1>

    </section>

</body>

</html>