<?php
trait Discountable {
    protected $discount = 0;

    public function setDiscount($percentage) {
        $this->discount = $percentage;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getPriceAfterDiscount() {
        return $this->price - ($this->price * ($this->discount / 100));
    }
}
?>
