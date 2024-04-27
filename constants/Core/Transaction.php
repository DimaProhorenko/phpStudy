<?php

namespace Core;

class Transaction
{

    private string $status;

    public function __construct()
    {
        $this->setStatus(Status::PENDING);
    }


    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
}
