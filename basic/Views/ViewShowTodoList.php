<?php 

require_once __DIR__ . "/../Models/TodoList.php";
require_once __DIR__ . "/../Controllers/ShowTodoList.php";
require_once __DIR__ . "/../Views/ViewAddTodoList.php";
require_once __DIR__ . "/../Views/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helpers/Input.php";

function viewShowTodoList() {
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Add Todo List" . PHP_EOL;
        echo "2. Remove Todo List" . PHP_EOL;
        echo "x. Exit" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1"){
            viewAddTodoList();
        } elseif ($pilihan == "2") {
            viewRemoveTodoList();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}

?>