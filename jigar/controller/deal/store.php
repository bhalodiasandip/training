<?php
// print_r($_POST);
// exit;
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Deal
{

    //property

    public $countBasePrice;
    public $sqfeet;
    public $Sqfeetcharge;
    public $countMaintenance = 250;
    public $pgvclCharge = 10000;
    public $tokenAmount;

    //method
    public function __isset($key)
    {
         isset($this->data[$key]);
    }
    public function setBasePrice($sq_feet, $charge, $token)
    {
        $this->sqfeet = $sq_feet;
        $this->Sqfeetcharge = $charge;
        $this->tokenAmount = $token;
    }

    public function getremainingPrice()
    {
        $total = 0;
        $total += ($this->sqfeet * $this->Sqfeetcharge);
        $total += ($this->sqfeet * $this->countMaintenance);
        $total += ($this->pgvclCharge);
        $total -= ($this->tokenAmount);
        return $total;
        // $total += ($this->)
    }
}

$jigar = new Deal;


$jigar->setBasePrice('$_POST[property]', '$_POST[sq_feet_price]', '$_POST[token_amount]');


$bharti->setBasePrice(2300, 800, 1000);


echo $jigar->getremainingPrice();
echo "<br>";
// echo $bharti->getremainingPrice();