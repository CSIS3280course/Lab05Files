<?php

//Required Files
require("/inc/html.inc.php");
require("/inc/accounts.inc.php");


//Get the accounts
$getAccounts = get_accounts();
var_dump($getAccounts);
//add tax @greg
add_tax($getAccounts);


//Assemble the html page
$title = "Lab 05 Part B";
html_header($title);
echo displayNewAccounts();
html_footer();

?>
