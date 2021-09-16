<?php 

include "Car.php";

class BMW extends Car{

    public function calculateTankArea()
    {

    }
    //when you extend an abstract class, you must use any abstract method it has.

}

$bmw = new BMW;
echo $bmw->getName();



//An abstract class is a class that CAN NOT be instantiated. ie you can not create an Object of the Class.
//Rather, you can only extend the class 

//Once a class is an abstract class, any abstract method it has, must be 
//used by classes wc extends it. 

//therefore, when ever your class will always be extended, and you ll not need to use the object directly,
//its best to make it an abstract class. 


