<?php

namespace App;

class Invoice
{
    private string $id;
    public function __construct(private float $amount)
    {
        $this->id = uniqid('invoice_');
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function __toString()
    {
        return "{$this->id} -> \${$this->amount}";
    }
}
