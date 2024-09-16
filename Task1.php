<?php

abstract class Shape {
    abstract public function area();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * ($this->radius ** 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;


    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

$Circle = new Circle(5.5);
echo "Circle Area is " . $Circle->area()."\n" ;

$Rectangle = new Rectangle(5, 6);
echo "Rectangle Area is " . $Rectangle->area();