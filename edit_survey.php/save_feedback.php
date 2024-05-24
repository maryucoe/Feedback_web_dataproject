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
    $questions = $_POST['questions'];
    $options = "Yes,No";  // Fixed options for all questions

    foreach ($questions as $question) {
        if (!empty($question)) {
            $stmt = $conn->prepare("INSERT INTO feedback (question, option) VALUES (?, ?)");
            if (!$stmt) {
                echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
                exit;
            }
            
            $stmt->bind_param("ss", $question, $options);

            if (!$stmt->execute()) {
                echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                exit;
            }
            $stmt->close();
        }
    }

    echo "Feedback created successfully. <a href='..\instructor_mainepage\instructor_mainpage.php'>Go back</a>";
}

$conn->close();
?>

        </div>
    </div>

    </div>
</body>
</html>
