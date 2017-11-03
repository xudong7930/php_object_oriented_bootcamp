<?php

class Mother {
    public function getEyeConut()
    {
        return 2;
    }
}

class Child extends Mother {
    
}

echo (new Child)->getEyeConut();
