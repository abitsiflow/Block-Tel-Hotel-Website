<?php

$connection = mysqli_connect(
    "localhost"
    "root"
    "guests_booked"
    mysqli_query($connection, $sql);
)

if(!$connection){
    die "Connection Failed";
}

$sql = "select * from guests_booked";

$result = mysqli_query($connection, $sql);
?>