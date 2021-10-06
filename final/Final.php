<?php 

final class MyClass{
    public $name = "John";
}


    //this code will throw an error

// class AnotherClass extends MyClass{

// }

    //ie to say that classes defined as final, can not be extended



class Bmwcar{

    public function display(){
        echo "This is the BMW class \n";
    }

    final public function price(){
        echo "this is the Bmwcar final method \n";
    }
}

class Toyota extends Bmwcar {

    public function display(){
        echo "this is Toyota display function \n";
    }

    // public function price(){
    //     echo "this is supposed to be toyota price but it can't be overriden. \n";
    // }

}

$toyota = new Toyota();
$toyota->display();
$toyota->price();
//resuts: 
//this is Toyota display function
//this is the Bmwcar final method


//PHP final keyword : prevents inheritance of a class
//ie, final keyword prevents a class from being inherited. 
//final key word also prevents inherited methods from being overriden. 

?>

