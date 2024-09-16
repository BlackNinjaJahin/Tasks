<?php
// Base class Animal
abstract class Animal {
    abstract public function makeSound();
}

// Derived class Dog
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

// Derived class Cat
class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Derived class Bird
class Bird extends Animal {
    public function makeSound() {
        return "Tweet!";
    }
}

// Example usage
$animals = [new Dog(), new Cat(), new Bird()];

foreach ($animals as $animal) {
    echo get_class($animal) . " says: " . $animal->makeSound() . "\n";
}
?>
