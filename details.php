<?php
    //connect to the database
    $conn = mysqli_connect("localhost", "root", "", "project");

    //check connection
    if (!$conn){
        echo "Connection Error: ". mysqli_connect_error();
    }


    //delete
    if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
        $sql = "DELETE FROM Book WHERE id = $id_to_delete";

        if(mysqli_query($conn, $sql)){
            //success
            header('Location: admin.php');
        }{
            //failure
            echo'query error: ' . mysqli_error($conn);
        }
    }


    //check GET request id parameter
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        
        //make the sql
        $sql = "SELECT * FROM Book WHERE id = $id";

        //get the query result
        $result = mysqli_query($conn, $sql);

        //fetch result in array format
        $books = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);
    }
?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/all.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
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

        <div class="container">
            <?php if($books):?>
                <h4><?php echo htmlspecialchars($books['username']);?></h4>
                <p> <?php echo htmlspecialchars($books['firtsname']);?> </p>
                <p> <?php echo htmlspecialchars($books['secondname']);?> </p>
                <h5> <?php echo htmlspecialchars($books['email']);?> </h5>
                <p> <?php echo htmlspecialchars($books['phone']);?> </p>
                <h6> <?php echo htmlspecialchars($books['address']);?> </h6>

                <!-- delete from -->
                <br><form action="detail.php" method="POST">
                    <input type="hidden" name="id_to_delete" value="<?php echo $books['id']?>">
                    <input type="submit" name="delete" value="Delete" class="btn btn-dark">
                </form>
                
            <?php else: ?>
            <?php endif; ?>
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


