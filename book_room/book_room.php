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
     <!-- Bootstrap CSS (needed for the carousel component) -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
                <!-- Bootstrap carousel: swap the slide-2 / slide-3 image paths for real alternate hotel photos -->
                <div class="header-carousel">
                    <div id="bookRoomCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#bookRoomCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#bookRoomCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#bookRoomCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/Block-Tel-Hotel-Room.png" alt="Block-Tel Hotel room with warm lighting" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/deluxe_room.png" alt="Block-Tel Hotel alternate view" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/family_suited.png" alt="Block-Tel Hotel alternate view" decoding="async">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#bookRoomCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bookRoomCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <p class="eyebrow">Reserve Your Stay</p>
                <h1>Book a Room</h1>
                <p class="tagline">Choose your dates and we'll take care of the rest.</p>
                    
            </section>
        </header>

 
        <section class="booking-panel" id="booking-form" aria-label="Booking request form">
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
    <!-- Bootstrap JS (needed for the carousel to slide/click) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="book_room.js"></script>
</body>
</html>