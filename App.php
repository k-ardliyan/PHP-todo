<?php 
    require_once __DIR__ . "/Models/TodoList.php";
    require_once __DIR__ . "/Controllers/ShowTodoList.php";
    require_once __DIR__ . "/Controllers/AddTodoList.php";
    require_once __DIR__ . "/Controllers/RemoveTodoList.php";
    require_once __DIR__ . "/Views/ViewShowTodoList.php";
    require_once __DIR__ . "/Views/ViewAddTodoList.php";
    require_once __DIR__ . "/Views/ViewRemoveTodoList.php";
    require_once __DIR__ . "/Helpers/Input.php";

    echo "Aplikasi Todolist" . PHP_EOL;
    viewShowTodoList();
?>