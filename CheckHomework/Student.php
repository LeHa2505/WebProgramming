<?php 
class Person{
    public $name;
    public $age;
    public static $count = 0 ;
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function __message(){
        echo "My name is {this->name}.I'm {this->age} years old";
    }
}
class Student extends Person{
    public $class;
    public function __construct($name,$age,$class){
        parent::__construct($name,$age);
        $this->class = $class;
    }
    public function __message(){
        echo "My name is {$this->name}.I'm {$this->age} years old.I'm in grade {$this->class}.";
        self::$count += 1;
        echo "   =>   Number of students is ";
        echo self::$count;
        echo"\n";
    }
}
?>