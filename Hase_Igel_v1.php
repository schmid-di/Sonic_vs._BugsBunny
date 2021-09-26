<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$schritte_igel = 0;
$schritte_hase = 0;
$counter_igel = 0;
$counter_hase = 0;
$ziel = 70;

while($schritte_igel < $ziel){

$zufall_igel = rand(1,3);

switch ($zufall_igel) {
    case 1:
        $schritte_igel = $schritte_igel + 4;
        break;
    case 2:
        $schritte_igel = $schritte_igel - 3;
        break;
    case 3:
        $schritte_igel = $schritte_igel + 1;
        break;
    }
$counter_igel++;

}
while($schritte_hase < $ziel){

$zufall_hase = rand(1,5);

switch ($zufall_hase) {
    case 1:
        $schritte_hase = $schritte_hase + 0;
        break;
    case 2:
        $schritte_hase = $schritte_hase + 9;
        break;
    case 3:
        $schritte_hase = $schritte_hase - 9;
        break;
    case 4:
        $schritte_hase = $schritte_hase + 3;
        break;
    case 5:
        $schritte_hase = $schritte_hase - 1;
        break; 
    }
$counter_hase++;
}
if($counter_hase < $counter_igel){
    echo "Der Hase hat mit ".$counter_hase." gewonnen.";
}
else{
    echo "Der Igel hat mit ".$counter_igel." Zügen gewonnen.";
}
?>
</body>
</html>