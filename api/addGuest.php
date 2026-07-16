<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fullname = $_POST["guest-fullname"];
    $checkin = $_POST["guest-checkin"];
    $checkout = $_POST["guest-checkout"];
    $email = $_POST["guest-email"];
    $specialReqs = $_POST["guest-specialReqs"];
    $roomType = $_POST["guest-roomType"];
    $guests = $_POST["guests"];


    $sql = "insert into guests_status (guest_fullname, guest_email, guest_roomType, guest_specialRequests, guest_checkin, guest_checkout, guests)
    values('$fullname','$email', '$roomType', '$specialReqs', '$checkin', '$checkout', '$guests')";

    $result = mysqli_query($connection, $sql);

    if($result){
        echo ("Successfully Added!");
    }else{
        echo ("FAILED TO ADDED :<");
    }
}

?>