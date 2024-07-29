<?php

namespace AriefKarditya\MenambahLibrary;

class Customer
{
    public function __construct(private string $name)
    {
        # constructor.
    }

    public function sayHello(string $name): string
    {
        return "Hello $name! my name is $this->name";
    }
}
