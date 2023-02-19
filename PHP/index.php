<?php 
require_once('UberX.php');
require_once('Account.php');

$uberX = new UberX('AMQ123', new Account('Kevin Lopez', 'KLO123'), 'Chevrolet', 'Sail');
$uberX->printDataCar();

?>