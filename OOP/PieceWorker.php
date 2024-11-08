<?php
class PieceWorker extends Employee {
    private $numberItems;
    private $RatePerItem;

    public function __construct($name, $address, $age, $companyName, $numberItems, $RatePerItem) {
        parent::__construct($name, $address, $age, $companyName);  
        $this->numberItems = $numberItems;
        $this->RatePerItem = $RatePerItem;
    }

    public function getNI() {
        return $this->numberItems;
    }

    public function getWPI() {
        return $this->RatePerItem;
    }

    public function setNI($numberItems) {
        $this->numberItems = $numberItems;
    }

    public function setWPI($RatePerItem) {
        $this->RatePerItem = $RatePerItem;
    }

    public function earnings() {
        return $this->numberItems * $this->RatePerItem;
    }

    public function __toString() {
        return parent::__toString() . ", Number of Items: $this->numberItems, Wage Per Item: $this->wagePerItem";
    }
}
?>