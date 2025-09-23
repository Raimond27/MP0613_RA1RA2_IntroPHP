<?php

class P19_Positivity
{
    public function main(): void
    {
      echo "Give a number: ";

        // Get input from the user and cast to integer
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check positivity
        if ($number > 0) {
            echo "The number is positive." . PHP_EOL;
        } else {
            echo "The number is not positive." . PHP_EOL;
        }
       
    }
}
