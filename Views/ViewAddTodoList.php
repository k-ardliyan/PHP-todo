<?php 

require_once __DIR__ . "/../Models/TodoList.php";
require_once __DIR__ . "/../Helpers/Input.php";
require_once __DIR__ . "/../Controllers/AddTodoList.php";

function viewAddTodoList() {
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal menambahkan todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
    
}

?>