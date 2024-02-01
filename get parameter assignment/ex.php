<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>User Information</title>
    
</head>
<body>

<div class="output-container">
    <?php
    // Check if required parameters are present
    if (isset($_GET['firstname'], $_GET['lastname'], $_GET['age'])) {
        // Clean input parameters to prevent XSS attacks
        $firstname = htmlspecialchars($_GET['firstname']);
        $lastname = htmlspecialchars($_GET['lastname']);
        $age = htmlspecialchars($_GET['age']);

        // Output first sentence
        echo "<p>Hello, my name is $firstname $lastname.</p>";

        // Output second sentence based on age
        echo "<p>I am $age years old and... ";
        if ($age >= 18) {
            echo "I am old enough to vote in the United States.</p>";
        } else {
            echo "I am not old enough to vote in the United States.</p>";
        }

        // Output third sentence - Calculate days based on age
        $days = $age * 365;
        echo "<p>Based on my age, I have lived for approximately $days days.</p>";

        // Output current date
        echo "<p>Current date: " . date("Y-m-d") . "</p>";

    } else {
        // Output message if required parameters are not submitted
        echo "<p>Please provide values for firstname, lastname, and age parameters.</p>";
    }
    ?>
</div>

</body>
</html>
