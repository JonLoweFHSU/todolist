<main class="main-results">
<?php
$cards = null;

for($i=1; $i <=12; $i++){
    $result = $number * $i;
    $cards .= "
    <div class='card' tabindex='0'>
        <div class ='card-front'> {$number} X {$i} </div>
        <div class='card-back'>{$result}</div>
        </div>
        ";
}
echo $cards;
?>

</main>