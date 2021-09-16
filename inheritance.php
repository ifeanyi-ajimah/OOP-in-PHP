<?php

class Fruits{

    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }

}

class Apple extends Fruits{

    public function juice(){
        echo "Juice";
    }

}


class Mango extends Fruits{


}


$mango = new Mango;
 $mango->setName('my mango');
 echo $mango->name;















