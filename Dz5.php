<?php
$CPU = array("AMD A8-5600K","FM2","3600 (3900 Turbo Core)",4);
$CPU2 = array("AMD A6-5600","FM2","3600 (3900 Turbo Core)",3);
$motherboard = array("ASRock B450 Steel Legend", "Socket AM4", "DDR4");
$motherboard2 = array("Super Motherboard", "Socket AM4", "DDR3");
$RAM = array("AVIS AD3F1600", "DDR3",  8);
$RAM2 = array("AD3F1200", "DDR4",  8);
$data = array("Western Digital Blue", "HardDrive", "1ТБ");
$data2 = array("Super Digital", "HardDrive", "2ТБ");
$blockPower = array("Aerocool VX Plus", 600);
$blockPower2 = array("Super Power", 800);

$down = 1;
$up = 2;
for($i = 0; $i < 5; $i++)
{
    $rnd = rand($down, $up);
    switch ($rnd)
    {
        case 1:
            echo "Процессор: <br>";
            foreach($CPU as $element)
            {
                echo  "$element <br>";
            }
            $down = 3;
            $up = 4;
            break;
        case 2:
            echo "Процессор: <br>";
            foreach($CPU2 as $element)
            {
                echo  "$element <br>";
            }
            $down = 3;
            $up = 4;
            break;
        case 3:
            echo "Материнская плата: <br>";
            foreach($motherboard as $element)
            {
                echo  "$element <br>";
            }
            $down = 5;
            $up = 6;
            break;
        case 4:
            echo "Материнская плата: <br>";
            foreach($motherboard2 as $element)
            {
                echo  "$element <br>";
            }
            $down = 5;
            $up = 6;
            break;
        case 5:
            echo "Оперативная память: <br>";
            foreach($RAM as $element)
            {
                echo  "$element <br>";
            }
            $down = 7;
            $up = 8;
            break;
        case 6:
            echo "Оперативная память: <br>";
            foreach($RAM2 as $element)
            {
                echo  "$element <br>";
            }
            $down = 7;
            $up = 8;
            break;
        case 7:
            echo "Память: <br>";
            foreach($data as $element)
            {
                echo  "$element <br>";
            }
            $down = 9;
            $up = 10;
            break;
        case 8:
            echo "Память: <br>";
            foreach($data2 as $element)
            {
                echo  "$element <br>";
            }
            $down = 9;
            $up = 10;
            break;
        case 9:
            echo "Блок питания: <br>";
            foreach($blockPower as $element)
            {
                echo  "$element <br>";
            }
            $i = 6;
            break;
        case 10:
            echo "Блок питания: <br>";
            foreach($blockPower2 as $element)
            {
                echo  "$element <br>";
            }
            $i = 6;
            break;
    }
}

?>