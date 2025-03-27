<?php
require_once('db.php');
$email = $_POST['email'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeatPassword'];

if(empty($email) || empty($password)){
    echo "Please enter all the required fields.";
}
else{
    if($password != $repeatPassword){
        echo "Password did not match.";
    }
    else{
        $sql = "INSERT INTO `users` (email, password) VALUES ('$email', '$password')";
        if($conn->query($sql) === TRUE){
            echo "New record created successfully";
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
}
