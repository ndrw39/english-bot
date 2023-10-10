<?php

namespace App\Components;

use App\Components\Enums\State;

interface ButtonContract
{
    public function getLabel(): string;
    public function getState(): State;
}
