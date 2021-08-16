<?php include "inc/header.php"; ?>

<?php

    class Person {

        public $name;

        public function personName() {

            echo 'Person Name is: '.$this->name;
        }

    }

    $person = new Person;

    $person->name = 'Yazid';

    $person->personName();

?>

















<?php include "inc/footer.php"; ?>