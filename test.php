<?php

class Apples{
    
    //The name of the person.
    public $apple_type, $apple_color, $apple_size;
    
    public function __construct($apple_type, $apple_color,$apple_size) {
        $this->apple_size = $apple_type;
        $this->apple_color = $apple_color;
        $this->apple_type = $apple_size;
    }
    
    public function speak(){
        echo 'Hi, my name is ' . $this->apple_size . '!';
    }
    
}

//Connect to the MySQL database using the PDO object.
$pdo = new PDO('mysql:host=localhost;dbname=db001', 'root', '');

//Instantiate object.
$apples = new Apples('Red Delicious', 'Red', 'medium');

//var_dump the object so that we can see what its structure looks like.
var_dump($apples);

//Serialize the object into a string value that we can store in our database.
$serializedObject = serialize($apples);

//Prepare our INSERT SQL statement.
$stmt = $pdo->prepare("INSERT INTO objects (data) VALUES (?)");

//Execute the statement and insert our serialized object string.
$stmt->execute(array(
    $serializedObject
));
?>