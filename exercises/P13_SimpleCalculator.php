<?php

class P13_SimpleCalculator {
    public function main(): void {
        // Define two numbers
        $numA = 8;
        $numB = 2;

        // Perform and output the calculations
        // Write the program here
       
        $sum=$numA+$numB;
        $Diferencia= $numA -$numB;
        $multiplicacion = $numA * $numB;
        $divicion = $numA / $numB;

        echo "$numA + $numB = $sum\n";
        echo "$numA - $numB = $Diferencia\n";
        echo "$numA * $numB = $multiplicacion\n";
        echo "$numA / $numB = $divicion.0\n";
    }
}
