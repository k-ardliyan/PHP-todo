<?php 

require_once "../Views/ViewShowTodoList.php";
require_once "../Controllers/AddTodoList.php";

addTodoList("Todo List x");
addTodoList("Todo List y");
addTodoList("Todo List z");
addTodoList("Todo List a");
addTodoList("Todo List b");

viewShowTodoList();

?>