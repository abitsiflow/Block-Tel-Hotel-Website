<?php
include "db.php";

$fullname = $_POST["fullname"];
$checkin = $_POST["checkin"];
$checkout = $_POST["checkout"];
$email = $_POST["guest_email"];
$specialReqs = $_POST["specialReqs"];
$roomType = $_POST["roomType"];

$sql = "insert into guests_status (guest_fullname, guest_email, guest_roomType, guest_specialRequests, guest_checkin, guest_checkout)
values('$fullname', '$checkin', '$checkout', '$email', '$specialReqs', '$roomType')
";

$result = sqli_query($connection, $sql);

if($result){
    echo ("Successfully Added!");
}else{
    echo ("Failed to Add :(");
}
?>