<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="submit_feedback.css?=1.1">
    <title>Database survey</title>
</head>
<body>
    <img src="../images/LOGO22.png" class="logo">    

    

    <header class="header">
        <nav class="topnav">
            <a href="../HomePage/Homepage.php" class="homebutton">Home</a>
        </nav>
    </header>
    <div class="container">
        <h1 class="title">survey</h1>
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback_id = $_POST['feedback_id'];
    $response = $_POST['response'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO response (feedback_id, response) VALUES (?, ?)");
    $stmt->bind_param("is", $feedback_id, $response);

    // Execute
    if ($stmt->execute()) {
        echo "Response recorded successfully. Thank you! <a href='../HomePage/Homepage.php'>Go back</a>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>
</div>
</html>
