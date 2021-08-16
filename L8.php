<?php include "inc/header.php"; ?>

<?php
//this lecture aims at creating a construct method and using the construct to access the method of that class they belobg to.
    class Person {

        public $name;

        public function __construct($name, $bus, $car) {//the parameters inside here matters most which corresponds with Line 27

            $this->bus = $car;// this shows that a construct can be used to create a property by defining it in this ormat for the class to recognize
            $this->name = $car;
            $this->car = $car;
        }

        public function personName() {

            echo "Person Name is: {$this->name} ";// if you use single quote i.e '' with an initializer, it will not be recognized, but I dont know why
            echo "<br>";
            echo "Person Bus is: {$this->bus} ";
            echo "<br>";
            echo "Person car is: {$this->car} ";
        }

    }

    $person = new Person('Yazid', 'danfo', 'Toyota');

    $person->personName();

?>

















<?php include "inc/footer.php"; ?>