<?php
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();

echo "\n";
echo __DIR__;

echo "\n";
echo __FILE__;

echo "\n";
function myValue(){
    return __FUNCTION__;
  }
  echo myValue();

  echo "\n";
  echo __LINE__;

echo "\n";
  class Fruits1 {
    public function myValue(){
      return __METHOD__;
    }
  }
  $kiwi = new Fruits1();
  echo $kiwi->myValue();


  echo "\n";
//   namespace myArea;

//   function myValue(){
//     return __NAMESPACE__;
//   }

//   echo myValue();


trait message1 {
    public function msg1() {
      echo __TRAIT__; 
    }
  }
  
  class Welcome {
    use message1;
  }
  
  $obj = new Welcome();
  $obj->msg1();

  echo "\n";


//   namespace myArea;

//   class Fruits {
//     public function myValue(){
//       return Fruits::class;
//     }
//   }
//   $kiwi = new Fruits();
//   echo $kiwi->myValue();




?>