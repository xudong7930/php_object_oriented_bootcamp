<?php

class Math {
    public static function add(...$args)
    {
        return array_sum($args);
    }
}

// echo (new Math)->add(1, 2, 4);
echo Math::add(1, 2, 4);
