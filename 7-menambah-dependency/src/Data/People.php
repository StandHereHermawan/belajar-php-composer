<?php

namespace AriefWorks\Data;

class People
{
    public function __construct(private ?string $name)
    {
        # constructor
    }

    public function sayHello(?string $name = null): ?string
    {
        return "Hello $name! my name is $this->name.";
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
