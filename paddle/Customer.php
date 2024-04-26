<?php

namespace paddle;

use \Notification\Email;

require_once 'Notification/Email.php';

class Customer
{
    public function __construct()
    {
        var_dump(new Email());
    }
}
