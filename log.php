<?php


?>

<!DOCTYPE html>
<html>
<head>
    <title>Classes and Objects I</title>
</head>
<body>

</body>
</html>


<!-- NOTES

//this is the class (the blueprint, the plan)
class Person
{
    public $firstName;
    public $lastName;
    public $fruit = array();

    public function roamCountryside()
    {
        $distance = mt_rand(1, 50);
        return $this->firstName . " is walking [$distance} miles west.";
    }
}

//instantiated class ($person is the object, instance of plan)
$person = new Person;
$person->firstName = 'Isaac';
$person->lastName = 'Castillo';
$person->fruit = array('apple', 'orange'); 

//another object of person in the class Person
$person2 = new Person;
$person2->firstName = 'Bobbie';

echo $person->roamCountryside();
echo $person2->roamCountryside();




-->