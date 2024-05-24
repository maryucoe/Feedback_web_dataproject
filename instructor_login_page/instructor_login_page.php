<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="instructor_login_page.css">
    <title>Login</title>
</head>
<body>
    <header class="header">
        <img src="../images/logo.png" class="img">
    </header>


    <div class="container">
        <h2>NMU Instructor Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <?php
session_start(); 
$conn = mysqli_connect("localhost","root","","feedbacksystem",3307);
if (isset($_POST['submit'])) { 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT * FROM instructor WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        if ($password == $row['password']) { 
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            
            header('Location: ..\instructor_mainepage\instructor_mainpage.php');
            exit();
        } else {
            echo '<div style="color: #800000; margin-top:8px; font-size: 20px;">Incorrect password.</div>';
        }
    } else {
        echo '<div style="color: #800000; margin-top:8px; font-size: 20px;"> No user found with that email.</div>';
    }
}

mysqli_close($conn);
?>

     <input class="buttonsignin" type="submit" name="submit" value="login">
        </form>
    </div>
   

    <footer class="footer">
        <p class="copyright">All Copyrights Reserved © 2022</p>
    </footer>
</body>
</html>