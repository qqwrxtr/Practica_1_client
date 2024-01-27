<?php
session_start();

// Check if the user is logged in (name is set in the session)
if (!isset($_SESSION['name'])) {
    // Redirect to login page if not logged in
    header('Location: /diana/index.php');
    exit();
}

// Logout logic
if (isset($_POST['logout'])) {
    // Clear all session data
    session_unset();
    // Destroy the session
    session_destroy();
    // Redirect to the home page
    header('Location: /diana/index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Account Details</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/diana/images/background.jpg'); /* Add your background image path */
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 20px;
        }

        .container {
            height: 100vh; /* 100% of the viewport height */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h2 {
            margin-bottom: 30px;
        }

        .btn {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div>
        <h2 style='color:black'>Welcome, <?php echo $_SESSION['name']; ?>!</h2>
    
        <!-- Button to go back to the previous page -->
        <a href="javascript:history.back()" class="btn btn-primary">Go Back</a>

        <!-- Logout button form -->
        <form method="post" action="">
            <button type="submit" class="btn btn-danger" name="logout">Logout</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS and Popper.js CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
