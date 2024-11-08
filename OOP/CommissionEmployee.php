<?php
class CommissionEmployee extends Employee {
    private $regularSalary;
    private $itemSold;
    private $commissionRate;


    public function __construct($Name, $Address, $Age, $CompanyName, $regularSalary, $itemSold, $commissionRate) {
        parent::__construct($Name, $Address, $Age, $CompanyName); 
        $this->regularSalary = $regularSalary;
        $this->itemSold = $itemSold;
        $this->commissionRate = $commissionRate;
    }

    public function getRS() {
        return $this->regularSalary;
    }

    public function getIS() {
        return $this->itemSold;
    }

    public function getCR() {
        return $this->commissionRate;
    }

    public function setRS($regularSalary) {
        $this->regularSalary = $regularSalary;
    }

    public function setIS($itemSold) {
        $this->itemSold = $itemSold;
    }

    public function setCR($commissionRate) {
        $this->commissionRate = $commissionRate;
    }

    public function __toString() {
        return parent::__toString() . ", Regular Salary: $this->regularSalary, Item Sold: $this->itemSold, Commission Rate: $this->commissionRate";
    }

    public function earnings() {
        $commission = $this->itemSold * $this->commissionRate;
        $totalEarnings = $this->regularSalary + $commission;
        return $totalEarnings;
    }
}
?>