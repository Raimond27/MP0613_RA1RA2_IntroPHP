<?php

class P46_SumOfArray
{
    public function main(): void
    {
        $array = [5, 1, 9, 4, 2];
        echo $this->sumOfNumbersInArray($array) . "\n";
    }

    public function sumOfNumbersInArray(array $array): int
    {
        $sum = 0;
        foreach ($array as $number) {
            $sum += $number;
        }
        return $sum;
    }
}