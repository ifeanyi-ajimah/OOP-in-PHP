<?php 

include "shapeinterface.php";
include "geometryInterface.php";


// class Triangle 

class Triangle implements shapeInterface, geoInterface
{

    public function getArea(){
        echo 'Triangle area';
    }

    public function getCircumference($length, $breath)
    {
        echo $length . ' ' . $breath;
    }

}



//class Rectangle

class Rectangle implements shapeInterface {

    public function calculateArea(){
        echo 'calculated area';
    }

    public function getArea()
    {
        return 'rectancle area';
    }
}


$tri = new Triangle();
echo $tri->getArea();
$tri->getCircumference(23, 23);


$rec = new Rectangle;
$rec->getArea();



//interfaces allows you to specify what methods a class should implement
//Interface forces any class that implements it to have the methods it has, however,
//it leaves them the liberty to customise the methods/functions how they like.

// N/B: A class that implements an interface must implement all of the interface's methods.

//Interfaces make it easy to use a variety of different classes in the same way 
//Interface allows the classes implementing them to implement them however they like,
//but they must have all the methods present once they implement the Interface

//Interfaces are declared with the Interface keyword.

//POLYMORPHISM
//POLYMORPHISM is derived from 2 different words : poly=many morph=forms . meaning - many forms
//when one or more classes uses an interface, it is known as Polymorphism.
//POLYMORPHISM means the ability to have many forms. 
//POLYMORPHISM occurs when a class has varying functionality while sharing a common interface. 
//Its a pattern in Object Oriented Programming in which a class has varying functionality while sharing a common interfaces.

//2 MAIN TYPES OF POLYMORPHISM
//-- Compile time (function overload)  or Operator Overloading - NOT SUPPORTED BY PHP
//-- Run time (function overriding)
//Run time polymorphism means that a decision is made at runtime (not compile time).

//METHOD OVERRIDING : when we create a function in a derived class with the same signature; ie the class has functions with same name, same number of arguments
//and same type of arguments as the function in the parents class. 




