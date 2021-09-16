<?php
class Book{

    public $name = "fecs man";

    public function author()
    {
        return "The author is: " . $this->name;
    }

}


class NewBook extends Book {

    public function author()
    {
        return "The authors names are: " . $this->name . " and Solomon";
    }

}



class AnotherBook extends Book {

    public function author()
    {
        //you can use parent:: to call the original parent class withing your new class 
        return parent::author() . " and The authors names are: " . $this->name . " and Solomon";
    }

}

$book = new Book;
echo $book->author();
echo "<br/>";

$newBook = new NewBook;
echo $newBook->author();
echo "<br/>";

$anotherBook = new AnotherBook;
echo $anotherBook->author();







