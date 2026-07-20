<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Block-Tel Hotel - Book Room</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../global_css/global.css">
     <link rel="stylesheet" href="book_room.css">
</head>
<body>

    <nav id="site-nav">
            <span class="nav-mark">Block&#8209;Tel</span>
            <ul class="nav-links">
                <li><a href="../about_us_page/about_us.php">About Us</a></li>
                <li><a href="../Room_page/room_page.php">Rooms</a></li>
                <li><a href="../book_room/book_room.php" aria-current="page">Book a Room</a></li>
                <li><a href="../Contact_us_page/contact_form.php">Contact</a></li>
                <li><a href="../Home_page/index.php">Home</a></li>
            </ul>
    </nav>

    <main>
        <header>
            <section id="book-room-header">
                <p class="eyebrow">Reserve Your Stay</p>
                <h1>Book a Room</h1>
                <p class="tagline">Choose your dates and we'll take care of the rest.</p>
                    
            </section>
        </header>

 
        <section class="booking-panel" id="booking-form" aria-label="Booking request form">
            <ol class="booking-flow" aria-label="Booking flow">
                <li>
                    <span>1</span>
                    <strong>Dates</strong>
                    <small>Check availability</small>
                </li>
                <li>
                    <span>2</span>
                    <strong>Room</strong>
                    <small>Select room type</small>
                </li>
                <li>
                    <span>3</span>
                    <strong>Details</strong>
                    <small>Add guest info</small>
                </li>
                <li>
                    <span>4</span>
                    <strong>Submit</strong>
                    <small>Send request</small>
                </li>
            </ol>
            <form action="../api/addGuest.php" method="POST">
                <div class="field-row">
                    <div class="form-group">
                        <label for="checkin">Check-In</label>
                        <input type="date" id="checkin" name="guest-checkin" required>
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check-Out</label>
                        <input type="date" id="checkout" name="guest-checkout" required>
                    </div>
                </div>
 
                <div class="field-row">
                    <div class="form-group">
                        <label for="guests">Guests</label>
                        <select id="guests" name="guests" required>
                            <option value="1">1 Guest</option>
                            <option value="2" selected>2 Guests</option>
                            <option value="3">3 Guests</option>
                            <option value="4">4 Guests</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="room-type">Room Type</label>
                        <select id="room-type" name="guest-roomType" required>
                            <option value="standard">Standard Room</option>
                            <option value="deluxe">Deluxe Room</option>
                            <option value="suite">Suite</option>
                        </select>
                    </div>
                </div>
 
                <div class="field-row">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="guest-fullname" autocomplete="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="guest-email" autocomplete="email" required>
                    </div>
                </div>
 
                <div class="form-group form-group--full">
                    <label for="requests">Special Requests</label>
                    <textarea id="requests" name="guest-specialReqs" rows="4" placeholder="Optional"></textarea>
                </div>
 
                <button type="submit" id="submit-form">Request Booking</button>
            </form>
        </section>
    </main>

    <footer id="site-footer">
        <p>&copy; Block-Tel Hotel</p>
    </footer>
    <script src="book_room.js"></script>
</body>
</html>
