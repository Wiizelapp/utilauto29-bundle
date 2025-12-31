<?php

declare(strict_types=1);

/**
 * CreateEstimateHandler.
 *
 * EI Yann Cario - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Estimate\ValueObject;

final class Picture
{
    public function __construct(
        private string $filename,
        private string $originalName
    ) {}

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function getOriginalName(): string
    {
        return $this->originalName;
    }
}