<?php include "inc/header.php"; ?>

<?php
//this lecture aims at creating a construct method and using the construct to access the method of that class they belobg to.
    class Person {

        public $name;
        public $id;
        const NAME = 'Topshrilld';

        public static $age = 27;


        public function __construct($name) {

            $this->name = $name;
        }

        public function setId($id) {

            $this->id = $id;
            
        }

        // public function display() {

        //     echo ' Full name is: ' . Person::NAME . '<br>';
        //     echo ' My age is: ' . self::$age ;
            
        // }

        public static function show() {

            echo ' Full name is: ' . Person::NAME . '<br>';
            echo ' My age is: ' . self::$age ;
            
        }


        public function __destruct() {

            if (!empty($this->id)) {
                echo 'Saving Name';
            }
        }

    }

    $person = new Person('Yazid');
    // $person->display();
    // echo '<br>';
    $person->setId(12);
    echo '<br>';
    Person::show();
    unset($person);
    
    

?>

















<?php include "inc/footer.php"; ?>