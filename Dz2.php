<?php
$numbers = array("31-12-2018", "16-01-2019","18-01-2019", "28-10-2020");
$num = count($numbers);
for($i = 1;$i < $num;$i++)
{
    $datediff = strtotime($numbers[$i]) - strtotime($numbers[$i - 1]); // получим разность дат (в секундах)
    echo  $numbers[$i - 1] ." - $numbers[$i]  - " .floor($datediff / (60 * 60 * 24)) ." разница дней<br>";
}
?>