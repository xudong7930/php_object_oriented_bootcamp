<?php

class Person {

    private $name;
    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age * 365;
    }

    /**
     * @return mixed
     */
    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception('invalid age');
        }
        return $this->age = $age;
    }
}

$haoshuyun = new Person('hao shu yun');
$haoshuyun->setAge(23);

var_dump($haoshuyun, $haoshuyun->getAge());
