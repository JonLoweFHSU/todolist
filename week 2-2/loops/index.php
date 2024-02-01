<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>
        <?php
        #while loop
        $counter = 0;
        while($counter < 5) {
            echo $counter . "<br>";
            $counter++;
        }

        #for loop
        $message = null;
        for($counter = 10; $counter >0; $counter-- ){
            $message .= $counter . "<br>";
        }
        echo $message;

        #while loop for arrays
        $arr = array('jon', 'sam', 'paul');
        while($counter < count($arr)){
            echo $arr[$counter] . "<br>";
            $counter++;
        }
        
        #for loop for arrays
        for($counter = 0; $counter < count($arr); $counter++){
            echo $arr[$counter] . "<br>";
        }

        ?>
    </h1>
</body>
</html>