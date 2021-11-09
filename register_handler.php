<?php

if (isset($_POST["btn_reg"])){
    $Name = $_POST["name"];
    $email = $_POST["email"];
    $Password = $_POST["password"];

    require_once "connection.php";

    $insertQuery = "INSERT INTO `subscribers`(`id`, `name`, `email`, `password`) VALUES (null,'$Name','$email','$Password')";

    $save = mysqli_query($connection, $insertQuery);
    if (isset($save)){
        echo "Registration succesful!";

    }else{
        echo "Registration failed!";
    }


}