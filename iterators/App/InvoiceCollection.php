<?php

namespace App;

use Traversable;

class InvoiceCollection extends Collection
{
    public function __construct(private array $invoices)
    {
        parent::__construct($invoices);
    }
}

// class InvoiceCollection implements \IteratorAggregate
// {
//     public function __construct(private array $invoices)
//     {
//     }

//     public function getIterator(): Traversable
//     {
//         return new \ArrayIterator($this->invoices);
//     }
// }

// class InvoiceCollection implements \Iterator
// {

//     public function __construct(private array $invoices)
//     {
//     }

//     public function current(): mixed
//     {
//         echo __METHOD__ . '</br>';
//         return current($this->invoices);
//     }

//     public function next(): void
//     {
//         echo __METHOD__ . '</br>';
//         next($this->invoices);
//     }

//     public function key(): mixed
//     {
//         echo __METHOD__ . '</br>';
//         return key($this->invoices);
//     }

//     public function valid(): bool
//     {
//         echo __METHOD__ . '</br>';
//         return current($this->invoices) !== false;
//     }

//     public function rewind(): void
//     {
//         echo __METHOD__ . '</br>';
//         reset($this->invoices);
//     }
// }
