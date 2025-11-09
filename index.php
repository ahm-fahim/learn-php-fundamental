<!DOCTYPE html>
<html lang="EN">
<body>

<h1>My first PHP page</h1>

<?php

// variable and variable scope , comment
echo "Hello World! ";
echo phpversion();
echo "<br>";

$color = "red";
echo "My favorite color is $color ";
echo "<br>";

$number = 10 ;

var_dump($color);
echo "<br>";
var_dump($number);
echo "<br>";

var_dump(5);
echo "<br>";
var_dump("John");
echo "<br>";
var_dump(3.14);
echo "<br>";
var_dump(true);
echo "<br>";
var_dump([2, 3, 56]);
echo "<br>";
var_dump(NULL);
echo "<br>";



$a = 10;
$b = 20;
function myFunc(){
    $food = "orange";
    global $a, $b;
    echo $food;
    echo "<br>";
    echo $a + $b;
}

myFunc();

echo "<br>";
function myTest() {
    static $x = 100;
    echo $x;
    $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();



// object

class Student {
    public $name;
    public $id;

    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
    }

    public function getName() {
        return "The Student Id is  $this->id and his name is $this->name ";
    }
}


$student1 = new Student("john", 409);

echo "<br>";
echo $student1->getName();

?>

</body>
</html>