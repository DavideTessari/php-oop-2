<?php
require_once __DIR__ . '/Product.php';

class CatProduct extends Product {
    public function __construct($image, $title, $price, $type) {
        parent::__construct($image, $title, $price, '🐱', $type);
    }
}
?>
