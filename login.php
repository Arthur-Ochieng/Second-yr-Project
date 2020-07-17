<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/all.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>
<body>
    <!--navbar-->
    <div class="fixed-top">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Hamisha Movers</label>
                <ul class="links">
                    <li><a class="active arthur" href="index.php"><b>Home</b></a></li>
                    <li><a class="arthur" href="about.php"><b>About</b> </a></li>
                    <li><a class="arthur" href="services.php"><b>Service</b></a></li>
                    <li><a class="arthur warning" href="login.php"><b>Book now</b></a></li>
                    <li><a class="arthur" href="contact.php"><b>Contacts</b></a></li>
                </ul>
        </nav>
    </div>
    <!--end of navbar-->

    <!-- Login -->
    <div class="container row" id="login">
        <div class="col-md-4 edit">
            <img src="css/person2.svg" alt="" width="500px">
        </div>
        <div class="col-md-4 login-container">
            <form id="form-login" action="log-in.php" method="POST">
                <img class="avatar" src="css/avatar.svg">
                <h2>Welcome</h2>
                <div class="input-div one">
                    <p>Username</p>
                    <input class="input-field" type="text" name="username">
                </div>
                <div class="input-div two">
                    <p>Password</p>
                    <input class="input-field" type="password" name="password">
                </div>
                <input type="submit" name="login" value="LOGIN" class="btn btn-lg btn-block btn-success"><hr>
                <a href="registration.php">Sign up if not a member</a>
            </form>  
        </div>
    </div>
    <!-- End of login -->

    <!--contact-->
    <section id="contact">
        <div class="container"><br><br>
            <div class="rave">
                <div class="space">
                    <i class="fas fa-shipping-fast fa-5x"></i><br><br>
                    <p><em>You move on, while we move out</em></p>
                </div>
                <div class="space">
                    <h4>SERVICES</h4><br>
                    <p>House moving services</p>
                    <p>Office moving services</p>
                    <p>About us</p>
                    <p>Book Now</p>
                </div>
                <div class="space">
                    <h4>CONTACT US</h4><br>
                    <p>Riverside Drive</p>
                    <p>Nairobi Kenya</p>
                    <i class="fas fa-phone-alt"></i>
                    <p class="pes">+254 789 645 383</p>
                    <i class="fas fa-envelope"></i>
                    <p class="pes2">info@hamisha.co.ke</p><br>
                    <h4>SOCIALS</h4><br>

                    <div class="icons2 ">
                        <i class="fab fa-twitter-square mr-3 fa-2x"></i>
                        <i class="fab fa-facebook-square mr-3 fa-2x"></i>
                        <i class="fab fa-tumblr-square fa-2x"></i>
                    </div>
                </div>
                <div class="space">
                    <h4>NEWSLETTER</h4><br>
                    <p>Sign up to our newsletter and get exclusive offers and
                        news straight to your inbox!
                    </p>
                    <span>Your email(required):</span>
                    <form action="" id="myForm">
                        <input type="email" id="email" class="form-control" placeholder="Enter email" required><br>
                        <button class="btn btn-lg btn-block btn-success" id="button" type="submit">Sign up</button>
                    </form>
                </div>
            </div><br><br><br>
            <span class="hamisha text-center">Hamisha Movers © 2020. All Rights Reserved</span>
        </div>
    </section>
    <!--end of contact-->
    
    <script src="js/jquery-3.4.1.js.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>