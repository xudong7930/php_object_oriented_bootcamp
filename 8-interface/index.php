<?php
// contract
interface Animal {
    const TAX = .5;
    public function communicate();
}

class Dog implements Animal {
    
    public function communicate()
    {
        return 'bark';
    }
}

class Cat implements Animal {

    public function communicate()
    {
        var_dump(Animal::TAX);
        return 'meow';
    }
}

(new Cat)->communicate();
