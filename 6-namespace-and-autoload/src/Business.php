<?php

namespace Acme;

use Acme\Person;
use Acme\Staff;

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
