<?php

interface carInterface{
    public function startEngine();
    public function stopEngine();
}

class Audi implements carInterface{
    public function startEngine(){
        echo "Audi Car Start <br />";
    }
    public function stopEngine(){
        echo "Audi Car Stop <br />";
    }
}
class Toyota implements carInterface{
    public function startEngine(){
        echo "Toyota Car Start <br />";
    }
    public function stopEngine(){
        echo "Toyota Car Stop";
    }
}

function driveCar(carInterface $car){
    $car->startEngine();
    $car->stopEngine();
}

$audi = new Audi;
$toyota = new Toyota;
driveCar($audi);
driveCar($toyota);
// $audi = new Audi();
// $audi->startEngine();
// $audi->stopEngine();

// $toyota = new Toyota();
// $toyota->startEngine();
// $toyota->stopEngine();



//payment interface
interface PaymentProcessorInterface {
    public function processPayment($amount);
}

//---------------------------------------------------------
class StripePaymentProcessor implements PaymentProcessorInterface {
    public function processPayment($amount)
    {
        //code to process payment via stripe
    }
}
class PaypalPaymentProcessor implements PaymentProcessorInterface {
    public function processPayment($amount)
    {
        //code to process payment via Paypal
    }
}

//---------------------------------------------------------
class Order {
    private $paymetProcessor;

    public function __construct(PaymentProcessorInterface $paymetProcessor)
    {
        $this->paymetProcessor = $paymetProcessor;
    }

    public function checkout($amount){
        $this->paymetProcessor->processPayment($amount);
        //code to complete the order
    }
}

//-----------------------------------------------------------
$myOrder = new Order(new StripePaymentProcessor());
$myOrder->checkout(100);

$anotherOrder = new Order(new PaypalPaymentProcessor());
$anotherOrder->checkout(50);