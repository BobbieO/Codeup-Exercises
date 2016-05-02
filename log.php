<?php

class Log
{
    public $filename;

    public function logMessage($logLevel, $message)
    {
        $handle = fopen($this->filename, 'a');
        fwrite($handle, PHP_EOL . "[" . $logLevel . "]" . $message);
        fclose($handle);
    }

    public function info($message) 
    {
        logMessage("INFO", $message);
    }

    public function error($message)
    {
        logMessage("ERROR", $message);
    }
}

?>


// <!-- NOTES

// //this is the class (the blueprint, the plan)
// class Person
// {
//     public $firstName;
//     public $lastName;
//     public $fruit = array();

//     public function roamCountryside()
//     {
//         $distance = mt_rand(1, 50);
//         return $this->firstName . " is walking [$distance} miles west.";
//     }
// }

// //instantiated class ($person is the object, instance of plan). This would be in a separate file in actual use, not here.
// $person = new Person;
// $person->firstName = 'Isaac';
// $person->lastName = 'Castillo';
// $person->fruit = array('apple', 'orange'); 

// //another object of person in the class Person
// $person2 = new Person;
// $person2->firstName = 'Bobbie';

// echo $person->roamCountryside();
// echo $person2->roamCountryside();




// -->