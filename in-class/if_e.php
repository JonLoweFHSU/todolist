<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if else</title>
</head>
<body>
    <?php #Variables 
    $name = "Sam"; //string
    $age = 22;
    $isStudent = true;
    $height = 5.11;
    ?>

<!-- equal, not equal, strict equal, strict not equal -->
<h1><?php 
if($name == "Sam"){
    echo "Equal";
 } else {
        echo "not equal";
    }

?></h1>



<h1><?php
if(empty($amount)) {
    $message = "Amount is required!";
} else if(!is_numeric($amount)){
    $message = "Amount must be numeric";
} else if($amount < 0){
    $message = "amount must be greater than zero";
}else {
    $message = "valid amount";
}
?>
<?php echo $message ?>
</h1>

<h1><?php
if(empty($amount) || !is_numeric($amount) || $amount < 0){
    $message = "Amount is not valid";
} else if(!is_numeric($amount)){
   
    $message = "amount must be greater than zero";
}else {
    $message = "valid amount";
}
?>
<?php echo $message ?>
</h1>


<?php $amount = "10" ?>
<h1><?php
if(empty($amount) && !is_numeric($amount)) {
    $message = "Amount is not valid";
}
else {
    $message = "valid amount";
}
?>
<?php echo $message ?>
</h1>



</body>
</html>