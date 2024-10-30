<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Results</title>
    <link rel="stylesheet" href="../css/submitstyle.css">
</head>
<body>
    <div class="content">
        <?php
        function displayTVSeriesInfo($title, $description, $year, $rating) {
            echo "<h2>TV Series Information</h2>";
            echo "<p><strong>Title:</strong> $title</p>";
            echo "<p><strong>Description:</strong> $description</p>";
            echo "<p><strong>Year of Release:</strong> $year</p>";
            echo "<p><strong>Rating:</strong> $rating</p>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = htmlspecialchars($_POST['title']);
            $description = htmlspecialchars($_POST['description']);
            $year = htmlspecialchars($_POST['year']);
            $rating = htmlspecialchars($_POST['rating']);
            
            displayTVSeriesInfo($title, $description, $year, $rating);
        }
        ?>
        
    </div>
    
    <footer>
        Current Date and Time: 
        <?php 
            include 'time.php'; 
            echo getCurrentDateTime(); 
        ?>
    </footer>
</body>
</html>