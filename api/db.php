<?php

$connection = mysqli_connect(
    "localhost",
    "root",
    "",
    "guests_booked"
);
$sql = "select * from guests_status";

 mysqli_query($connection, $sql);

if(!$connection){
    die ("Connection Failed");
}

$result = mysqli_query($connection, $sql);
?>