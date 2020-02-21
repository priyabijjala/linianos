<?php

namespace App;

class Linianos
{

  /**
   * process the values
   * 
   * @return array
   */
  private function execute()
  {
    $result = [];
    for ($i = 1; $i <= 100; $i++) {
      $words = ['Linianos', 'IT', 'Linio', $i];
      $index = (min($i%3, 1) + (min($i%5, 1)* 2));
      $result[] = $words[$index];
    }
    return $result;
  }
  
  /**
   * access execute function
   * print all the values with new replaced text
   * 
   * @return array
   */
  public function display()
  {
    $data = $this->execute();
    foreach ($data as $value) {
      echo $value . PHP_EOL;
    }
    return $data;
  }

}

$class = new Linianos();
$class->display();
