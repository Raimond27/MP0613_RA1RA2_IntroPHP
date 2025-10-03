<?php

class P42_SumOfASequence
{
    public function main(): void
    {
       
            $input = trim(fgets($GLOBALS['STDIN']  ??  STDIN));
        $n = (int)$input; 

        $sum = 0; 

     
        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
        }

        echo "The sum is " . $sum . "\n";
    }
}

?>