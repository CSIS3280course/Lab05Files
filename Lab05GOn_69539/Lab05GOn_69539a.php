<?php

//Required Files
require("inc/html.inc.php");
require("inc/todo.inc.php");
//require("inc/config.inc.php");

//Check POST
if($_POST){
$newItem = $_POST['newTodo'];
    addTodoToFile($newItem);
}
//var_dump($newItem);

//Assemble the html response
$title = "Lab 05 Part A";
html_header($title);
$myArray = get_todolist();
html_todolist($myArray);

html_footer();

?>
