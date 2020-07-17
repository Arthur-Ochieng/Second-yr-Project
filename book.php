
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/all.js"></script>
    <link rel="stylesheet" href="css/styles.css">

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

    <!-- Booking -->
    <div class="container" id="orderform">
        <h2 class="quotation">Request A Quotation:</h2><br>
        <form action="booking.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <div class="header1">Desired date of relocation:</div>
                    <input type="date" name="date" value size="40" class="form-control" placeholder="Date" required>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="header1">Select Type of Service:</div>
                    <select name="service" value size="1" class="form-control" required>
                        <option value="" >Select Service</option>
                        <option value="House moving">House Moving - 4000</option>
                        <option value="Office Moving">Office Moving - 2000</option>
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="header1">Select Type of Vehicle:</div>
                    <select name="vehicle" value size="1" class="form-control" required>
                        <option value="">Select Vehicle</option>
                        <option value="Pickup_Truck">Pickup Truck - 1500</option>
                        <option value="mediumSize-truck">Medium Size Truck - 2000</option>
                        <option value="Large-truck">Large Truck - 3000</option>
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="header1" id="floating-panel">Location:From
                        <input type="text" name="whereFrom" size="40" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="header1">Location:To
                        <input type="text" name="whereTo" size="40" class="form-control" required>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-8">
                    <textarea id="textArea" class="form-control" name="extra-info" id="extra-info" cols="100" rows="5" placeholder="Additional information"></textarea>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-2">   
                    <button type="submit" name="submit" value="submit" id="button_1" class="btn btn-dark">Submit</button><br><br>
                </div>
            </div>
        </form>
    </div>

    <!-- End of booking -->
        
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