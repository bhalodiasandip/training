<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
class Quotation{
    //property
    private $fiberWeight;
    private $fiberType;
    private $chemicalUsed;
    private $ovenTime;
    public $perKGPrice = 60;
    public $perLitterChemicalPrice = 15;
    public $perHourPrice = 50;

    //method
    public function setFiber($weight, $type){
        $this->fiberWeight = $weight;
        $this->fiberType = $type;
        $this->detectChemicalUsed();
        $this->detectOvenTime();
    }
    private function detectChemicalUsed(){
        if($this->fiberType == 'pvc')
        {
            $this->chemicalUsed = 5;
        }
        if($this->fiberType == 'backalight')
        {
            $this->chemicalUsed = 10;
        }
    }
    private function detectOvenTime(){
        if($this->fiberType == 'pvc')
        {
            $this->ovenTime = 2;
        }
        if($this->fiberType == 'backalight')
        {
            $this->ovenTime = 3;
        }
        return $this->ovenTime;
    }
    public function getPrice(){
        $total = 0;
        $total += ($this->perKGPrice * $this->fiberWeight);
        $total += ($this->chemicalUsed * $this->perLitterChemicalPrice);
        $total += ($this->ovenTime * $this->perHourPrice);
        return $total;
    }
}

class FabricationQuotation extends Quotation {
    public $sqFeet;
    public $sqFeetPrice = 20;
    public function setSqfeet($sq_feet){
        $this->sqFeet = $sq_feet;
    }
    public function getPrice()
    {
        $price = parent::getPrice(); // TODO: Change the autogenerated stub
        $price += ($this->sqFeet * $this->sqFeetPrice);
        return $price;
    }
}

class AssemblingQuotation extends Quotation{
    public $assemblingWeight;
    public $assemblingPricePerKG = 30;
    public function setWeight($weight){
        $this->assemblingWeight = $weight;
    }
    public function getPrice()
    {
        $price = parent::getPrice(); // TODO: Change the autogenerated stub
        $price += ($this->assemblingWeight * $this->assemblingPricePerKG);
        return $price;
    }
}

//$hareshQuotation = new Quotation;
//$hareshQuotation->setFiber(20,'pvc');
//echo $hareshQuotation->getPrice();

//$rameshQuotation = new Quotation;
//$rameshQuotation->setFiber(30, 'backalight');
//echo $rameshQuotation->getPrice();
//echo $rameshQuotation->detectOvenTime();

//$fabricationQuotation = new FabricationQuotation;
//$fabricationQuotation->setFiber(20,'pvc');
//$fabricationQuotation->setSqfeet(50);
//echo $fabricationQuotation->getPrice();

$assemblingQuotation = new AssemblingQuotation;
$assemblingQuotation->setFiber(20, 'pvc');
$assemblingQuotation->setWeight(12);
echo $assemblingQuotation->getPrice();