<?php
require_once('Payment.php');

class Card extends Payment {
    public $number;
    public $cvv;
    public $date;

    public function __construct($number, $cvv, $date) {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->date = $date;
    }
}
?>