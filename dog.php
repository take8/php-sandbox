<?php
class Dog {
  public $name = 'Pochi';
  
  public function bark() {
    echo "Bow wow!";
  }
}

// 生成
$a = new Dog();

// 呼び出し
$a->bark();
echo "\n";

echo $a->name;
echo "\n";
