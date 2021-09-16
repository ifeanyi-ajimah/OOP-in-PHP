<?php 

include "person.php";

class Book{

    public $price;
    public $authors;
    public $address;

    public function price( int $price)
    {
        $this->price = $price;
    }

    public function authors(array $names)
    {
        $this->authors = $names;
    }

    //type casting. 
    public function adds( Person $person )
    {
        $this->address = $person->address();
    }

}

$book = new Book;
$book->price(77);

echo $book->price;
echo $book->authors(['Sarthak', 'Ifeco']);
print_r( $book->authors );


$personAddress = new Person;
$book->adds( $personAddress );
print_r ( $book->address );










