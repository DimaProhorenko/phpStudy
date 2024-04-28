<?php

namespace Http;

class Invoice
{

    private array $data = [];

    private function process(float $amount, string $description)
    {
        echo "{$amount} -> {$description}";
    }

    public function __call(string $name, array $arguments)
    {
        if (method_exists($this, $name)) {
            call_user_func_array([$this, $name], $arguments);
        }
    }

    public function __get(string $name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }

    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    public function __isset(string $name)
    {
        return array_key_exists($name, $this->data);
    }

    public function __unset(string $name)
    {
        if (array_key_exists($name, $this->data)) {
            unset($this->data[$name]);
        }
    }

    public function __toString(): string
    {
        return 'Invoice object';
    }

    // private int $value;

    // public function __construct($value)
    // {
    //     $this->value = $value;
    // }

    // public function __get(string $name)
    // {
    //     if (property_exists($this, $name)) {
    //         return $this->$name;
    //     }
    //     return null;
    // }

    // public function __set(string $name, $value): void
    // {
    // }
}
