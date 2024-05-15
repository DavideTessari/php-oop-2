<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop Online</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 16px;
            margin: 16px;
            width: 200px;
            text-align: center;
            display: inline-block;
        }
        .card img {
            max-width: 100%;
            border-radius: 5px;
        }
        .card h2 {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .card p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Benvenuti nel nostro Pet Shop</h1>
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
</body>
</html>
