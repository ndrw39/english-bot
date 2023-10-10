<?php

namespace App\Components;

use App\Components\Enums\State;

interface InlineButtonContract
{
    public function getLabel(): string;
    public function getState(): State;
    public function setCallbackData(): self;
    public function getCallbackData(): string;
}
