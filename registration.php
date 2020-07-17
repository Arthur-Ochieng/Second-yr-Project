<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/all.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Registration-form</title>
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

    <div class="row">
        <div class="col-md-5" id="disp">
            <img src="css/blue.jpeg" alt="" height="654px" width="500px">
        </div>
        <div class="col-md-7" id="reg"><br><br><br><br><br>
            <h2><b>Sign up for Hamisha!</b></h2>
            <p>Already a member?<a href="login.php"> Sign up</a></p><br>
            <form action="register.php" method="POST" class="container">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="firstname" value size="40" class="form-control" placeholder="Firstname" required>
                    </div><br>
                    <div class="col-md-4">
                        <input type="text" name="secondname" value size="40" class="form-control" placeholder="Second Name" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="username" value size="40" class="form-control" placeholder="Username" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">
                        <input type="password" name="password" value size="40" class="form-control" placeholder="Password" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">
                        <input type="password" name="password2" value size="40" class="form-control" placeholder="Confirm Password" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">
                        <input type="email" name="email" value size="40" class="form-control" placeholder="Email" required>
                    </div>
                </div><br>
                <div class="row"> 
                    <div class="col-md-4">
                        <input type="number" name="phone" value size="40" class="form-control" placeholder="Phone" required><br>
                    </div><br>
                </div>
                <div class="row"> 
                    <div class="col-md-4">
                        <input type="number" name="address" value size="40" class="form-control" placeholder="Address" required>
                    </div>
                </div><br>
                <button type="submit" value="Register" name="register" class="btn btn-dark">Register</button>
            </form>
        </div>
    </div><br><br>

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
</body>
</html>