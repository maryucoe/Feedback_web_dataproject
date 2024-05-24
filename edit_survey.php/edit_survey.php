<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit_survey.css?=1.1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <form id="feedbackForm" action="save_feedback.php" method="POST">
        <div id="questionContainer">
            <!-- Initial question block -->
            <div class="questionBlock">
                <label for="questions[]">Question:</label>
                <input type="text" name="questions[]" required>
                <p>Response Options: Yes <input type="radio" name="options[0]" value="Yes" checked> No <input type="radio" name="options[0]" value="No"></p>
            </div>
        </div>
        <button type="button" id="addQuestion" class="submitbutton">Add Another Question</button>
        <div class="submission">
        <button type="submit" class="submitbutton">Publish</button>
</div>
    </form>

    <script>
        $(document).ready(function() {
            var questionNumber = 0; // Keep track of question count for naming
            $('#addQuestion').click(function() {
                questionNumber++;
                var newQuestion = `<div class="questionBlock">
                    <label for="questions[]">Question:</label>
                    <input type="text" name="questions[]" required>
                    <p>Response Options: Yes <input type="radio" name="options[${questionNumber}]" value="Yes" checked> No <input type="radio" name="options[${questionNumber}]" value="No"></p>
                </div>`;
                $('#questionContainer').append(newQuestion);
            });
        });
    </script>
       
</body>
</html>