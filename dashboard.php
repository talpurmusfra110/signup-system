<?php
session_start();

// If user is not logged in, redirect to login page
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

// Check if session variables exist before displaying
$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : "Unknown";
$email = isset($_SESSION['email']) ? $_SESSION['email'] : "Not Provided";
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Guest";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
        }
        .dashboard-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 400px;
        }
        h2 {
            color: #333;
            margin-bottom: 10px;
        }
        .welcome-text {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background: #6e8efb;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-size: 16px;
            transition: 0.3s;
        }
        .logout-btn:hover {
            background: #5a7ae2;
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <h2>Welcome, <?php echo htmlspecialchars($fullname); ?>!</h2>
        <p class="welcome-text">Your email: <?php echo htmlspecialchars($email); ?></p>
        <p class="welcome-text">Your username: <?php echo htmlspecialchars($username); ?></p>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

</body>
</html>
