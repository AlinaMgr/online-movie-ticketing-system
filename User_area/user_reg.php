<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Movie Ticket Booking</title>
    <link rel="stylesheet" href="user_reg.css">
</head>
<body>
    <header>
        <div class="logo">MovieTicket</div>
        <nav>
            <ul>
                <li><a href="/home1.php">Home</a></li>
                <li><a href="/movies.php">Movies</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/contact.php">Contact</a></li>
                <li><a href="user_login.php" class="login-btn">Login</a></li>
                <li><a href="user_reg.php" class="login-btn">Sign up</a></li>
            </ul>
        </nav>
    </header>

    <section class="register">
        <div class="container">
            <h1>Create an Account</h1>
            <form action="#" method="post" class="register-form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <button type="submit" class="btn">Sign Up</button>
            </form>
            <p>Already have an account? <a href="user_login.php">Login here</a></p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 MovieTicket. All rights reserved.</p>
    </footer>
</body>
</html>
