<?php

namespace App\Exceptions;

use Throwable;

class MissingBillingInfo extends \Exception
{
    protected $message = 'Customer Billing Info is missing';
}
