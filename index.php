<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>物件導向</title>
</head>
<body>
<?php
class Person {
    public $name;
    public $age;

    public function __construct($name , $age){
        $this->name =$name;
        $this->age =$age;
    }

    public function great(){
        echo "Hello my name is {$this->name} and  I'm  {$this->age} years old. <br>";
    }
}    
    

$jason = new Person('jason',18);
echo $jason->name;
echo "<br>" ;
echo $jason->age;
echo "<br>" ;
$jason->great();

?>
</body>
</html>