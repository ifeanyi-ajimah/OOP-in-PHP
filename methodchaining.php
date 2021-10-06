<?php 

class Bill{

    public $dinner = 20;
    public $dessert = 5;
    public $coldDrink = 3;
    public $bills;

    public function dinner($person){
       $this->bills += $this->dinner * $person;
       return $this;
    }

    public function dessert($person)
    {
        $this->bills += $this->dessert + $person;
        return $this;
    }

    public function coldDrink($person)
    {
        $this->bills += $this->coldDrink * $person;
        return $this;
    }

}


$bill = new Bill(); 
echo $bill->dinner(2)->dessert(2)->coldDrink(2)->bills;








