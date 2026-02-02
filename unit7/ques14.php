<!-- 14. Create an interface Shape with a method draw(). Create classes Circle and Square that implement Shape and print "Drawing a Circle" and "Drawing a Square". Instantiate both and call draw() to show polymorphism. -->

<?php
// Define the Shape interface
interface Shape
{
    public function draw();
}

// Circle class implements Shape
class Circle implements Shape
{
    public function draw()
    {
        echo "Drawing a Circle<br>";
    }
}

// Square class implements Shape
class Square implements Shape
{
    public function draw()
    {
        echo "Drawing a Square<br>";
    }
}

// Instantiate objects
$circle = new Circle();
$square = new Square();

// Call draw() to demonstrate polymorphism
$circle->draw();
$square->draw();


