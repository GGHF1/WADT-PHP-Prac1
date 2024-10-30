<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV series form</title>
    <link rel="stylesheet" href="../css/formstyle.css">
</head>
<body>
    <h1>Enter TV Series Information</h1>
    <form action="submit.php" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        
        <label for="year">Year of Release:</label>
        <input type="number" id="year" name="year" required><br><br>
        
        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" step="0.1" required><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <footer>
        Current Date and Time: 
        <?php 
            include 'time.php'; 
            echo getCurrentDateTime(); 
        ?>
    </footer>
</body>
</html>