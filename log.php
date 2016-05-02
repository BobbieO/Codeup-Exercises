<?php

//set correct timezone
date_default_timezone_set("America/Chicago");

class Log
{
    public $filename;
    
    public function logMessage($logLevel, $message)
    {
        $this->namefile();

        $handle = fopen($this->filename, 'a');

        //setting variable for correct time/date format
        $currentDateTime = date('Y-m-d h:i:s=T');

        fwrite($handle, PHP_EOL . $currentDateTime . " " . "[" . $logLevel ."]" . " " . $message);

        fclose($handle);
    }

    public function info($message) 
    {
        $this->logMessage('INFO', $message);
    }

    public function error($message)
    {
        $this->logMessage("ERROR", $message);
    }

    public function namefile()
    {
        $currentDate = date('Y-m-d');

        //setting the file's name to a variable
        $this->filename = "log-$currentDate.log";

    }
}

?>
