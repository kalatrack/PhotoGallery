<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
        $aaask = array('ali','hussain','haroon');$an = array_shift($aaask);
        print_r($an);echo "<Br>";
        echo "this is new comparison methods <br>";
        class Box{
        	public $name = "nello";
        }
        $box = new Box();
        $another_box = new Box();
        $box_ref = $box;
        $box_clone = clone $box;
        $box_changed = clone $box;
        $box_change_ref = $box;
        $box_changed->name = "Hello";
        echo $box === $box ? 'true' : "False";
        echo $box === $another_box ? 'true' : "False";
        echo $box === $box_ref ? 'true' : "False_ref";
        echo $box === $box_clone ? 'true' : "False_clone";
        echo $box === $box_change_ref ? 'true' : "False";
        echo $box === $box_changed ? 'true' : "False";
        echo "<Br>";
        echo "Constructor run whenever an instance is created or class a class it will work";
        echo "Cloning of object<Br>";
        class dd{
        	public $name;
        	function __construct(){
        		echo "New Reference is created that set value to it";
        	}
        	function __clone(){
        		echo "New Clone is created that make  a copy ";
        	}
        }
        $a = new dd();
        $a->name = "tea";
        echo $a->name; echo "<br>";
        $b = $a;echo "=  this is an referance =  ";
        $b->name = "coffee";
        echo $a->name;
        echo "<Br>";
        $c = clone $a;
        $c->name = "Nello";
        echo "a = {$a->name}   c=  {$c->name}this is a Clone";
        echo "<br>";
        echo "Constructure and Destructure<br>";
        class Table{
        	public $leg;
        	static public $total_table = 0;
        	function __construct(){
        		$this->leg = 4;
        		 Table::$total_table++;
        	}
        }
        $t1 = new Table();
        echo $t1->leg;echo "<br>";
        echo Table::$total_table;echo "<br>";
        $t2 = new Table();$t3 =  new Table();echo Table::$total_table;
        echo "<br>";
        echo "Reference the Parent Class<br>";
        class A{
        	static $a = 10;
        	static function modifie_a(){
        		return self::$a+10;
        	}
        }
        class B extends A{

        }
        echo B::$a;echo "<br>";
        echo B::modifie_a();




        	echo "<br>";
        class Student{
        	static $total_student = 0;
        	public $count_student = 60;
        	static function about_student($value='Hello'){
        			echo Student::$total_student." ".$value." Welcome Student";
        	}
        	public function in_stu(){
        		$this->count_student = 100;
        		echo $this->count_student." ".Student::$total_student." ".Student::about_student(" ehehhehehe");
        	}
        }
        Student::about_student();
        echo "<br>";
        Student::$total_student = 50;
        Student::about_student("How are all of you");echo "<br>";
        $aaa = new Student();
        $aaa->in_stu();


        ?>

    </body>
</html>
