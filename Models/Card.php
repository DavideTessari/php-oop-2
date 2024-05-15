<?php
class Card {
    public static function printCard($product) {
        $details = $product->getDetails();
        echo "<div class='card'>";
        echo "<img src='{$details['image']}' alt='{$details['title']}' />";
        echo "<h2>{$details['title']}</h2>";
        echo "<p>Prezzo: {$details['price']}€</p>";
        echo "<p>Categoria: {$details['categoryIcon']}</p>";
        echo "<p>Tipo: {$details['type']}</p>";
        echo "</div>";
    }
}
?>
