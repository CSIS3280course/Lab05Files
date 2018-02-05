<?php

    require("/inc/config.inc.php");

function get_accounts()	{
    $handle = fopen(ACCOUNTS_FILE, 'r');
    $data = fread($handle,filesize(ACCOUNTS_FILE));
    $accountsLine = explode("\n",$data);
    fclose($handle);

    return $accountsLine;
}


function add_tax($accountLines)	{
   
    foreach($accountLines as $line){
    //Split the lines by commas to get single recordArray
    $recordArray = explode(",",$line);


    //loop through recordArray and add to newAccountFile
    foreach($recordArray as $record){
    //Open or create newAccountsFile
    $handle = fopen(NEWACCOUNTS_FILE, 'a');        
    fwrite($handle, $record.",");    

    }

    //get the 4th element which is the accountAmount. Create tax and total variables
    var_dump($recordArray[4]);
    $recordFour = floatval($recordArray[4]);
    var_dump($recordFour);
    $tax = ($recordArray[4]) * 0.12;
    var_dump($tax);
    $total = $recordArray[4] + $tax;
    //append accountAmount and total to the line
    fwrite($handle,$tax.",");
    fwrite($handle,$total.",\n");  //pending: add a condition so that last line dont show with comma

    var_dump($line);

    }
   
}


function write_accounts($newledger){

}

function displayNewAccounts()	{  //@greg
    $handle = fopen(NEWACCOUNTS_FILE, 'r');
    $data = fread($handle,filesize(NEWACCOUNTS_FILE));
    $newAccountLine = explode("\n",$data);
    echo "<table>";


    foreach($newAccountLine as $line){
        echo "<tr>";
        
        $token = explode(",",$line);

        foreach($token as $record){
            echo "<td>".$record."</td>";
        }

        echo "</tr>";

    }

}


?>
