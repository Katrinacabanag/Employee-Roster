<?php
class Person {
    private $Name;
    private $Address;
    private $Age;

    public function __construct($Name, $Address, $Age) {
        $this->Name = $Name;
        $this->Address = $Address;
        $this->Age = $Age;
    }

    public function getName() {
        return $this->Name;
    }

    public function setName($Name) {
        $this->name = $Name;
    }

    public function getAddress() {
        return $this->Address;
    }

    public function setAddress($Address) {
        $this->address = $Address;
    }

    public function getAge() {
        return $this->Age;
    }

    public function setAge($Age) {
        $this->age = $Age;
    }

    public function __toString() {
        return "Name: $this->name, Address: $this->address, Age: $this->age";
    }
}
?>