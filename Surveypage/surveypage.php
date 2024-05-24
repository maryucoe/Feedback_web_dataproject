<?php
include 'db.php';

// Fetch the first feedback (for simplicity, assuming one active feedback at a time)
$sql = "SELECT * FROM feedback ORDER BY ID DESC LIMIT 1";
$result = $conn->query($sql);
$feedback = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="surveypage.css?=1.1">
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
        <h1 class="title">Database survey</h1>
        <h3 class="last">last submission on #######</h3>
        <form action="save_response.php" method="POST">
        <input type="hidden" name="feedback_id" value="<?php echo $feedback['ID']; ?>">
        <p><?php echo $feedback['question']; ?></p>
        <?php
        $options = explode(",", $feedback['option']);
        foreach ($options as $option) {
            echo "<label><input type='radio' name='response' value='" . htmlspecialchars($option) . "'> " . htmlspecialchars($option) . "</label><br>";
        }
        ?>
        <div class="submission">
        <button type="submit" class="submitbutton">Submit Response</button>
        </div>
</form>

</html>