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


$schritte_hase = 0;
$schritte_igel = 0;
$ziel = 70;
$runden = 0;

while($ziel > $schritte_hase && $ziel > $schritte_igel){
    $zufall_hase = rand(1,5);
    $zufall_igel = rand(1,3);

	$runden++;
	
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
}

echo "Der Igel / Die Igelin hat ".$schritte_igel." Schritte gemacht"."<br>";
echo "Der Hase / Die Hasin hat ".$schritte_hase." Schritte gemacht"."<br>";
echo "In: ".$runden." Runden"."<br>";

if($schritte_hase >= 70){
	echo "Hase / Hasin hat gewonnen";
}
else{
	echo "Igel / Igelin hat gewonnen";
}
?>
</body>
</html>