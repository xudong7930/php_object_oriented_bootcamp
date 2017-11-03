<?php

class Person {
    protected $name;

    public function __construct($name)
    {
        
    }

}

class Business {
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hiring(Person $person)
    {
        // sending messages: add
        $this->staff->add($person);
    }

    public function staffMembers()
    {
        return $this->staff->members();
    }
}

class Staff {
    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}

$staff = new Staff;
$zqdl = new Business($staff);
$zqdl->hiring(new Person('xudong'));
$zqdl->hiring(new Person('sbjsw'));

var_dump($staff->members());
