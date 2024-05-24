<?php
session_start();
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$role = $_SESSION['role'];
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read more</title>
    <link rel="stylesheet" href="instructor_user.css">
</head>
<body>
    <img src="../images/logo.png" class="logo">
        <nav class="topnav">
            <a href="..\instructor_mainepage\instructor_mainpage.php">Home</a>
        </nav>

        <div class="cover"></div>
        <a class="user-name"><?php echo htmlspecialchars($username);?></a>
        <img src="../images/contact-person-red-icon-free-png.webp" class="user-icon">
        <div class="container">
        <div class="cover1">User info<br><br><br>
        Email: <?php echo htmlspecialchars($email); ?><br><br>
        Role: <?php echo htmlspecialchars($role);?>
        </div>
        <div class="cover2">Course details<br><br>
            ------------------<br>
            ------------------<br>
            ------------------
        </div>
        </div>
        <div class="info"></div>
        <div class="details"></div>

    <footer class="footer"></footer>
</body>
</html>