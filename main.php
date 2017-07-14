<?php

include './vehicle.php';
include './toll-plaza.php';

/**
 * Class main which will take input as vehicle details from cli
 */

/*echo "Enter vehicle no : ";
$vehicleNo = fopen ("php://stdin","r");
fwrite(STDOUT, "vehicle no : " . $vehicleNo);
echo "vehicle no : " . $vehicleNo;

echo "Enter no of wheels : ";
$wheels = fopen ("php://stdin","r");

echo "Enter no of axle : ";
$axle = fopen ("php://stdin","r");

echo "Is vehicle is of transport type ? type 1 if yes. type 0 if no : ";
$type = fopen ("php://stdin","r");

echo "Is vehicle on government duty ? type 1 if yes. type 0 if no : ";
$duty = fopen ("php://stdin","r");*/

$vehicleNo = 'NH-10 AT 4208';
$wheels = 6;
$axle = 0;
$type = 1;
$duty = 0;

$vehicle = new vehicle($vehicleNo, $wheels, $axle, $type, $duty);
$tollPlaza = new tollPlaza('MH');
$tollPlaza->calculateTax($vehicle);

?>