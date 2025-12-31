<?php

namespace App\Domain\Service\Generator;

interface UniqueGeneratorInterface
{
    public function generateUniqueInteger(int $digits = 5, ?string $entityClass = null, ?string $field = null, int $maxAttempts = 50): int;
    public function generateUniqueString(int $length = 8, string $prefix = '', ?string $entityClass = null, ?string $field = null, int $maxAttempts = 50): string;
    public function generateToken(int $bytes = 6, ?string $entityClass = null, ?string $field = null, int $maxAttempts = 50): string;
}