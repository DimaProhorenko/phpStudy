<?php

namespace App\Exceptions;

class InvoiceException extends \Exception
{

    public static function missingBillingInfo(): static
    {
        return new static('Customer Billing Info is missing');
    }

    public static function invalidAmount(float $amount): static
    {
        return new static("Invalid invoice amount: {$amount}");
    }
}
