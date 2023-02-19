<?php
require_once('Car.php');

class UberVan extends Car {
    public $typeCarAccepted = array();
    public $seatsMaterial = array();

    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial){
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }

    public function setPassengers($passengers) {
        if($passengers == 6)
            $this->passengers = $passengers;
        else
            echo "Necesita ingresar 6 pasajeros";
    }
}
?>