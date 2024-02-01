<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>User Information</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['firstname'], $_GET['lastname'], $_GET['age'])) {
        $firstname = htmlspecialchars($_GET['firstname']);
        $lastname = htmlspecialchars($_GET['lastname']);
        $age = htmlspecialchars($_GET['age']);

        echo "<div class='output-container'>";
        echo "<p>Hello, my name is $firstname $lastname.</p>";
        echo "<p>I am $age years old and... ";
        echo ($age >= 18) ? "I am old enough to vote in the United States.</p>" : "I am not old enough to vote in the United States.</p>";
        $days = $age * 365;
        echo "<p>Based on my age, I have lived for approximately $days days.</p>";
        echo "<p>Current date: " . date("Y-m-d") . "</p>";
        echo "</div>";
    } else {
        echo "<div class='form-container'>";
        echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='GET'>";
        echo "<label for='firstname'>First Name:</label>";
        echo "<input type='text' id='firstname' name='firstname' required>";

        echo "<label for='lastname'>Last Name:</label>";
        echo "<input type='text' id='lastname' name='lastname' required>";

        echo "<label for='age'>Age:</label>";
        echo "<input type='number' id='age' name='age' required>";

        echo "<button type='submit'>Submit</button>";
        echo "</form>";
        echo "</div>";
    }
}
?>

</body>
</html>
