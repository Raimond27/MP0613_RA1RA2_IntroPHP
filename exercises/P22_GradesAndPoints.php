<?php

declare(strict_types=1);

class P22_GradesAndPoints
{
    public function main(): void
    {
        echo "Give points: ";

        $points = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($points < 0) {
            echo "impossible!\n";
        } elseif ($points >= 0 && $points <= 49) {
            echo "failed\n";
        } elseif ($points >= 50 && $points <= 59) {
            echo "1\n";
        } elseif ($points >= 60 && $points <= 69) {
            echo "2\n";
        } elseif ($points >= 70 && $points <= 79) {
            echo "3\n";
        } elseif ($points >= 80 && $points <= 89) {
            echo "4\n";
        } elseif ($points >= 90 && $points <= 100) {
            echo "5\n";
        } else { // $points > 100
            echo "incredible!\n";
        }
    }
}

?>