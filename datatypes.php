<?php
//PHP DATA TYPES
#1 booleans
/*$lightOn = (bool) 1;
$str = [];
var_dump($str);
echo is_bool($lightOn);*/

#2 integers (size is between -2,147,483,648 and 2,147,483,647)
/*$int = 1001; //decimal
$int = -2300;
$octal = 0125; // octal equivalent 85
$hex = 0x1E; // HEXADECIMAL equivalent OF DECIMAL 30
$binary = 0b1111001; // equivalent OF DECIMAL 121

$maximum_size = 9554475936854775999;
var_dump($maximum_size);*/
#3 float (same as double or real numbers in PHP)
/*$float = 10.3;
var_dump($float);*/
#4 strings
/*$string = "I am a string";
$string = 'I am a string in single quote<br />';
echo var_dump($string);

#HEREDOC
echo <<<EOT
Lets test the $string <br />
EOT;

#NOWDOC
echo <<<'TEST'
I am using nowdoc $string
TEST;*/

#5 arrays
/*$person = array(
    'name' => 'Terry', 'age' => 33, 'likes' => array('reading', 'eating', 'swimming')
);
$persons = [
    'Terry', 33, 5.9
];
echo $person['likes'][2];
print_r($person['likes']);*/

//var_dump($persons);
#6 objects
/*class Person {
    public $name;
    
    public function setName($string) {
        $this->name = $string;
    }
    
    public function getName() {
        return $this->name;
    }
}

$person = new Person();
$person->setName("Osayawe Terry");
echo $person->getName();*/

#7 callables

#8 resources
#database connection, image canvas or file
#9 null
$var = 8;
$var = null;
var_dump($var);


