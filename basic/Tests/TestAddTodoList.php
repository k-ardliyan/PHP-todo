<?php 

require_once "../Models/TodoList.php";
require_once "../Controllers/AddTodoList.php";

addTodoList("PHP");
addTodoList("Java");
addTodoList("C#");

var_dump($todoList);


?>