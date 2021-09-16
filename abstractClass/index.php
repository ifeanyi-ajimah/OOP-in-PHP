<?php 

include "Car.php";


$car = new Car;
echo $car->getName();
// throws error because an abstract class can not be instantiated. 
//they can only be extended. 



