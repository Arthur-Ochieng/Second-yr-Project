<?php
    //connect to the database
    $conn = mysqli_connect("localhost", "root", "", "project");

    //check connection
    if (!$conn){
        echo "Connection Error: ". mysqli_connect_error();
    }

    //write query 
    $sql = 'SELECT * FROM Book';

    //make query and get the results
    $result = mysqli_query($conn, $sql);

    //fetch the resulting rows as an array
    $book = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free the result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/all.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- navbar-->
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
    <!--end of navbar -->



    <div class="container">
        <br><br><br><br><br><h4>Bookings</h4>
        <div class="row">
            <?php foreach($book as $book): ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            
                            <p><?php echo htmlspecialchars($book['date']); ?></p>
                            <p><?php echo htmlspecialchars($book['service']); ?></p>
                            <p><?php echo htmlspecialchars($book['vehicle']); ?></p>
                            <p><?php echo htmlspecialchars($book['whereFrom']); ?></p>
                            <p><?php echo htmlspecialchars($book['whereTo']); ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="details.php?id=<?php echo $book['userID']?>">MORE INFO</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div><br>
    </div>

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