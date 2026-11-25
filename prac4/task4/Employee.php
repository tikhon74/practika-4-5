<?php

abstract class Employee
{
    public const MIN_BONUS = 500;

    private static int $employeeCount = 0;

    public function __construct(
        protected string $name,
        protected float $salary
    ) {
        self::$employeeCount++;
    }

    abstract public function calculateBonus(): float;

    protected function applyMinBonus(float $bonus): float
    {
        return max($bonus, (float) self::MIN_BONUS);
    }

    public function getTotalPayment(): float
    {
        return $this->salary + $this->calculateBonus();
    }

    public function getInfo(): string
    {
        return sprintf(
            '%s: оклад = %.2f, премия = %.2f',
            $this->name,
            $this->salary,
            $this->calculateBonus()
        );
    }

    public static function getEmployeeCount(): int
    {
        return self::$employeeCount;
    }
}
