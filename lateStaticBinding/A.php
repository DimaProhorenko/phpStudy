<?php

class A
{
    protected static string $value = 'A';

    public static function getValue(): string
    {
        return static::$value;
    }
}
