<?php

namespace App\Components;

use Illuminate\Support\Facades\View;

interface StateContract
{
    public function getMessageView(): View;

    /**
     * @return InlineButtonContract[]
     */
    public function getInlineButtons(): array;

    /**
     * @return ButtonContract[]
     */
    public function getButtons(): array;
}
