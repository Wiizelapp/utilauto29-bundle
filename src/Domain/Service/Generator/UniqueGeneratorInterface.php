<?php
/**
 * UniqueGeneratorInterface.
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

namespace WiizelApp\UtilAuto29\Domain\Service\Generator;

interface UniqueGeneratorInterface
{
    public function generateUniqueInteger(int $digits = 5, ?string $entityClass = null, ?string $field = null, int $maxAttempts = 50): int;
    public function generateUniqueString(int $length = 8, string $prefix = '', ?string $entityClass = null, ?string $field = null, int $maxAttempts = 50): string;
    public function generateToken(int $bytes = 6, ?string $entityClass = null, ?string $field = null, int $maxAttempts = 50): string;
}