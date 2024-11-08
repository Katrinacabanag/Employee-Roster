<?php
abstract class Employee extends Person {
    protected $CompanyName;

    public function __construct($Name, $Address, $Age, $CompanyName) {
        parent::__construct($Name, $Address, $Age);
        $this->CompanyName = $CompanyName;
    }

    public function getCN() {
        return $this->CompanyName;
    }

    public function setCN($CompanyName) {
        $this->CompanyName = $CompanyName;
    }

    abstract public function earnings();

    public function __toString() {
        return parent::__toString() . ", Company: $this->companyName";  
    }
}
?>