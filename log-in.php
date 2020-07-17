<?php
    session_start();

    //connect to the server and connect database
    $conn = mysqli_connect("localhost", "root", "", "project");

    if(!$conn)
    {
        die("Connection failed".mysqli_connect_error());
    }

    if(isset($_POST['login']))
    {
        //get the values passed from the login.php file
        $username = $_POST['username'];
        $password = $_POST ['password'];

        //to prevent mysql injections
        $username = stripcslashes($username);
        $password = stripcslashes($password);

        //Query the database for the user
        $query = "SELECT * FROM Users WHERE username ='$username' AND password ='$password'";
        $query_run = mysqli_query($conn, $query);
        $arthur = mysqli_fetch_assoc($query_run);

        if(mysqli_num_rows($query_run)>0)
        {
        $_SESSION['userID']= $arthur['userID'];
        
        // $consumerID = $_SESSION['userID'];
        // echo $consumerID;
        

         header('location: book.php');
        }
        else
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "SELECT * FROM admin WHERE adminlog ='$username' AND pass ='$password'";
            $query_run2 = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run2)>0)
            {
                $_SESSION['username']= $username;
                header('location: admin.php');
            }
            else
            {
                echo "WRONG EMAIL OR PASSWORD";
            }
        }
    }
    else 
        echo "WRONG EMAIL OR PASSWORD";
?>