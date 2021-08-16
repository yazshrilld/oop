<?php include "inc/header.php"; ?>

<?php
//this lecture aims at creating a construct method and using the construct to access the method of that class they belobg to.
    class Person {

        public $name;
        public $id;


        public function __construct($name) {

            $this->name = $name;
        }

        public function setId($id) {

            $this->id = $id;
            
        }

        public function __destruct() {

            if (!empty($this->id)) {
                echo 'Saving Name';
            }
        }

    }

    $person = new Person('Yazid');
    $person->setId(12);
    unset($person);
    

?>

















<?php include "inc/footer.php"; ?>