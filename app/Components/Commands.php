<?php

namespace App\Components;

final class Commands
{
    public function start() {

    }

    public function __call(string $methodName, array $arguments)
    {
       return call_user_func_array($this->$methodName, $arguments);
    }
}
