<?php
    //connect to the server and connect database
    $conn = mysqli_connect("localhost", "root", "", "project");

    if(!$conn){
        die("Connection failed".mysqli_connect_error());
    }

    if(isset($_POST['login']))
    {

        //get the values passed from the login.php file
        $username = $_POST['username'];
        $password = $_POST['password'];

        //to prevent mysql injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);

        //Query to the database
        $query = "SELECT * FROM Users WHERE username ='$username' AND password ='$password'";
        $query_run = mysqli_query($conn, $query);


        if(mysqli_num_rows($query_run)>0)
        {
            $_SESSION['username']= $username;
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
                $_SESSION['email']= $email;
                header('location: admin.php');
            }
            else
            {
                echo "WRONG EMAIL OR PASSWORD";
            }
        }
    }else 
    echo "WRONG EMAIL OR PASSWORD";
?>