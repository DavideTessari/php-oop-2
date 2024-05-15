<?php
class Product {
    protected $image;
    protected $title;
    protected $price;
    protected $categoryIcon;
    protected $type;

    public function __construct($image, $title, $price, $categoryIcon, $type) {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->categoryIcon = $categoryIcon;
        $this->type = $type;
    }

    public function getDetails() {
        return [
            'image' => $this->image,
            'title' => $this->title,
            'price' => $this->price,
            'categoryIcon' => $this->categoryIcon,
            'type' => $this->type
        ];
    }
}
?>
