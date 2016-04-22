<?php

date_default_timezone_set("America/Chicago");

function logMessage($logLevel, $message)
{
    //setting variable for correct time/date format
    $currentDateTime = date('Y-m-d h:i:s=T');

    $currentDate = date('Y-m-d');
    
    //checking time format
    var_dump($currentDateTime);

    //setting the file's name to a variable
    $filename = "log-$currentDate.log";

    //creating handle to the file, amending file by placing stuff at end
    $handle = fopen($filename, 'a');

    //writes new stuff to file, with correct order and spacing
    fwrite($handle, PHP_EOL . $currentDateTime . " " . $logLevel . " " . $message);
    
    //closes connection
    fclose($handle);
}

//new function to log info message, with variable to hold any user message
function logInfo($message) 
{
    logMessage("INFO", $message);
}
 
//new function to log error message, with variable to hold any user message   
function logError($message)
{
    logMessage("ERROR", $message);  
}

//call each new function with new message
logInfo("It's working!");
logError("Yay, no error!");









