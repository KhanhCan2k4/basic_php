<?php
/**
    TOPIC: OOP

    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/

// class
class User {
    //fields
    private $name;
    public $age;

    //properties
    public function setName($name) {
            $this->name = $name;
        }

    //constructor
    public function __construct($name ="", $age =0) {
        $this->name = $name;
        $this->age = $age;
    }


}

//inheritance
class Employee extends User {
    //fields
    private $tile;

    //properties
    public function setTile($tile) {
        $this->tile = $tile;
    }

    //constructor
    public function __construct($name = "", $age = 0, $tile = "") {
        parent::__construct($name, $age);
        $this->tile = $tile;
    }
}

$user1 = new User('Kane', 18);
$user1->setName('John');
print_r($user1);

$user2 = new User('Kane 2');
print_r($user2);

$employee1 = new Employee('Wo', 25, 'manager');

print_r($employee1);


?>