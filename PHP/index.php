<?php 
include 'Car.php';
include 'Account.php';

$car = new Car('AMQ123', new Account('Kevin Lopez', 'KLO123'));
$car->printDataCar();

?>