<?php

/*
 * Name: Gregori Gualdron
 * Student Number: 300269539
 * Description: Controller for proccessing the accounts files.
 */

//Add required files

//require file where I store variables for filenames
require("/inc/config.inc.php");


//Read initian file with the accounts and retur string with its content
function get_accounts()	{
    $handle = fopen(ACCOUNTS_FILE, 'r');
    $data = fread($handle,filesize(ACCOUNTS_FILE));
    $data = str_replace("$","",$data);
    $accountsLine = explode("\n",$data);
    fclose($handle);

    return $accountsLine;
}

//Receives the string with initial file content, tokenize it, and add the tax calculation to a new file.
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
        //Calculating tax value
        $tax = ($recordArray[4]) * 0.14;    
        $total = $recordArray[4] + $tax;
        
        //append accountAmount and total to the line
        fwrite($handle,$tax.",");
        fwrite($handle,$total.",\n");

    }

}

//not used. I will leve it there to see what was its purpouse
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

        for($i = 0; $i < count($token); $i++){
            if($i == 4){
                $format = floor($token[4]*100)/100;
                echo "<td>$".$format."</td>";
            }
            elseif($i == 5){
                $format = floor($token[5]*100)/100;
                echo "<td>$".$format."</td>";
            }
            elseif ($i == 6) {
                $format = floor($token[6]*100)/100;
                echo "<td>$".$format."</td>";
            }            
            else{
                echo "<td>".$token[$i]."</td>";
            }
        }

        echo "</tr>";

    }

}


?>
