<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? "South Gujarat Railways") ?></title>
    <meta name="description" content="South Gujarat Railways - Safe, Fast and Reliable railway services.">
    <link rel="stylesheet" href="<?= (strpos($_SERVER["PHP_SELF"], "/admin/") !== false) ? "../" : "" ?>css/style.css">
</head>
<body>

<header class="site-header">
    <div class="container nav-wrapper">
        <a href="<?= (strpos($_SERVER["PHP_SELF"], "/admin/") !== false) ? "../" : "" ?>index.php" class="brand">
            <div class="brand-logo">🚆</div>
            <div>
                <strong>SOUTH GUJARAT RAILWAYS</strong>
                <span>Safe • Fast • Reliable</span>
            </div>
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Open menu">☰</button>

        <nav class="main-nav" id="mainNav">
            <a class="active" href="index.php">Home</a>
            <a href="trains.php">Trains</a>
            <a href="booking.php">Book Ticket</a>
            <a href="pnr.php">PNR Status</a>
            <a href="my-bookings.php">My Bookings</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
        </nav>

        <div class="auth-actions">
            <a href="login.php" class="login-link">Login</a>
            <a href="register.php" class="register-btn">Register</a>
        </div>
    </div>
</header>
