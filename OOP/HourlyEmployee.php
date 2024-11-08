<?php
class HourlyEmployee extends Employee {
    private $hoursWorked;
    private $rate;

    public function __construct($Name, $Address, $Age, $CompanyName, $hoursWorked, $rate) {
        parent::__construct($Name, $Address, $Age, $CompanyName);  // Pass values to Employee constructor
        $this->hoursWorked = $hoursWorked;
        $this->rate = $rate;
    }

    public function getHW() {
        return $this->hoursWorked;
    }

    public function getrate() {
        return $this->rate;
    }

    public function setHW($hoursWorked) {
        $this->hoursWorked = $hoursWorked;
    }

    public function setrate($rate) {
        $this->rate = $rate;
    }

    public function earnings() {
        return $this->hoursWorked * $this->rate;
    }

    public function __toString() {
        return parent::__toString() . ", Hours Worked: $this->hoursWorked, Rate: $this->rate";
    }
}
?>