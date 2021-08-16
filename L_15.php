<?php include "inc/header.php"; ?>

<?php
//this lecture aims at creating a construct method and using the construct to access the method of that class they belobg to.
    class Person {

        public $name;
        public $id;
        const NAME = 'Topshrilld';
        protected $age = 30;


        public function __construct($name) {

            $this->name = $name;
        }

        public function setId($id) {

            $this->id = $id;
            
        }


        public function show() {

            echo " Full name is: {$this->name} ";
            echo " $this->age " . "my super class";
            
        }




       

    }

    class Admin extends Person {

        public $level;

        public function show() {

            echo " Full name is: {$this->name} and  member level is {$this->level}";
            echo " $this->age " . "my sub class";
            
        }

    }

    $person = new Person('Yazid');
    $person->show();
    echo '<br>';

    $name = 'yaz';
    $add = new Admin($name);
    $add->level = "Viewers";
    $add->show();

    
    

?>

















<?php include "inc/footer.php"; ?>