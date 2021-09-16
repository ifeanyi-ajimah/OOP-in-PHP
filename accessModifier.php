<?php
class User{
   public $name = "Sarthak";
   private $password = "12345";
   protected $email = "abc@gmail.com";

   //getters helps to make object of other classes have access to the private properties
   public function getPass()
   {
       return $this->password;
   }

}

  //private field can be accessed by the object of the class.
//   $user = new User;
//   echo $user->getPass();

  class Admin extends User{

     function __construct(){
         echo $this->password; //can not echo or access a private field since it is an extention of the User class
     }

  }

  $admin = new Admin;
  //$admin; //the object should echo anything passed to the constructor. since the constructor already say echo. However, it has no access to privately declared fields. 
  
  echo $admin->getPass();



//private fields or methods:  only current class will have access to it (best encapsulation)

// protected fields or methods :  only the current class and subclass( extended class ) has access to it (moderate encapsulation)

//public : any class can refer to the field or call the method.






