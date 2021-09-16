<?php

class Circle{

    const PI = 3.14159;

    public function area($radius)
    {
        return $radius * $radius * self::PI; 
    }

}


$circle = new Circle;
echo $circle->area(5);

echo "<br/>";

echo Circle::PI;

//constants can not be changed once declared
//CONSTANTS are not initiated with the $ sign in php
//its recommended to use capital letters for constants

//We can access a constant from outside the class by using
// the class name followed by the scope resolution operator (::)

//we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::)


















