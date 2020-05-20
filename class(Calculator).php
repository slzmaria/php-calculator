<?php

  class Calculator
{
      private $a;
      private $b;

      public function __construct(int $a, int $b)
      {
        $this->a = $a;
        $this->b = $b;
      }
      
      public function sum(): int
      {
        return $this->a + $this->b;
      }
    
      public function sub(): int
      {
        return $this->a - $this->b;
      }
    
      public function mul(): int
      {
        return $this->a * $this->b;
      }

      public function div(): int
      {
        return $this->a / $this->b;
      }
}


$c = new Calculator ($_POST['a'], $_POST['b']);
$c->sum();
$c->sub();
$c->mul();
$c->div();
