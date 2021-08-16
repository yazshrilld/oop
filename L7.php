<?php include "inc/header.php"; ?>

<?php
//this lecture aims at creating a class, method and an object and echoing out something.
    class Person {

        public $name;

        public function personName() {

            echo 'Person Name is: '.$this->name;
        }

    }

    $person = new Person;

    $person->name = 'Yazid';

    $person->personName();

    // class Person {

    //     public $name;

    //     public function __construct($name) {

    //         $this->name = $name;
    //     }

    //     public function personName() {

    //         echo "Person Name {$this->name}";
    //     }

    // }

    // $person = new Person("Yazid");

    // $person->personName();

?>

















<?php include "inc/footer.php"; ?>