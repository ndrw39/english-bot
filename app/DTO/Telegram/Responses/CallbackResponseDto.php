<?php

namespace App\DTO\Telegram\Responses;

class CallbackResponseDto
{
    public function __construct(
        public readonly string $name,
        public readonly string $method,
        public readonly string $contentType,
        public readonly string $body,
        public readonly string $decoded,
    ) {
    }
}
