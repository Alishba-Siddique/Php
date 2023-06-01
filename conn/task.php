<?php
abstract class Vehicle{
    public $car;
    public $bus;
    public function Description(){
        return "Vehicles are" . $this->car . ", " . $this->bus;
    }
    abstract public function Color();
}
class car extends Vehicle{
    public function Color(){
        return "Red";
    }
    public function Description()
    {
       return parent::Description() . ", and This is a car" ;
    }
}
$vehicle =  new car();
$vehicle->car = "Ford";
$vehicle->bus = "Deewoo";
echo $vehicle->Description();
echo $vehicle->Color();

?>