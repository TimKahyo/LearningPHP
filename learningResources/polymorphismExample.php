<?php
interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

function printArea(Shape $shape) {
    echo "Area: " . $shape->calculateArea();
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

printArea($circle); // Output: Area: 78.5
printArea($rectangle); // Output: Area: 24

?>