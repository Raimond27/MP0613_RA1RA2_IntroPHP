<?php

class P25_Password
{
    public function main(): void
    {
        echo "Password? ";
        $password = trim(fgets($GLOBALS['STDIN'] ?? STDIN)); 

        if ($password === "Caput Draconis") {
            echo "Welcome!\n"; 
        } else {
            echo "Off with you!\n"; 
        }
    }
}

?>