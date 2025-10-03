<?php
session_start();

class P48_UserLogin {
    public function main(): void {
        $validUsername = 'admin';
        $validPassword = 'secret';

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $_SESSION['loggedin'] = false;


        if ($username === $validUsername && $password === $validPassword) {
            $_SESSION['loggedin'] = true;
            echo "Welcome, " . $username;
        } else {
            echo "Invalid credentials";
            $_SESSION['loggedin'] = false; 
        }
    }
}