<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Block-Tel Hotel - Rooms</title>
    <link rel="stylesheet" href="../global_css/global.css">
    <link rel="stylesheet" href="room_page.css">
</head>
<body>

    <nav id="site-nav">
        <span class="nav-mark">Block&#8209;Tel</span>
        <ul class="nav-links">
            <li><a href="../about_us_page/about_us.php">About Us</a></li>
            <li><a href="../Room_page/room_page.php" aria-current="page">Rooms</a></li>
            <li><a href="../book_room/book_room.php">Book a Room</a></li>
            <li><a href="../Contact_us_page/contact_form.php">Contact</a></li>
            <li><a href="../Home_page/index.php">Home</a></li>
        </ul>
    </nav>
    
    <main>
        <header class="rooms-hero">
            <p class="eyebrow">Stay Your Way</p>
            <h1>Room Details</h1>
            <p>Choose a warm, block-built space made for quiet nights, bright mornings, and easy hotel comfort.</p>
        </header>

        <section class="rooms-list" aria-label="Room details">
            <article class="room-detail image-left reveal-row">
                <figure class="room-image reveal-image">
                    <img src="../images/Block-Tel-Hotel-Room.png" alt="Standard Block-Tel room with a blue bed, desk, windows, and warm lighting" decoding="async">
                </figure>
                <div class="room-copy reveal-copy">
                    <p class="room-kicker">Standard Room</p>
                    <h2>Cozy Room</h2>
                    <h3>Price: 30 Emeralds</h3>
                    <p>
                        A comfortable room for guests who want a simple, relaxing stay. The space includes a soft bed,
                        study corner, storage chest, bedside lighting, and wide windows with a street view.
                    </p>

                    <ul class="room-features">
                        <h3>Room Features</h3>
                        <li>Good for 1-2 guests</li>
                        <li>Bed, desk, bookshelf, and storage</li>
                        <li>Warm interior lighting</li>
                    </ul>
                    <a class="room-button" href="../book_room/book_room.php">Book This Room</a>
                </div>
            </article>

            <article class="room-detail image-right reveal-row">
                <figure class="room-image reveal-image">
                    <img src="../images/deluxe_room.png" alt="Deluxe Block-Tel room with fireplace, canopy bed, lounge seats, and potion counter" loading="lazy" decoding="async">
                </figure>
                <div class="room-copy reveal-copy">
                    <p class="room-kicker">Deluxe Room</p>
                    <h2>Grand Suite</h2>
                    <h3>Price: 40 Emeralds</h3>
                    <p>
                        A bigger room with a refined atmosphere, perfect for longer stays or guests who want extra space.
                        It features a canopy bed, lounge area, fireplace, shelves, and decorative details throughout.
                    </p>
                    <ul class="room-features">
                        <h3>Room Features</h3>
                        <li>Good for 2-4 guests</li>
                        <li>Lounge seats and fireplace area</li>
                        <li>Premium room decor</li>
                    </ul>
                    <a class="room-button" href="../book_room/book_room.php">Book This Room</a>
                </div>
            </article>

            <article class="room-detail image-left reveal-row">
                <figure class="room-image reveal-image">
                    <img src="../images/Gemini_Generated_Image_e9vfnle9vfnle9vf.png" alt="Spacious Block-Tel room interior with detailed wood furniture and hotel lighting" loading="lazy" decoding="async">
                </figure>
                <div class="room-copy reveal-copy">
                    <p class="room-kicker">Family Room</p>
                    <h2>Shared Stay</h2>
                    <h3>Price: 50 Emeralds</h3>
                    <p>
                        A roomy setup made for friends or family visiting together. The layout gives everyone space to
                        rest, organize their items, and enjoy the signature Block-Tel wooden interior style.
                    </p>
                    <ul class="room-features">
                        <h3>Room Features</h3>
                        <li>Good for groups and families</li>
                        <li>Extra storage and open space</li>
                        <li>Comfort-focused room layout</li>
                    </ul>
                    <a class="room-button" href="../book_room/book_room.php">Book This Room</a>
                </div>
            </article>
        </section>
    </main>

     <footer id="site-footer">
        <p>&copy; Block-Tel Hotel</p>
    </footer>
    
    <script src="room_page.js"></script>
</body>
</html>
