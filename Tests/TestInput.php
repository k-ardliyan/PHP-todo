<?php 

require_once "../helpers/Input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;

$test = input("Test");
echo "Test: $test" . PHP_EOL;

?>