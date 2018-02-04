<?php

require("inc/config.inc.php");

//This function is used to get the list and return an arrray of the items
function get_todolist()	{
    //define filename
    $handle = fopen(FILE_NAME, 'r');
    //read the file
    $content = fread($handle,filesize(FILE_NAME));
    //close file
    fclose($handle);
    //
    $todos = explode("\n",$content);

    //var_dump($todos);

    return $todos;

}


//This function is used to append to the todo list
function append_todolist($todo_item)	{       
        foreach($todo_item as $item){
            echo $item.'</br>';
        }
           
}

//Add TODO item to file
function addTodoToFile($new_line){
    $handle = fopen(FILE_NAME, 'a');
    fwrite($handle, "\n".$new_line);
}

	
?>
