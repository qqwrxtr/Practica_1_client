<header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <div class="logo">
        <a href="/diana/pages/index.php"><img src="/diana/images/logo.svg" alt="Ajur Lux"></a>
    </div>

    <nav class="navbar">
        <a href="/diana/pages/index.php" class="activ">Home</a>
        <a href="/diana/pages/aboutus.php">About Us</a>
        <a href="/diana/pages/services.php">Services</a>
        <a href="/diana/pages/shop.php">Shop</a>
        <a href="/diana/pages/news.php">News</a>
        <a href="/diana/pages/contact.php">Contact</a>

        <?php

session_start();
        // Check if the 'admin' session variable exists and has a value of 1
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
            echo '<a href="/diana/admin_panel/index.php">Admin</a>';
        }
        ?>
    </nav>

    <div>
        <a href="/diana/pages/account_details.php" class="button" style='margin: 0 20px 0 0 ;'>Your Account</a>
        <a href="/diana/pages/appointment.php" class="button">Appointment</a>
    </div>
</header>
