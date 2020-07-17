<?php
    session_start();
    //connect to the database
    $conn = mysqli_connect("localhost", "root", "", "project");

    //check connection
    if (!$conn){
        echo "Connection Error: ". mysqli_connect_error();
    }

    if(isset($_POST['submit'])){

        // mysql select query
        $query = "SELECT * FROM `Users`";

        //query
        $result = mysqli_query($conn, $query);
        $options = "";
        while($row = mysqli_fetch_array($result))
        {
            $options = $options."<option>$row[1]</option>";
        }

        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $service = mysqli_real_escape_string($conn, $_POST['service']);
        $vehicle = mysqli_real_escape_string($conn, $_POST['vehicle']);
        $whereFrom = mysqli_real_escape_string($conn, $_POST['whereFrom']);
        $whereTo = mysqli_real_escape_string($conn, $_POST['whereTo']);
        $consumerID = $_SESSION ['userID'];
        echo $consumerID;
        //insert to my databases
        $sql = "INSERT INTO Book (bookID, date, service, vehicle, whereFrom, whereTo, consumerID) VALUES (NULL, '$date', '$service', '$vehicle', '$whereFrom', '$whereTo', '$consumerID')";

        //save to database
        if (mysqli_query($conn, $sql)){
            //success
            header('Location: payment.php');
        }
        else{
            //error
            echo 'query error: ' . mysqli_error($conn);
        }
    }
?>