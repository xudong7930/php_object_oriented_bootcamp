<?php
/*
抽象类: 类似于模版，规范后让子类实现详细功能。
1. 不能被实例化
2. 可以有属性和方法
3. 必须有抽象方法, 子类继承抽象类,必须实现其中的抽象方法.
 */
abstract class Shape {
    protected $color;
    
    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract protected function area();
}

class Square extends Shape {
    protected $length = 4;

    public function area()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape {
    protected $bash = 4;
    protected $height = 7;

    public function area()
    {
        return .5 * $this->bash * $this->height;
    }
}

class Circle extends Shape {
    protected $radius = 5;

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}

// echo (new Square)->area();
// echo (new Triangle)->area();
echo (new Circle('red'))->area();
