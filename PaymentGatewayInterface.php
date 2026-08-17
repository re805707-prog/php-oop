<?php
interface PaymentGatewayInterface
{
    public function processPayment(float $amount): bool;
    public function getGatewayName(): string;
}