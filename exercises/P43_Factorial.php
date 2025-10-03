<?php

class P43_Factorial
{
    public function main(): void
    {
        $handle = fopen("php://stdin", "r");
        $numberString = trim(fgets($GLOBALS['STDIN']  ??  STDIN));
        fclose($handle);


        $number = (int)$numberString;

        $factorial = $this->calculateFactorial($number);

  
        echo "Factorial: " . $factorial . "\n";
    }
    private function calculateFactorial(int $n): int
    {
        if ($n < 0) {
     
            throw new InvalidArgumentException("El factorial no está definido para números negativos.");
        }
        if ($n === 0 || $n === 1) {
            return 1;
        } else {
            $result = 1;
            for ($i = 2; $i <= $n; $i++) {
                $result *= $i;
            }
            return $result;
        }
    }
}