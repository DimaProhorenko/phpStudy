<?php

namespace App;

use App\Exceptions\MissingBillingInfo;

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
            throw new \InvalidArgumentException('Invalid invoice amount');
        }

        if (empty($this->customer->getBillingInfo())) {
            throw new MissingBillingInfo();
        }
        echo "Processing \${$amount} invoice - ";
        sleep(1);
        echo 'OK' . PHP_EOL;
    }
}
