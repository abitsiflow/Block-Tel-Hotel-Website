const checkin = document.getElementById("checkin");
const checkout = document.getElementById("checkout");
const guestName = document.getElementById("name");
const guestEmail = document.getElementById("email");
const specialRequests = document.getElementById("requests");
const roomType = document.getElementById("room-type");

//For Button
const submitForm = document.getElementById("submit-form");

submitForm.onclick = function(event){
    event.preventDefault();

    if(checkin.value == "" ||checkout.value == "" || guestName.value == "" || guestEmail.value == "" ||roomType.value == "")
        {
        return alert("Please Fill up the Fields ");
    }else{
        submitForm.onclick;
        console.log("Check in: ", checkin.value);
        console.log("Check out: ", checkout.value);
        console.log("Guest's Full Name: ", guestName.value);
        console.log("Guest Email: ", guestEmail);
        console.log("Guest Special Request: ", specialRequests);
        console.log("Room type: ", roomType);
        alert("Form has been submitted! Thank you for choosing Block-Tel!");   
    }
}



