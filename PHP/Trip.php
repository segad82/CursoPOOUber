<?php
require_once('User.php');
require_once('Car.php');
require_once('Route.php');
require_once('Payment.php');

class Trip {
    public $id;
    public $user;
    public $car;
    public $route;
    public $payment;
    public $amount;
    public $progress;
    public $completed;

    public function __construct($user, $car, $route, $payment){
        $this->user = $user;
        $this->car = $car;
        $this->route = $route;
        $this->payment = $payment;
    }
}
?>