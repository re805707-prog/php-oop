<?php
require_once 'SystemTracker.php';
require_once 'PaymentGatewayInterface.php';
require_once 'PayPalGateway.php';
require_once 'StripeGateway.php';
require_once 'CheckoutService.php';

$stripe = new StripeGateway();
$checkoutService = new CheckoutService($stripe);
$checkoutService->pay(150.00);
echo "<br>";
$paypal = new PayPalGateway();
$checkoutService = new CheckoutService($paypal);
$checkoutService->pay(75.50);
echo "<br>";

echo "Total transactions: " . SystemTracker::getTotalTransactions();