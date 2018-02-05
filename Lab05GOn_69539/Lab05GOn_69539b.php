<?php

/*
 * Name: Gregori Gualdron
 * Student Number: 300269539
 * Description: Controller for proccessing the accounts files.
 */

//Required Files
require("/inc/html.inc.php");
require("/inc/accounts.inc.php");


//Get the accounts
$getAccounts = get_accounts();
//add tax @greg
add_tax($getAccounts);


//Assemble the html page
$title = "Lab 05 Part B";
html_header($title);
echo displayNewAccounts();
html_footer();

?>
