<?php 

require_once "../Views/ViewAddTodoList.php";
require_once "../Controllers/AddTodoList.php";
require_once "../Controllers/ShowTodoList.php";

addTodoList("Todo List x");
addTodoList("Todo List y");
addTodoList("Todo List z");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();


?>