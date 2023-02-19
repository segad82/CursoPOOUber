<?php 
require_once('UberX.php');
require_once('UberVan.php');
require_once('Account.php');

$uberX = new UberX('AMQ123', new Account('Kevin Lopez', 'KLO123'), 'Chevrolet', 'Sail');
$uberX->setPassengers(4);
$uberX->printDataCar();

$uberVan = new UberVan('KLO123', new Account('Pablo Lopez', 'PLO123'), [], []);
$uberVan->setPassengers(6);
$uberVan->printDataCar();

?>