<?php 

require_once "../Models/TodoList.php";
require_once "../Controllers/AddTodoList.php";
require_once "../Controllers/ShowTodoList.php";
require_once "../Controllers/RemoveTodoList.php";

addTodoList("PHP");
addTodoList("Java");
addTodoList("C#");
addTodoList("Python");
addTodoList("Ruby");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();

?>