<?php
if (isset($_POST["btn_update"])){
    $subscriberId = $_POST["id"];
    $updatedName = $_POST["name"];
    $updatedEmail = $_POST["email"];
    $updatedPassword = $_POST["password"];

    require_once "connection.php";

    $updateQuery = "UPDATE `subscribers` SET `name`='$updatedName',`email`='$updatedEmail',`password`='$updatedPassword' WHERE id='$subscriberId'";

    $update = mysqli_query($connection, $updateQuery);
    if (isset($update)){
        header("location:subscribers.php");
    }else{
        echo "Update error!";
    }

}
