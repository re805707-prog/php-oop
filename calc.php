<?php
class calculator
{

    private $num1 = 0; 
    private $num2 = 2;
    
    public  function __construct( int $fnumber, int $snumber )
    {
        $this->num1 = $fnumber;
        $this->num2 = $snumber;

    }
    public function add ()
    {
        return $this->num1 + $this->num2;
    }
    
    public function subtract ()
    {
        return $this->num1 - $this->num2 ;
    }


     public function divide ()
     {
        return $this->num1 / $this->num2;
     }
     
}
 $object = new calculator(10, 5);
 echo $object->add();









