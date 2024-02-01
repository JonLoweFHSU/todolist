<?php
print_r($_GET);
print_r($_post);

//$firstName = htmlspecialchars($_GET['first']);
//$lastName = htmlspecialchars($_GET['last']);

$firstName = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_SPECIAL_CHARS);
$lastName = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_SPECIAL_CHARS);

echo $firstName;
echo $lastName;

if((!empty($firstName) && !empty($lastName) )){
    echo $firstName;
    echo $lastName;  
} else {
    echo "please fill data!";
}

if(isset($_GET['first']) && isset($_GET['last'])){
    $firstName = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $firstName;
    echo $lastName;
} else {
    echo "not set";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getting data</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <h1>web processor</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <label for="first"> First name: </label>
    <input type="text" id="first" name="first" autocomplete="off">
    <label for="last"> Last name: </label>
    <input type="text" id="last" name="last" autocomplete="off">

    <div>
        <button type="submit">Submit</button>
        <button type="submit" formmethod="post"> Submit using POST</button>
        <button type="reset"> Reset </button>
    </div>
    </form>

</body>
</html>