<?php
$numbers = array(1, 2, 3, 4, 2, 8, 6, 1, 9, 5);

echo "Массив ";
foreach($numbers as $element)
{
    echo  "$element ";
}

echo "<br>Числа которые больше предыдущих ";
$num = count($numbers);
for($i = 1;$i < $num;$i++)
{
  if($numbers[$i - 1] < $numbers[$i])
   echo  "$numbers[$i] ";
}

$sum = 0;
for($i = 0;$i < $num;$i++)
{
        $sum += $numbers[$i];
}
echo "<br>Сумма елементов " .$sum;
echo "<br>Среднее значение елементов " .$sum / $num;

$arr = array();

for($i = 0;$i < $num;$i++)
{
    if($numbers[$i] % 2 != 0)
     $arr[] = $numbers[$i];
}
rsort($arr);
echo "<br>Нечетные элементы массива по убыванию " ;
foreach($arr as $element)
{
    echo  "$element ";
}
?>
