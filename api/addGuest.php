<?php
include "db.php";

$fullname = $_POST["guest-fullname"];
$checkin = $_POST["guest-checkin"];
$checkout = $_POST["guest-checkout"];
$email = $_POST["guest-email"];
$specialReqs = $_POST["guest-specialReqs"];
$roomType = $_POST["guest-roomType"];
$guests = $_POST["guests"];


$sql = "insert into guests_status (guest_fullname, guest_email, guest_roomType, guest_specialRequests, guest_checkin, guest_checkout)
values('$fullname', '$checkin', '$checkout', '$email', '$specialReqs', '$roomType', '$guests')
";

$result = mysqli_query($connection, $sql);

if($result){
    echo ("Successfully Added!");
}else{
    echo ("Failed to Add :(");
}

?>