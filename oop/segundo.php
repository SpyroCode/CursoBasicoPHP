<?php

class Vehicle
{
    private $owner; //atributo

    public function __construct($owner) //asigna valor al parametro
    {
       $this->owner=$owner;
        echo 'construct<br/>';
    }
    public function __destruct() ///destruye la variable
    {
        echo 'descructor<br/>'; 
    }
     public function move() {  //metodo
         echo 'moving<br/>';
     }
     public function getOwner(){
         return $this->owner;
     }
     public function setOwner($owner){
        $this->owner=$owner;
     }

}
echo 'class car<br/>';

$car = new Car('Efrenc');//instaciar la clase
$car2=new Car('Alexc');
$car->move();//llamar metodo


echo 'Owner car: '.$car->getOwner();
echo 'Owner car2: '.$car2->getOwner();