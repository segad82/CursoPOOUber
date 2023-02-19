<?php
class Car {
    public $id;
    public $license;
    public $driver;
    protected $passengers;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function setPassengers($passengers) {
        if($passengers == 4)
            $this->passengers = $passengers;
        else
            echo "Necesita ingresar 4 pasajeros";
    }

    public function printDataCar() {
        if($this->passengers != null)
            echo "
            License: $this->license
            Driver: {$this->driver->name}
            Passengers: $this->passengers";
    }
}
?>