<?php

namespace App\Services;

class CalculatriceService
{
    public function add($a, $b)
    {
        return (gettype($a) === "integer" && gettype($b) === "integer") ? $a + $b : "Cannot add number to string";
    }
}