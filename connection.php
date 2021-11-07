<?php
$connection = mysqli_connect("localhost","root","","THE SHOP");
if (!isset($connection)){
    die("connection failed!!!");
}