<?php
class Person {
    public static $age;

    public function haveBirthday()
    {
        static::$age += 1;
    }
}

$joe = new Person;
$joe->haveBirthday();
// echo $joe->age; // 不能通过实例访问静态属性和方法

echo Person::$age;


$jane = new Person;
$jane->haveBirthday();
echo Person::$age;
