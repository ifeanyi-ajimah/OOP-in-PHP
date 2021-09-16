<?php

abstract Class Car{

    public function getName(){
        return "a nice car";
    }

    abstract public function calculateTankArea();



}


//An abstract class is a class that can not be instantiated. ie you can not create an object of the class.
//Rather, you can only extend the class 

//once a class is an abstract class, any abstract method it has, must be 
//used by classes wc extends it. 

//therefore, when ever your class will always be extended, and you ll not need to use the object directly,
//its best to make it an abstract class. 


//DIFFERENCE BETWEEN AN ABSTRACT CLASS AND AN INTERFACE

// Interfaces cannot have properties, while abstract classes can
// All interface methods must be public, while abstract class methods is public or protected
// All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary




