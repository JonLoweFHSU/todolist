<?php
// phpinfo()

$name = "Sam"; //string
$age = 22;
$isStudent = true;
$height = 5.11;
$classes = ['back-1', 'front-2', 'mobile2'];
$greeting = "hello ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $name ?>
    <?php echo $age; 
    echo "<br>"
    ?>
    <?= $height ?>

<?= $classes[2] ?>

<!-- concatenation -->
<h1><?php echo $greeting . $name ?></h1>
<h1><?php echo "my name is" . $name . "<br>" ?></h1>
<h1><?php $greeting .= "how are you {$name}";
echo $greeting
?></h1>

<?php echo $age +=10 ?>;
<?php echo $age *=10 ?>

</body>
</html>