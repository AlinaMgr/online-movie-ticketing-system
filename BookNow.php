<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now - Movie Ticket Booking</title>
    <link rel="stylesheet" href="bookNow.css">
</head>
<body>
    <header>
        <div class="logo">MovieTicket</div>
        <nav>
            <ul>
                <li><a href="home1.php">Home</a></li>
                <li><a href="movies.php">Movies</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="./user/user_login.php" class="login-btn">Login</a></li>
                <li><a href="./user/user_reg.php" class="login-btn">Sign up</a></li>
            </ul>
        </nav>
    </header>

    <section class="booking">
        <div class="container">
            <h1>Book Your Tickets</h1>
            <form action="booking_confirmation.php" method="post" class="booking-form">
                <div class="form-group">
                    <label for="movie">Select Movie</label>
                    <select id="movie" name="movie" required>
                        <option value="Movie 1">Movie 1</option>
                        <option value="Movie 2">Movie 2</option>
                        <option value="Movie 3">Movie 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="showtime">Select Showtime</label>
                    <select id="showtime" name="showtime" required>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="1:00 PM">1:00 PM</option>
                        <option value="4:00 PM">4:00 PM</option>
                        <option value="7:00 PM">7:00 PM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="seats">Number of Seats</label>
                    <input type="number" id="seats" name="seats" min="1" max="10" required>
                </div>
                <button type="submit" class="btn">Book Now</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 MovieTicket. All rights reserved.</p>
    </footer>
</body>
</html>
