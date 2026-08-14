###  Part 1: Tracking System Stats

1. Create a base class `SystemTracker` that keeps track of how many transaction objects have been instantiated across the application.
   - Add a private static property `$totalTransactions = 0`. 
2. Increment $totalTransactions for each initialization of objects. 
3. Add a method that should return the total Transactions number across objects:
```php
public static function getTotalTransactions(): int 
```

### Part 2: Payment Gateways 
Build two classes where different payment gateways process transactions in their own way.
1. Create two classes implementing [PaymentGatewayInterface.php](PaymentGatewayInterface.php):
2. `StripeGateway`: Both must extend SystemTracker and Implements PaymentGatewayInterface, and Returns "Stripe" as the gateway name.
3. `PayPalGateway`: Both must extend SystemTracker and Implements PaymentGatewayInterface, and Returns "PayPal" as the gateway name.
4. Find a way to calculate the total number of transactions across all gateways. _hint: use SystemTracker constructor._

- Create a class `CheckoutService`:
   1. this class depends on PaymentGatewayInterface. 
   2. Add a private property `$gateway` with type-hint `PaymentGatewayInterface`. 
   3. It may accept any gateway in its constructor (PaymentGatewayInterface $gateway)
   4. Add a method:
     ```php
     public function pay(float $amount): void
     {$this->gateway->processPayment($amount)} 
     ```