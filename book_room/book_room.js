const checkin = document.getElementById("checkin");
const checkout = document.getElementById("checkout");
const guestName = document.getElementById("name");
const guestEmail = document.getElementById("email");
const specialRequests = document.getElementById("requests");
const guests = document.getElementById("guests");
const roomType = document.getElementById("room-type");

//For Button
const submitForm = document.querySelector("form");

submitForm.addEventListener ("submit", async function(event){
    event.preventDefault();

    if(checkin.value == "" ||checkout.value == "" || guestName.value == "" || guestEmail.value == "" ||roomType.value == "" || guests.value == ""){
            alert("Please Fill up the Fields ")
        return;
    }
        const formData = new FormData(submitForm);

        try{
            const response = await fetch(submitForm.action, {
                method: "POST",
                body: formData
            });

            const result = await response.text();
            console.log(result);
            alert("Thank you for choosing Block-Tel Website!");
            submitForm.reset();
        }catch(err){
            console.error(err);
            alert("Something went wrong. Please Try Again");
        }
  
    
});



