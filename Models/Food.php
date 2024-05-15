<?php
require_once __DIR__ . '/Product.php';

class Food extends Product {
    public function __construct($image, $title, $price, $categoryIcon) {
        parent::__construct($image, $title, $price, $categoryIcon, 'Cibo');
    }
}
?>
