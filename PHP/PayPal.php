<?php
require_once('Payment.php');

class PayPal extends Payment {
    public $email;

    public function __construct($email){
        $this->email = $email;
    }
}
?>