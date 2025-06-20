<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>物件導向</title>
</head>

<body>
    <?php
    class Person
    {
        //成員,屬性
        //public:公開的屬性，可以在任何地方訪問，可讀可寫
        //private:私有的屬性，只能在類別(物件)內部訪問
        //protected:受保護的屬性，只能在類別(物件)內部或子類中訪問

        protected $name;
        protected $age;

        //方法,行為,透過建構函式告知name跟age  
        public function __construct($name, $age)
        {
            $this->name = $name; //this = Person
            $this->age = $age;
        }

        //方法
        //屬性不能直接被提取，要透過方法
        public function greet()
        {
            echo "Hello my name is {$this->name} and  I'm  {$this->age} years old. <br>";
        }
        public function getName()
        {
            return $this->name;
        }
        function getAge()
        { //沒寫屬性的話預設都是public
            return $this->age;
        }
        function setName($name)
        {
            return $this->name = $name;
        }
        function setAge($Age)
        {
            return $this->name = $Age;
        }
    }

    //封裝
    $jason = new Person('jason', 18);
    echo $jason->getName();
    echo "<br>";
    echo $jason->getAge();
    echo "<br>";
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
    interface PersonInterface
    { //介面
        public function getGender();
        public function say();
    }

    class Man extends Person implements PersonInterface
    {
        private $gender = '男性';
        public static $skin = 'yellow';

        function getGender()
        {
            return $this->gender;
        }
        function say() {}
        static function getSkin()
        {
            return self::$skin;
        }
    }

    class Woman extends Person
    { //即使沒東西，
        private $gender = '女性';
        public $skin = 'white';

        function getGender()
        {
            return $this->gender;
        }
        function say() {

        }
        static function getSkin()
        {
            return self::$skin;
        }
    }
    $man = new Man('Max', 25); //父類別的所有類型跟方法都可以使用
    echo $man->getName();
    echo "<br>";
    echo $man->getGender();
    echo "<br>";
    $man->greet();

    echo Man::$skin;
    echo Man::getSkin();
    echo "<hr>";
    
    $woman = new Woman('Mitty', 20);
    echo $woman->getName();
    echo "<br>";
    echo $woman->getGender();
    echo "<br>";
    $woman->greet();

    //檢查某個變數是不是物件
    var_dump($jason instanceof Person); // 會印出 bool(true)
    var_dump($man instanceof Person);   // 也會印出 bool(true)
    var_dump($man instanceof Man);      // 也是 true

    ?>
</body>

</html>