<?php
class student{
    var $name;
    var $major;
    var $gpa;

    function __construct($name,$major,$gpa){
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }
}


$student1 = new Student('jim','business',2.8);
$student2 = new Student('Pam','Art',3.6);

echo $student1->name;
?>