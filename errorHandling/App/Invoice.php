<?php

namespace App;

use App\Exceptions\InvoiceException;

class Invoice
{
    public function __construct(public Customer $customer)
    {
    }

    /**
     * @throws InvalidArgumentException
     * @throws MissingBillingInfo
     * 
     */
    public function process(float $amount): void
    {
        if ($amount <= 0) {
            throw InvoiceException::invalidAmount($amount);
        }

        if (empty($this->customer->getBillingInfo())) {
            throw InvoiceException::missingBillingInfo();
        }
        echo "Processing \${$amount} invoice - ";
        sleep(1);
        echo 'OK' . PHP_EOL;
    }
}
