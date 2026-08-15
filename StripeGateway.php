<?php
require_once 'SystemTracker.php';
require_once 'PaymentGatewayInterface.php';

class StripeGateway extends SystemTracker implements PaymentGatewayInterface
{
    public function processPayment(float $amount): bool
    {
        echo "Processing Stripe payment of $amount";
        return true;
    }

    public function getGatewayName(): string
    {
        return "Stripe";
    }
}