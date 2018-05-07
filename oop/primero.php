<?php

// class Car 
// {
//     public $owner; //atributo
//      public function move() {  //metodo
//          echo 'moving<br>';
//      }

// }
// echo 'class car';

// $car = new Car();//instaciar la clase
// $car->move();//llamar metodo
// $car->owner='Alex';
// echo 'Owner: '.$car->owner;


// class Car 
// {
//     private $owner='Mike'; //atributo

//      public function move() {  //metodo
//          echo 'moving<br/>';
//      }
//      public function getOwner(){
//          return $this->owner;
//      }

// }
// echo 'class car<br/>';

// $car = new Car();//instaciar la clase
// $car->move();//llamar metodo
// // $car->owner='Alex';
// echo 'Owner: '.$car->getOwner();

// class Car 
// {
//     private $owner; //atributo

//      public function move() {  //metodo
//          echo 'moving<br/>';
//      }
//      public function getOwner(){
//          return $this->owner;
//      }
//      public function setOwner($owner){
//         $this->owner=$owner;
//      }

// }
// echo 'class car<br/>';

// $car = new Car();//instaciar la clase
// $car->move();//llamar metodo
// $car->setOwner('Efren');//asignar valor 

// echo 'Owner: '.$car->getOwner();

// class Car 
// {
//     private $owner; //atributo

//      public function move() {  //metodo
//          echo 'moving<br/>';
//      }
//      public function getOwner(){
//          return $this->owner;
//      }
//      public function setOwner($owner){
//         $this->owner=$owner;
//      }

// }
// echo 'class car<br/>';

// $car = new Car();//instaciar la clase
// $car2=new Car();
// $car->move();//llamar metodo
// $car->setOwner('Efren');//asignar valor 
// $car2->setOwner('MAxi');//asignar valor 

// echo 'Owner car: '.$car->getOwner();
// echo 'Owner car2: '.$car2->getOwner();

////CONSTRUCTORES Y DESCTRUCTORES


class Car 
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