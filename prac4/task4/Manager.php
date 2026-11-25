<?php

class Manager extends Employee
{
    public function calculateBonus(): float
    {
        return $this->applyMinBonus($this->salary * 0.20);
    }
}
