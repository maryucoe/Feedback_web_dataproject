<?php
session_start();
$username = $_SESSION['username'];
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="instructor_mainpage.css?=1.1">
    <title>Home</title>
</head>
<body>
 
   
<img src="../images/LOGO22.png" class="logo">
        
        <div class="user-container">
            <a class="user-name"><?php echo htmlspecialchars($username); ?></a>
            <div class="user">
            <img src="../images/contact-person-red-icon-free-png.webp" alt="user">
            </div>
            <div class="user-dropdown">
                <a href="..\instructor_user\instructor_user.php">Profile</a>
                <a href="..\MainPage\MainPage.php">Log Out</a>
            </div>
        </div>
    
    
        <nav class="topnav">
            <a href="#">History</a>
        </nav>
    <h1 class="ava">Posted surveys</h1>
    <a class="option" href="../edit_survey.php/edit_survey.php">new survey </a>

    <section class="section">
        <div class="survey">
            <h2 class="class-survey" >New survey</h2>
            <a class="buttonstyle" href="../edit_survey.php/edit_survey.php">Edit</a>
            <div class="infocontainer">
            <h5  class="date">2023-2024</h5>
            <h5 class="admin">Published by <?php echo htmlspecialchars($username); ?></h5>
            </div>
        </div>

    </section>

   

    <footer class="footer">
    </footer>
</body>
</html>