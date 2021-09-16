<?php

class Student {

    public $name;
    public $attendance;
    public $totalMarks;

    public function stuDetails($name, $attendance, $totalMarks)
    {
        $this->name = $name;
        $this->attendance = $attendance;
        $this->totalMarks = $totalMarks;
    }
    
}

$class09 = new Student;
$class09->stuDetails('Any',true,99);

echo $class09->name; 
?> 

<br>
<?php
echo $class09->totalMarks;

 
