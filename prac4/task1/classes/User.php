<?php

class User
{
    public string $name;
    public string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getInfo(): string
    {
        return "{$this->name} ({$this->email})";
    }
}
