<?php
session_start();
$username = $_SESSION['username'];
?>  
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Homepage.css?=1.1">
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
                <a href="../profile_page/profile_page.php">Profile</a>
                <a href="../MainPage/MainPage.php">Log Out</a>
            </div>
        </div>
    
        
        <header class="header">
            <nav>
                <a href="..\contact_page\contact_page.html">Contact</a>
                <a href="..\courses_page\courses_page.html">Courses</a>

            </nav>
        </header>

        <h1 class="ava">Available surveys</h1>

        <section class="section">
            <div class="survey">
                <h2 class="class-survey">survey</h2>
                <div class="submission">
                <a class="buttonstyle" href="../Surveypage/surveypage.php">submit</a>
                </div>
                <div class="infocontainer">
                <h5  class="date">2023-2024</h5>
                <h5 class="admin">Published by ####</h5>
                </div>
            </div>
        </section>

    

        <footer class="footer">
        </footer>
    </body>
    </html>