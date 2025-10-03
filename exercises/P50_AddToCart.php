<?php
session_start();

class P50_AddToCart {
    public function main(): void {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_GET['item'])) {
            $item = htmlspecialchars($_GET['item']); 
            $_SESSION['cart'][] = $item; 
        }

        echo implode(',', $_SESSION['cart']);
    }
}