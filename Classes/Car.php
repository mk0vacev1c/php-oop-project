<?php

class Car {
// Properties / Fields
    private $brand = "Volvo";
    private $color = "Green";

    // Constructor
    public function __construct($brand, $color = "none") {
    $this->brand = $brand;
    $this->color = $color;
}

    // Getter & Setter methods
    public function getBrand() {
    return $this->brand;
}
    public function setBrand($brand) {
    $this->brand = $brand;
}

    public function getColor() {
    return $this->color;
}
    public function setColor($color) {
    $allowedColors = ["black", "red", "green", "blue", "yellow", "purple"];
    if (in_array($color, $allowedColors)) { $this->color = $color; }

}

    // Method
    public function getCarInfo() {
    return "Brand: " . $this->brand . ", Color: " . $this->color;
    }
}