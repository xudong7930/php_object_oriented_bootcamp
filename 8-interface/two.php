<?php
interface Logger {
    public function execute();
}

class LogToFile implements Logger {
    public function execute()
    {
        var_dump("log the message to a file");
    }
}

class LogToDatabase implements Logger {
    public function execute()
    {
        var_dump("log the message to a database");
    }
}

class UserController {
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $this->logger->execute();
    }
}

(new UserController(new LogToFile))->show();
(new UserController(new LogToDatabase))->show();
