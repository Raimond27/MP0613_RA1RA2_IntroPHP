<?php

declare(strict_types=1);

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        echo "Give the first number: ";

        $firstNumber = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Give the second number: ";

        $secondNumber = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($firstNumber > $secondNumber) {
            echo "Greater number is: " . $firstNumber . "\n";
        } elseif ($secondNumber > $firstNumber) {
            echo "Greater number is: " . $secondNumber . "\n";
        } else {
            echo "The numbers are equal!\n";
        }
    }
}

?>