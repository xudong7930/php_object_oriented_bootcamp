<?php
class Task {
    public $description;
    public $complete = false;

    public function __construct($description)
    {
        $this->description = $description;
        var_dump('called');
    }

    public function complete()
    {
        $this->complete = true;
    }
}

$task = new Task('noting');
$task2 = new Task('pick up grocery');
$task2->complete();

var_dump($task2->description, $task2->complete);
