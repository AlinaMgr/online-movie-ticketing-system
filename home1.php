<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="home1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to MovieTicket</h1>
            <p>Book tickets for the latest movies online!</p>
            <a href="movies.php" class="btn">Book Now <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="movies">
        <h2>Now Showing</h2>
        <div class="movie-list">
            <div class="movie">
                <img src="cover_camera.jpg" alt="Movie 1">
                <h3>Movie Title 1</h3>
                <p>Genre | Duration</p>
                <a href="bookNow.php" class="btn">Book Ticket</a>
            </div>
            <div class="movie">
                <img src="cover_camera.jpg" alt="Movie 2">
                <h3>Movie Title 2</h3>
                <p>Genre | Duration</p>
                <a href="bookNow.php" class="btn">Book Ticket</a>
            </div>
            <div class="movie">
                <img src="cover_camera.jpg" alt="Movie 3">
                <h3>Movie Title 3</h3>
                <p>Genre | Duration</p>
                <a href="bookNow.php" class="btn">Book Ticket</a>
            </div>
        </div>
        
    </section>

    <footer>
        <p>&copy; 2024 MovieTicket. All rights reserved.</p>
    </footer>
</body>
</html>
