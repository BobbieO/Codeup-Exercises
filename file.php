<?php
require 'Log.php';

class File 
{
    public $handle;

    public function __construct($filename = 'file.txt')
    {
        $this->handle = fopen($filename, 'a');
    }    

    public function append($message)
    {
        fwrite($this->handle, $message);
    }

    public function close()
    {
        fclose($this->handle);
    }
}



?>