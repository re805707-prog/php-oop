<?php
require_once "SystemTracker.php";
require_once "PaymentGatewayInterface.php";

class PayPalGateway extends SystemTracker implements PaymentGatewayInterface
{
    public function processPayment(float $amount): bool
    {
        echo "Processing PayPal payment of $amount";
        return true;
    }

    public function getGatewayName(): string
    {
        return "PayPal";
    }
}