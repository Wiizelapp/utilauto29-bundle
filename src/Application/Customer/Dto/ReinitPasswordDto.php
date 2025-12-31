<?php

declare(strict_types=1);

namespace Shared\Application\Customer\Dto;

class ReinitPasswordDto
{
    public function __construct(
        public ?int $code = null,
        public ?string $password = null,
    ){}
}