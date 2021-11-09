<?php
if (isset($_GET["user_id"])){
    require_once "connection.php";
    $deleteQuery = "DELETE FROM `subscribers` WHERE 0";
    $delete = mysqli_query($connection, $deleteQuery);
if (isset($delete)){
    header("location:subscribers.php");
}else{
    echo "Failed to delete";
}
}