<?php 

class User{
    public static $name = "ifeco";
    public static $number = 0;

    public static function getName(){
        return self::$name =  'Sarthak';
    }

    public static function incr()
    {
        self::$number += 1;
    }

}

User::getName(); //use static methods or variables as utility purposes or as counters
echo User::$name;
echo "<br/>";

User::incr();
echo User::$number;
 echo "<br/>";
User::incr();
echo User::$number;


//A static class in php is a type of class which is instantiated only once in a program.
//It must contain  a static member (variable/properties) or a static member function (method) or both. 
//The variables and methods are accessed without the creation of an object, using the scope resolution operator(::)
// static method cannot access the non-static variables because that will require the creation of the object first.
// So, to access variables of a static class we must declare them (properties and methods) as static using keyword static.



//use self::  instead of $this->     when dealing with static variables and methods.
//Static methods can be called directly - without creating an instance of the class first.
//To access a static method use the class name then the, scope resolution operator(::), and the method name:
//eg User::incr();
//use the :: Scope Resolution Operator to call static methods or static variables.
//Static methods are declared with the static keyword:

//N/B:
//Static methods can also be called from methods in other classes. To do this, the static method should be public
// <?php
// class greeting {
//   public static function welcome() {
//     echo "Hello World!";
//   }
// }

// class SomeOtherClass {
//   public function message() {
//     greeting::welcome();
//   }
// }
// >



//A static method can be accessed from a method in the same class using the self keyword and double colon (::):
// <?php
// class greeting {
//   public static function welcome() {
//     echo "Hello World!";
//   }

//   public function __construct() {
//     self::welcome();
//   }
// }

// new greeting();
// >



// To call a static method from a child class, use the parent keyword inside the child class. 
//Here, the static method can be public or protected.

// <?php
// class domain {
//   protected static function getWebsiteName() {
//     return "W3Schools.com";
//   }
// }

// class domainW3 extends domain {
//   public $websiteName;
//   public function __construct() {
//     $this->websiteName = parent::getWebsiteName();
//   }
// }

// $domainW3 = new domainW3;
// echo $domainW3 -> websiteName;

//static properties 
// Static properties can be called directly - without creating an instance of a class.
// Static properties are declared with the static keyword:

// <?php
// class ClassName {
//   public static $staticProp = "W3Schools";
// }
// >

// To access a static property use the class name, double colon (::), and the property name:
// ClassName::staticProp;

// <?php
// class pi {
//   public static $value = 3.14159;
// }
// // Get static property
// echo pi::$value;
// >


//MORE ON STATIC PROPERTIES
//A class can have both static and non-static properties.
// A static property can be accessed from a method in the same class using the self keyword and double colon (::):

//N/B: 
//To call a static property from a child class, use the parent keyword inside the child class:
// <?php
// class pi {
//   public static $value=3.14159;
// }

// class x extends pi {
//   public function xStatic() {
//     return parent::$value;
//   }
// }

// // Get value of static property directly via child class
// echo x::$value;

// // or get value of static property via xStatic() method
// $x = new x();
// echo $x->xStatic();
// >




















