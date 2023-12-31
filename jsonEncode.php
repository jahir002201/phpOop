<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);

echo "\n";

$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);

echo "\n";
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));


echo "\n";
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

echo $arr["Ben"];
echo "\n";
$obj = json_decode($jsonobj);

echo $obj->Peter;

echo "\n";
foreach($obj as $key => $value) {
    echo $key . " => " . $value . "\n";
  }
  
echo "\n";
?>