<?php
/**
 * UploadPathProvider.
 *
 * Wiizel App - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Wiizel Softwares <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

declare(strict_types=1);

namespace WiizelApp\UtilAuto29\Service;

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