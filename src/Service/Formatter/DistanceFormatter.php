<?php

declare(strict_types=1);

/**
 * DistanceFormatter.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */


namespace Shared\Service\Formatter;

final class DistanceFormatter
{
    public function format(int $km): string
    {
        return number_format($km, 0, ' ', ' ') . ' km';
    }
}