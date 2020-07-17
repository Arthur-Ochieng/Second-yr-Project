<?php
session_start();
//connect database
    $db = mysqli_connect("localhost", "root", "", "project"); 
    $_SESSION['message'] = "log in!";
           
    if(isset($_POST['register'])){
       
       $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
       $secondname = mysqli_real_escape_string($db, $_POST['secondname']);
       $username = mysqli_real_escape_string($db, $_POST['username']);
       $password = mysqli_real_escape_string($db, $_POST['password']);
       $password2 = mysqli_real_escape_string($db, $_POST['password2']);
       $email = mysqli_real_escape_string($db, $_POST['email']);
       $phone = mysqli_real_escape_string($db, $_POST['phone']); 
       $address = mysqli_real_escape_string($db, $_POST['address']); 

       if ($password == $password2) {
           //create user
           $password = ($password);//hash password before storing for security purposes
           $sql = "INSERT INTO Users(userID,firstname, secondname, username, password, email, phone, address) VALUES(NULL, '$firstname', '$secondname', '$username', '$password', '$email', '$phone', '$address')";
           mysqli_query($db, $sql) or die(mysqli_error($db));
           header("Location: book.php"); 
           $_SESSION['userID']=$userID;
           $_SESSION['message'] = "You are now logged in!";
           $_SESSION['username'] = $username;//redirect to home page
       }
       else{
            $_SESSION['message'] = "The two passwords do not match!";
       }
    }
?>