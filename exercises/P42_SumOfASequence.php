<?php

class P42_SumOfASequence
{
    public function main(): void
    {
        // Leer la entrada del usuario
            $input = trim(fgets($GLOBALS['STDIN']  ??  STDIN));
        $n = (int)$input; // Convertir la entrada a un entero

        $sum = 0; // Inicializar la variable de suma

        // Calcular la suma de 1 a n
        // Opción 1: Usando un bucle (más intuitivo para el ejercicio)
        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
        }

        // Opción 2: Usando la fórmula matemática (más eficiente)
        // $sum = ($n * ($n + 1)) / 2;

        // Imprimir el resultado en el formato especificado
        echo "The sum is " . $sum . "\n";
    }
}

?>