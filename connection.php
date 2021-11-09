<?php
$connection = mysqli_connect("localhost","root","","my_shop");
if (!isset($connection)){
    die("connection failed!");
}