<?php

class P29_GiftTax
{
    public function main(): void
    {
        echo "Value of the gift?\n";
        $value = (float) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $tax = 0.0; 

        if ($value < 5000) {
            echo "No tax!\n";
            return; 
        } elseif ($value <= 25000) {
            $baseTax = 100;
            $percentage = 0.08;
            $lowerLimit = 5000;
        } elseif ($value <= 55000) {
            $baseTax = 1700;
            $percentage = 0.10;
            $lowerLimit = 25000;
        } elseif ($value <= 200000) {
            $baseTax = 4700;
            $percentage = 0.12;
            $lowerLimit = 55000;
        } elseif ($value <= 1000000) {
            $baseTax = 22100;
            $percentage = 0.15;
            $lowerLimit = 200000;
        } else { 
            $baseTax = 142100;
            $percentage = 0.17;
            $lowerLimit = 1000000;
        }

        
        $tax = $baseTax + ($value - $lowerLimit) * $percentage;

        
        echo "Tax: " . (int) round($tax) . "\n";
    }
}

?>