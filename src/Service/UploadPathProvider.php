<?php

declare(strict_types=1);

namespace Shared\Service;

final class UploadPathProvider
{
    public function __construct(
        private string $uploadDir,
        private string $uploadPublicDir
    ) {
        $this->uploadDir = realpath($uploadDir) ?: $uploadDir;
    }

    public function getUploadDir(): string
    {
        return $this->uploadDir;
    }

    public function getPublicPath(string $filename): string
    {
        return rtrim($this->uploadPublicDir, '/') . '/' . ltrim($filename, '/');
    }
}