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
    //成員,屬性
    //public:公開的屬性，可以在任何地方訪問，可讀可寫
    //private:私有的屬性，只能在類別(物件)內部訪問
    //protected:受保護的屬性，只能在類別(物件)內部或子類中訪問

    public $name;
    public $age;

    //方法,行為,透過建構函式告知name跟age  
    public function __construct($name , $age){//沒寫屬性的話預設都是public
        $this->name =$name;//this = Person
        $this->age =$age;
    }

    //方法
    //屬性不能直接被提取，要透過方法
    public function greet(){
        echo "Hello my name is {$this->name} and  I'm  {$this->age} years old. <br>";
    }
    function getName(){
        return $this->name;
    }
    function getAge(){
        return $this->age;
    }
    function setName($name){
        return $this->name=$name;
    }
    function setAge($Age){
        return $this->name=$Age;
    }
}    
    

$jason = new Person('jason',18);
echo $jason->getName();
echo "<br>" ;
echo $jason->getAge();
echo "<br>" ;
$jason->greet();

echo "<hr>";

$jason->setName("Mary");
//$jason->age=20;
echo $jason->getName();
echo "<br>";
echo $jason->getAge();   
echo "<br>";
$jason->greet();

?>

<hr>
<h2>繼承</h2>
<?php



?>
</body>
</html>