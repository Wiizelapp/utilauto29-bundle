<?php
/**
 * DistanceFormatter.
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

namespace WiizelApp\UtilAuto29\Service\Formatter;

final class DistanceFormatter
{
    public function format(int $km): string
    {
        return number_format($km, 0, ' ', ' ') . ' km';
    }
}