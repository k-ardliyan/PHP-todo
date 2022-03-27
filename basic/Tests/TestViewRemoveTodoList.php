<?php 

require_once "../Models/TodoList.php";
require_once "../Views/ViewRemoveTodoList.php";
require_once "../Controllers/AddTodoList.php";
require_once "../Controllers/ShowTodoList.php";

addTodoList("Todo List x");
addTodoList("Todo List y");
addTodoList("Todo List z");

showTodoList();

viewRemoveTodoList();

showTodoList();




?>