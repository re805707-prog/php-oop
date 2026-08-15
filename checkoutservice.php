<?php
require_once 'PaymentGatewayInterface.php';

class CheckoutService
{ 

    private $paymentGateway;

    private PaymentGatewayInterface $gateway;

    public function __construct(PaymentGatewayInterface $gateway)
    {
        $this->gateway = $gateway;
    }

    public function pay(float $amount): void
    {
        $this->gateway->processPayment($amount);
    }
}


