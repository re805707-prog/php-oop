<?php

class SystemTracker
{
    private static int $totalTransactions = 0;

    public function __construct()
    {
        self::$totalTransactions++;
    }

    public static function getTotalTransactions(): int
    {
        return self::$totalTransactions;
    }
}
